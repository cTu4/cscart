<?php /* Smarty version Smarty-3.1.21, created on 2020-10-26 21:44:16
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\wishlist\hooks\products\product_name.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14924785285f97190005efe0-57298867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46c3502250c90a9d5cff637302a1d612ac2d78c1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\products\\product_name.override.tpl',
      1 => 1603737702,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14924785285f97190005efe0-57298867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'is_wishlist' => 0,
    'show_name' => 0,
    'hide_links' => 0,
    'product' => 0,
    'show_trunc_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f97190008c5b8_00101336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f97190008c5b8_00101336')) {function content_5f97190008c5b8_00101336($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.live_edit.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?><?php echo "&combination=";?><?php echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];?><?php }
$_tmp20=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_tmp20), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?><?php echo "&combination=";?><?php echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];?><?php }
$_tmp21=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_tmp21), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],44,"...",true);
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }?>
<?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_name.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_name.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?><?php echo "&combination=";?><?php echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];?><?php }
$_tmp22=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_tmp22), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {?><?php echo "&combination=";?><?php echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];?><?php }
$_tmp23=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_tmp23), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],44,"...",true);
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }?>
<?php }?>
<?php }
}?><?php }} ?>
