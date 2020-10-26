<?php /* Smarty version Smarty-3.1.21, created on 2020-10-26 22:07:17
         compiled from "C:\OpenServer\domains\cscart\design\themes\yacht\templates\blocks\static_templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572963005f9719667f9d17-04626007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce887601a1cfd83ca8b4b8e944f8d91867ad136' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\yacht\\templates\\blocks\\static_templates\\header.tpl',
      1 => 1603739235,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1572963005f9719667f9d17-04626007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f971966840702_37116039',
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f971966840702_37116039')) {function content_5f971966840702_37116039($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="header">
    <div class="covid"><?php echo $_smarty_tpl->__('covid');?>
 &#8594;</div>
    <div class="main-header col-12">
        <div class="logo">Yachts & More</div>
        <nav class="d-flex">
            <div>aaaaa</div>
            <div>aaaaa</div>
            <div>aaaaa</div>
        </nav>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/header.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/header.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<div class="header">
    <div class="covid"><?php echo $_smarty_tpl->__('covid');?>
 &#8594;</div>
    <div class="main-header col-12">
        <div class="logo">Yachts & More</div>
        <nav class="d-flex">
            <div>aaaaa</div>
            <div>aaaaa</div>
            <div>aaaaa</div>
        </nav>
    </div>
</div>
<?php }?><?php }} ?>
