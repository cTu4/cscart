<?php /* Smarty version Smarty-3.1.21, created on 2020-10-29 21:39:05
         compiled from "C:\OpenServer\domains\cscart\design\themes\yacht\templates\blocks\static_templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572963005f9719667f9d17-04626007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce887601a1cfd83ca8b4b8e944f8d91867ad136' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\yacht\\templates\\blocks\\static_templates\\header.tpl',
      1 => 1603996735,
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
    <div class="covid "><?php echo $_smarty_tpl->__('covid');?>
 &#8594;</div>
    <div class="main-header d-flex justify-content-between align-items-center ">
        <div class="logo "><a href="#">Yachts & More</a></div>
        <nav class="header-nav d-flex justify-content-around">
            <a href="#"><?php echo $_smarty_tpl->__('boats');?>
</a>
            <a href="#"><?php echo $_smarty_tpl->__('experiences');?>
</a>
            <a href="#"><?php echo $_smarty_tpl->__('destinations');?>
</a>
            <a href="#"><?php echo $_smarty_tpl->__('events');?>
</a>
        </nav>
        <div class="right d-flex justify-content-between align-items-center">
            <div class="add_boat">
                <svg class="plus" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 3C5.67 3 5.4 3.27 5.4 3.6V5.4H3.6C3.27 5.4 3 5.67 3 6C3 6.33 3.27 6.6 3.6 6.6H5.4V8.4C5.4 8.73 5.67 9 6 9C6.33 9 6.6 8.73 6.6 8.4V6.6H8.4C8.73 6.6 9 6.33 9 6C9 5.67 8.73 5.4 8.4 5.4H6.6V3.6C6.6 3.27 6.33 3 6 3ZM6 0C2.688 0 0 2.688 0 6C0 9.312 2.688 12 6 12C9.312 12 12 9.312 12 6C12 2.688 9.312 0 6 0ZM6 10.8C3.354 10.8 1.2 8.646 1.2 6C1.2 3.354 3.354 1.2 6 1.2C8.646 1.2 10.8 3.354 10.8 6C10.8 8.646 8.646 10.8 6 10.8Z" fill="#2466F6"/>
                </svg>
                <a href="#"><?php echo $_smarty_tpl->__('add_boat');?>
</a>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("blocks/currencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('format'=>"name"), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("blocks/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="weather">
                <img src="images/Summer.svg" alt="weather">
                <span>+24°C</span>
            </div>
           <?php $_smarty_tpl->_capture_stack[0][] = array('content', null, null); ob_start(); ?>
               <?php echo $_smarty_tpl->getSubTemplate ("blocks/my_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('auth'=>$_smarty_tpl->tpl_vars['auth']->value), 0);?>

           <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("blocks/wrappers/onclick_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['content']), 0);?>





        </div>

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
    <div class="covid "><?php echo $_smarty_tpl->__('covid');?>
 &#8594;</div>
    <div class="main-header d-flex justify-content-between align-items-center ">
        <div class="logo "><a href="#">Yachts & More</a></div>
        <nav class="header-nav d-flex justify-content-around">
            <a href="#"><?php echo $_smarty_tpl->__('boats');?>
</a>
            <a href="#"><?php echo $_smarty_tpl->__('experiences');?>
</a>
            <a href="#"><?php echo $_smarty_tpl->__('destinations');?>
</a>
            <a href="#"><?php echo $_smarty_tpl->__('events');?>
</a>
        </nav>
        <div class="right d-flex justify-content-between align-items-center">
            <div class="add_boat">
                <svg class="plus" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 3C5.67 3 5.4 3.27 5.4 3.6V5.4H3.6C3.27 5.4 3 5.67 3 6C3 6.33 3.27 6.6 3.6 6.6H5.4V8.4C5.4 8.73 5.67 9 6 9C6.33 9 6.6 8.73 6.6 8.4V6.6H8.4C8.73 6.6 9 6.33 9 6C9 5.67 8.73 5.4 8.4 5.4H6.6V3.6C6.6 3.27 6.33 3 6 3ZM6 0C2.688 0 0 2.688 0 6C0 9.312 2.688 12 6 12C9.312 12 12 9.312 12 6C12 2.688 9.312 0 6 0ZM6 10.8C3.354 10.8 1.2 8.646 1.2 6C1.2 3.354 3.354 1.2 6 1.2C8.646 1.2 10.8 3.354 10.8 6C10.8 8.646 8.646 10.8 6 10.8Z" fill="#2466F6"/>
                </svg>
                <a href="#"><?php echo $_smarty_tpl->__('add_boat');?>
</a>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("blocks/currencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('format'=>"name"), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("blocks/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="weather">
                <img src="images/Summer.svg" alt="weather">
                <span>+24°C</span>
            </div>
           <?php $_smarty_tpl->_capture_stack[0][] = array('content', null, null); ob_start(); ?>
               <?php echo $_smarty_tpl->getSubTemplate ("blocks/my_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('auth'=>$_smarty_tpl->tpl_vars['auth']->value), 0);?>

           <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("blocks/wrappers/onclick_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['content']), 0);?>





        </div>

    </div>
</div>
<?php }?><?php }} ?>
