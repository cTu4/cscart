<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Backend\Cache;

use Tygh\Exceptions\ClassNotFoundException;
use PDO;

class Sqlite extends ABackend
{
    private $db;
    private $db_fetch;
    private $sqlite_timeout = 60000;
    private $pdo_sqlite = false;

    private $sqlite_integer;
    private $sqlite_text;
    private $sqlite_blob;

    /**
     * Sqlite constructor.
     *
     * @param $config
     *
     * @throws \Tygh\Exceptions\ClassNotFoundException
     */
    public function __construct($config)
    {
        $this->_config = [
            'store_prefix' => !empty($config['store_prefix']) ? $config['store_prefix'] : null,
            'dir_cache'    => $config['dir']['cache_registry']
        ];

        $init_db = false;
        if (!file_exists($this->_dirCache() . 'cache.db')) {
            $init_db = true;
        }

        $this->db = $this->_dbInit();

        $this->_setTimeout($this->sqlite_timeout);

        if ($init_db == true) {
            $this->db->query('CREATE TABLE cache (id INTEGER PRIMARY KEY AUTOINCREMENT, name varchar(128), company_id int, data blob, expiry int, tags varchar(64), UNIQUE (name, company_id))');
            $this->db->query('CREATE INDEX tags ON cache (tags)');
            $this->db->query('CREATE INDEX company_id ON cache (company_id)');
            $this->db->query('CREATE INDEX exp ON cache (name, company_id, expiry)');
        }

        if (class_exists('\\SQLite3')) {
            $this->sqlite_integer = SQLITE3_INTEGER;
            $this->sqlite_text = SQLITE3_TEXT;
            $this->sqlite_blob = SQLITE3_BLOB;
        } elseif (class_exists('\\PDO') && $this->pdo_sqlite) {
            $this->sqlite_integer = PDO::PARAM_INT;
            $this->sqlite_text = PDO::PARAM_STR;
            $this->sqlite_blob = PDO::PARAM_LOB;
        }

        parent::__construct($config);

        return true;
    }

    /** @inheritDoc */
    public function set($name, $data, $condition, $cache_level = null, $ttl = null)
    {
        $fname = $name . '.' . $cache_level;

        if (!empty($data)) {
            $serialize_data = serialize($data);
            $expiry_time = $this->getCacheExpiryTime($condition, $cache_level, $ttl, 0);

            $st = $this->db->prepare("REPLACE INTO cache (name, company_id, data, tags, expiry) VALUES (:name, :company_id, :data, :tags, :expiry)");
            $st->bindParam(':name', $fname, $this->sqlite_text);
            $st->bindParam(':company_id', $this->_company_id, $this->sqlite_integer);
            $st->bindParam(':data', $serialize_data, $this->sqlite_blob);
            $st->bindParam(':tags', $name, $this->sqlite_text);
            $st->bindParam(':expiry', $expiry_time, $this->sqlite_integer);
            $st->execute();
        }
    }

    /** @inheritDoc */
    public function get($name, $cache_level = null)
    {
        $fname = $name . '.' . $cache_level;

        $expiry_condition = sprintf(' AND (expiry = %d OR expiry > %d)', 0, TIME);
        $res = $this->_dbFetch("SELECT data, expiry FROM cache WHERE name = '$fname' AND company_id = " . $this->_company_id . $expiry_condition);

        if (!empty($name) && !empty($res)) {
            $_cache_data = (!empty($res['data'])) ? @unserialize($res['data']) : false;

            if ($_cache_data !== false) {
                return [$_cache_data];
            }

            // clean up the cache
            $this->db->query("DELETE FROM cache WHERE name = '$fname' AND company_id = " . $this->_company_id);
        }

        return false;
    }

    /** @inheritDoc */
    public function clear($tags)
    {
        if (!empty($tags)) {
            $this->db->query("DELETE FROM cache WHERE tags IN ('" . implode("', '", $tags) . "')");
        }

        return true;
    }

    /** @inheritDoc */
    public function cleanup()
    {
        // clear all stores cache
        $this->db->query("DELETE FROM cache");

        return true;
    }

    /**
     * @param $query
     *
     * @return array
     */
    private function _dbFetch($query)
    {
        $res = $this->db->query($query);
        $fe = [];
        if (!empty($res)) {
            if (get_class($this->db) == 'SQLite3') {
                $fe = $res->fetchArray($this->db_fetch);
            } else {
                $fe = $res->fetch($this->db_fetch);
            }
        }

        return $fe;
    }

    /**
     * @return bool
     */
    private function _dbClose()
    {
        if (get_class($this->db) == 'SQLite3') {
            return $this->db->close();
        } elseif (get_class($this->db) == 'PDO') {
            $this->db = null;

            return true;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     * @throws \Tygh\Exceptions\ClassNotFoundException
     */
    private function _dbInit()
    {
        $this->pdo_sqlite = false;
        if (!class_exists('\\SQLite3') && class_exists('\\PDO')) {
            $drivers = \PDO::getAvailableDrivers();
            if (!empty($drivers)) {
                foreach ($drivers as $driver) {
                    if (strpos($driver, 'sqlite') !== false) {
                        $this->pdo_sqlite = true;
                        break;
                    }
                }
            }
        }

        $init_prefix = '';
        if (class_exists('\\SQLite3')) {
            $db_class = '\\SQLite3';
            $this->db_fetch = SQLITE3_ASSOC;

        } elseif (class_exists('\\PDO') && $this->pdo_sqlite) {
            $db_class = 'PDO';
            $this->db_fetch = PDO::FETCH_ASSOC;
            $init_prefix = 'sqlite://';

        } else {
            throw new ClassNotFoundException('SQLITE cache data storage is not supported. Please choose another one.');
        }

        fn_mkdir($this->_dirCache());

        return new $db_class($init_prefix . $this->_dirCache() . 'cache.db');
    }

    /**
     * Sets timeout for waiting if SQLite database is busy.
     *
     * @param int $msec Timeout in milliseconds
     *
     * @return boolean
     */
    private function _setTimeout($msec)
    {
        $result = false;

        if (method_exists($this->db, 'busyTimeout')) {
            $result = $this->db->busyTimeout($msec);
        } elseif (get_class($this->db) == 'PDO') {
            $result = $this->db->setAttribute(\PDO::ATTR_TIMEOUT, ($msec / 1000));
        }

        return $result;
    }

    /**
     * Gets directory, where cache database is stored
     *
     * @return string directory prefix
     */
    private function _dirCache()
    {
        return $this->_config['dir_cache'] . (!empty($this->_config['store_prefix']) ? $this->_config['store_prefix'] . '/' : '');
    }
}
