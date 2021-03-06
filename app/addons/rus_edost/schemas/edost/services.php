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

// rus_build_edost dbazhenov

$services = array(
    '301' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '301',
        'sp_file' => '',
        'description' => 'EDOST: Почта России (отправление 1-го класса)',
    ),
    '302' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '302',
        'no_insurance_variant' => '301',
        'sp_file' => '',
        'description' => 'EDOST: Почта России (отправление 1-го класса) со страховкой',
    ),
    '303' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '303',
        'sp_file' => '',
        'description' => 'EDOST: Почта России (наземная посылка)',
    ),
    '304' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '304',
        'no_insurance_variant' => '303',
        'sp_file' => '',
        'description' => 'EDOST: Почта России (наземная посылка) со страховкой',
    ),
    '305' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '305',
        'sp_file' => '',
        'description' => 'EDOST: EMS Почта России',
    ),
    '306' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '306',
        'no_insurance_variant' => '305',
        'sp_file' => '',
        'description' => 'EDOST: EMS Почта России со страховкой',
    ),
    '309' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '309',
        'sp_file' => '',
        'description' => 'EDOST: СПСР Экспресс (пеликан-стандарт)',
    ),
    '310' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '310',
        'no_insurance_variant' => '309',
        'sp_file' => '',
        'description' => 'EDOST: СПСР Экспресс (пеликан-стандарт) со страховкой',
    ),
    '311' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '311',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экспресс дверь-дверь)',
    ),
    '312' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '312',
        'no_insurance_variant' => '311',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экспресс дверь-дверь) со страховкой',
    ),
    '313' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '313',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экспресс склад-склад)',
    ),
    '314' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '314',
        'no_insurance_variant' => '313',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экспресс склад-склад) со страховкой',
    ),
    '315' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '315',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экспресс склад-дверь)',
    ),
    '316' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '316',
        'no_insurance_variant' => '315',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экспресс склад-дверь) со страховкой',
    ),
    '317' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '317',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экспресс дверь-склад)',
    ),
    '318' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '318',
        'no_insurance_variant' => '317',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экспресс дверь-склад) со страховкой',
    ),
    '319' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '319',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (супер-экспресс)',
    ),
    '320' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '320',
        'no_insurance_variant' => '319',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (супер-экспресс) со страховкой',
    ),
    '321' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '321',
        'sp_file' => '',
        'description' => 'EDOST: DHL Express (экспресс 18:00)',
    ),
    '322' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '322',
        'no_insurance_variant' => '321',
        'sp_file' => '',
        'description' => 'EDOST: DHL Express (экспресс 18:00) со страховкой',
    ),
    '323' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '323',
        'sp_file' => '',
        'description' => 'EDOST: UPS (Express Saver)',
    ),
    '324' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '324',
        'no_insurance_variant' => '323',
        'sp_file' => '',
        'description' => 'EDOST: UPS (Express Saver) со страховкой',
    ),
    '327' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '327',
        'sp_file' => '',
        'description' => 'EDOST: ЖелДорЭкспедиция',
    ),
    '328' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '328',
        'no_insurance_variant' => '327',
        'sp_file' => '',
        'description' => 'EDOST: ЖелДорЭкспедиция со страховкой',
    ),
    '331' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '331',
        'sp_file' => '',
        'description' => 'EDOST: ПЭК',
    ),
    '332' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '332',
        'no_insurance_variant' => '331',
        'sp_file' => '',
        'description' => 'EDOST: ПЭК со страховкой',
    ),
    '333' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '333',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (международный экспресс)',
    ),
    '334' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '334',
        'no_insurance_variant' => '333',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (международный экспресс) со страховкой',
    ),
    '335' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '335',
        'sp_file' => '',
        'description' => 'EDOST: EMS Почта России (международное отправление)',
    ),
    '336' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '336',
        'no_insurance_variant' => '335',
        'sp_file' => '',
        'description' => 'EDOST: EMS Почта России (международное отправление) со страховкой',
    ),
    '337' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '337',
        'sp_file' => '',
        'description' => 'EDOST: СПСР Экспресс (международное отправление)',
    ),
    '338' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '338',
        'no_insurance_variant' => '337',
        'sp_file' => '',
        'description' => 'EDOST: СПСР Экспресс (международное отправление) со страховкой',
    ),
    '339' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '339',
        'sp_file' => '',
        'description' => 'EDOST: DHL Express (экспресс за границу)',
    ),
    '340' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '340',
        'no_insurance_variant' => '339',
        'sp_file' => '',
        'description' => 'EDOST: DHL Express (экспресс за границу) со страховкой',
    ),
    '341' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '341',
        'sp_file' => '',
        'description' => 'EDOST: UPS (международный Express Saver)',
    ),
    '342' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '342',
        'no_insurance_variant' => '341',
        'sp_file' => '',
        'description' => 'EDOST: UPS (международный Express Saver) со страховкой',
    ),
    '343' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '343',
        'sp_file' => '',
        'description' => 'EDOST: Деловые линии',
    ),
    '344' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '344',
        'no_insurance_variant' => '343',
        'sp_file' => '',
        'description' => 'EDOST: Деловые линии со страховкой',
    ),
    '349' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '349',
        'sp_file' => '',
        'description' => 'EDOST: Гарантпост',
    ),
    '350' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '350',
        'no_insurance_variant' => '349',
        'sp_file' => '',
        'description' => 'EDOST: Гарантпост со страховкой',
    ),
    '351' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '351',
        'sp_file' => '',
        'description' => 'EDOST: Гарантпост (международное отправление)',
    ),
    '352' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '352',
        'no_insurance_variant' => '351',
        'sp_file' => '',
        'description' => 'EDOST: Гарантпост (международное отправление) со страховкой',
    ),
    '353' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '353',
        'sp_file' => '',
        'description' => 'EDOST: PONY EXPRESS',
    ),
    '354' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '354',
        'no_insurance_variant' => '353',
        'sp_file' => '',
        'description' => 'EDOST: PONY EXPRESS со страховкой',
    ),
    '355' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '355',
        'sp_file' => '',
        'description' => 'EDOST: PONY EXPRESS (международное отправление)',
    ),
    '356' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '356',
        'no_insurance_variant' => '355',
        'sp_file' => '',
        'description' => 'EDOST: PONY EXPRESS (международное отправление) со страховкой',
    ),
    '357' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '357',
        'sp_file' => '',
        'description' => 'EDOST: PickPoint (постаматы и пункты выдачи)',
    ),
    '361' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '361',
        'sp_file' => '',
        'description' => 'EDOST: Курьер. Тариф 1',
    ),
    '363' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '363',
        'sp_file' => '',
        'description' => 'EDOST: Курьер. Тариф 2',
    ),
    '365' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '365',
        'sp_file' => '',
        'description' => 'EDOST: Курьер. Тариф 3',
    ),
    '367' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '367',
        'sp_file' => '',
        'description' => 'EDOST: Курьер. Тариф 4',
    ),
    '369' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '369',
        'sp_file' => '',
        'description' => 'EDOST: Самовывоз',
    ),
    '371' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '371',
        'sp_file' => '',
        'description' => 'EDOST: boxberry (до пункта выдачи)',
    ),
    '372' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '372',
        'no_insurance_variant' => '371',
        'sp_file' => '',
        'description' => 'EDOST: boxberry (до пункта выдачи) со страховкой',
    ),
    '373' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '373',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (посылка до пункта выдачи)',
    ),
    '374' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '374',
        'no_insurance_variant' => '373',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (посылка до пункта выдачи) со страховкой',
    ),
    '375' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '375',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (посылка курьером до двери)',
    ),
    '376' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '376',
        'no_insurance_variant' => '375',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (посылка курьером до двери) со страховкой',
    ),
    '377' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '377',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (авто)',
    ),
    '378' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '378',
        'no_insurance_variant' => '377',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (авто) со страховкой',
    ),
    '379' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '379',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (жд)',
    ),
    '380' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '380',
        'no_insurance_variant' => '380',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (жд) со страховкой',
    ),
    '381' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '381',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (авиа)',
    ),
    '382' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '382',
        'no_insurance_variant' => '381',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (авиа) со страховкой',
    ),
    '383' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '383',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (морем)',
    ),
    '384' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '384',
        'no_insurance_variant' => '383',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (морем) со страховкой',
    ),
    '385' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '385',
        'sp_file' => '',
        'description' => 'EDOST: boxberry (курьером до двери)',
    ),
    '386' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '386',
        'no_insurance_variant' => '385',
        'sp_file' => '',
        'description' => 'EDOST: boxberry (курьером до двери) со страховкой',
    ),
    '387' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '387',
        'sp_file' => '',
        'description' => 'EDOST: DPD classic - курьером до двери',
    ),
    '388' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '388',
        'no_insurance_variant' => '387',
        'sp_file' => '',
        'description' => 'EDOST: DPD classic - курьером до двери со страховкой',
    ),
    '389' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '389',
        'sp_file' => '',
        'description' => 'EDOST: DPD online express - курьером до двери',
    ),
    '390' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '390',
        'no_insurance_variant' => '389',
        'sp_file' => '',
        'description' => 'EDOST: DPD online express - курьером до двери со страховкой',
    ),
    '391' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '391',
        'sp_file' => '',
        'description' => 'EDOST: DPD online classic - до пункта выдачи',
    ),
    '392' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '392',
        'no_insurance_variant' => '391',
        'sp_file' => '',
        'description' => 'EDOST: DPD online classic - до пункта выдачи со страховкой',
    ),
    '393' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '393',
        'sp_file' => '',
        'description' => 'EDOST: DPD online classic - курьером до двери',
    ),
    '394' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '394',
        'no_insurance_variant' => '393',
        'sp_file' => '',
        'description' => 'EDOST: DPD online classic - курьером до двери со страховкой',
    ),
    '395' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '395',
        'sp_file' => '',
        'description' => 'EDOST: ЖелДорЭкспедиция (до подъезда)',
    ),
    '396' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '396',
        'no_insurance_variant' => '395',
        'sp_file' => '',
        'description' => 'EDOST: ЖелДорЭкспедиция (до подъезда) со страховкой',
    ),
    '397' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '397',
        'sp_file' => '',
        'description' => 'EDOST: ПЭК (до подъезда)',
    ),
    '398' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '398',
        'no_insurance_variant' => '397',
        'sp_file' => '',
        'description' => 'EDOST: ПЭК (до подъезда со страховкой)',
    ),
    '401' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '401',
        'sp_file' => '',
        'description' => 'EDOST: Деловые линии (до подъезда)',
    ),
    '402' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '402',
        'no_insurance_variant' => '401',
        'sp_file' => '',
        'description' => 'EDOST: Деловые линии (до подъезда) со страховкой',
    ),
    '403' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '403',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (авто - до подъезда)',
    ),
    '404' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '404',
        'no_insurance_variant' => '403',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (авто - до подъезда) со страховкой',
    ),
    '405' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '405',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (жд - до подъезда)',
    ),
    '406' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '406',
        'no_insurance_variant' => '405',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (жд - до подъезда) со страховкой',
    ),
    '407' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '407',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (авиа - до подъезда)',
    ),
    '408' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '408',
        'no_insurance_variant' => '407',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (авиа - до подъезда) со страховкой',
    ),
    '409' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '409',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (морем - до подъезда)',
    ),
    '410' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '410',
        'no_insurance_variant' => '409',
        'sp_file' => '',
        'description' => 'EDOST: Энергия (морем - до подъезда) со страховкой',
    ),
    '411' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '411',
        'sp_file' => '',
        'description' => 'EDOST: Самовывоз (тариф 2)',
    ),
    '413' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '413',
        'sp_file' => '',
        'description' => 'EDOST: Самовывоз (тариф 3)',
    ),
    '415' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '415',
        'sp_file' => '',
        'description' => 'EDOST: Самовывоз (тариф 4)',
    ),
    '417' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '417',
        'sp_file' => '',
        'description' => 'EDOST: РАТЭК (до терминала)',
    ),
    '418' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '418',
        'no_insurance_variant' => '417',
        'sp_file' => '',
        'description' => 'EDOST: РАТЭК (до терминала) со страховкой',
    ),
    '419' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '419',
        'sp_file' => '',
        'description' => 'EDOST: РАТЭК (до подъезда)',
    ),
    '420' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '420',
        'no_insurance_variant' => '419',
        'sp_file' => '',
        'description' => 'EDOST: РАТЭК (до подъезда) со страховкой',
    ),
    '421' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '421',
        'sp_file' => '',
        'description' => 'EDOST: Почта России (посылка онлайн)',
    ),
    '422' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '422',
        'no_insurance_variant' => '421',
        'sp_file' => '',
        'description' => 'EDOST: Почта России (посылка онлайн) со страховкой',
    ),
    '423' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '423',
        'sp_file' => '',
        'description' => 'EDOST: Почта России (курьер онлайн)',
    ),
    '424' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '424',
        'no_insurance_variant' => '423',
        'sp_file' => '',
        'description' => 'EDOST: Почта России (курьер онлайн) со страховкой',
    ),
    '429' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '429',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (магистральный/экономичный - до пункта выдачи)',
    ),
    '430' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '430',
        'no_insurance_variant' => '429',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (магистральный/экономичный - до пункта выдачи) со страховкой',
    ),
    '431' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '431',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (магистральный/экономичный - курьером до двери)',
    ),
    '432' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '432',
        'sp_file' => '',
        'no_insurance_variant' => '431',
        'description' => 'EDOST: СДЭК (магистральный/экономичный - курьером до двери) со страховкой',
    ),
    '435' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '435',
        'sp_file' => '',
        'description' => 'EDOST: Почта России бандероль',
    ),
    '439' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '439',
        'sp_file' => '',
        'description' => 'EDOST: Международная Почта мелкий пакет - авиа',
    ),
    '443' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '443',
        'sp_file' => '',
        'description' => 'EDOST: Международная Почта мелкий пакет заказной - авиа',
    ),
    '447' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '447',
        'sp_file' => '',
        'description' => 'EDOST: Международная Почта посылка - авиа',
    ),
    '448' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '448',
        'no_insurance_variant' => '447',
        'sp_file' => '',
        'description' => 'EDOST: Международная Почта посылка - авиа со страховкой',
    ),
    '449' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '449',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экономичная посылка - до пункта выдачи)',
    ),
    '450' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '450',
        'no_insurance_variant' => '449',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экономичная посылка - до пункта выдачи) со страховкой',
    ),
    '451' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '451',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экономичная посылка - курьером до двери)',
    ),
    '452' => array(
        'status' => 'A',
        'module' => 'edost',
        'code' => '452',
        'no_insurance_variant' => '451',
        'sp_file' => '',
        'description' => 'EDOST: СДЭК (экономичная посылка - курьером до двери) со страховкой'
    ),
);

return $services;
