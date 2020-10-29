<?php /* Smarty version Smarty-3.1.21, created on 2020-10-29 22:23:33
         compiled from "C:\OpenServer\domains\cscart\design\themes\yacht\templates\blocks\my_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15727199745f9718ef65f180-40231357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f3b952211cd311915fe077dbdb48d6b8a8b7a28' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\yacht\\templates\\blocks\\my_account.tpl',
      1 => 1603999410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15727199745f9718ef65f180-40231357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f9718ef7000c7_17604862',
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'title' => 0,
    'config' => 0,
    'auth' => 0,
    'is_vendor_with_active_company' => 0,
    'return_current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9718ef7000c7_17604862')) {function content_5f9718ef7000c7_17604862($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.live_edit.php';
if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','go_to_admin_panel','sign_out','sign_in','register','sign_in','go_to_admin_panel','sign_out','sign_in','register'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?>
    <a class="ty-account-info__title" href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
        <i class="ty-icon-user"></i>&nbsp;
        <span class="ty-account-info__title-txt" <?php echo smarty_function_live_edit(array('name'=>"block:name:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        <i class="ty-icon-down-micro ty-account-info__user-arrow"></i>
    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="account_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <ul class="ty-account-info">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:my_account_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?>
                <a class="ty-account-info__title d-flex justify-content-between" href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
                    <img src="images/Union.svg" alt="">
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                        <img src="images/account.png" alt="">
                    <?php } else { ?>
                        <img src="images/account_circle-24px 1.svg" alt="">
                    <?php }?>
                </a>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('trips');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('messages');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('saved');?>
</li>

                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('add_boat');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('hosts_guides');?>

                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('hosts_community');?>
</li>

                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('services');?>
</li>


                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('account');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('bottom_panel.settings');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('help');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('log_out');?>
</li>

            <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
    <div  id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
        <div class="ty-login-popup">
            <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])), 0);?>

        </div>
    </div>
    <div class="ty-account-info__buttons buttons-container">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php $_smarty_tpl->tpl_vars['is_vendor_with_active_company'] = new Smarty_variable(fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['auth']->value['user_type']=="V")&&($_smarty_tpl->tpl_vars['auth']->value['company_status']=="A"), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['is_vendor_with_active_company']->value) {?>
                <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['vendor_index']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary" target="_blank"><?php echo $_smarty_tpl->__("go_to_admin_panel");?>
</a>
            <?php }?>
            <a href="<?php echo htmlspecialchars(fn_url("auth.logout?redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn <?php if ($_smarty_tpl->tpl_vars['is_vendor_with_active_company']->value) {?>ty-btn__tertiary<?php } else { ?>ty-btn__primary<?php }?>"><?php echo $_smarty_tpl->__("sign_out");?>
</a>
        <?php } else { ?>
            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__("register");?>
</a>

        <?php }?>
    </div>
<!--account_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/my_account.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/my_account.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?>
    <a class="ty-account-info__title" href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
        <i class="ty-icon-user"></i>&nbsp;
        <span class="ty-account-info__title-txt" <?php echo smarty_function_live_edit(array('name'=>"block:name:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        <i class="ty-icon-down-micro ty-account-info__user-arrow"></i>
    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="account_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <ul class="ty-account-info">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:my_account_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->_capture_stack[0][] = array("title", null, null); ob_start(); ?>
                <a class="ty-account-info__title d-flex justify-content-between" href="<?php echo htmlspecialchars(fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
                    <img src="images/Union.svg" alt="">
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                        <img src="images/account.png" alt="">
                    <?php } else { ?>
                        <img src="images/account_circle-24px 1.svg" alt="">
                    <?php }?>
                </a>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('trips');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('messages');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('saved');?>
</li>

                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('add_boat');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('hosts_guides');?>

                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('hosts_community');?>
</li>

                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('services');?>
</li>


                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('account');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('bottom_panel.settings');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('help');?>
</li>
                <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo $_smarty_tpl->__('log_out');?>
</li>

            <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
    <div  id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
        <div class="ty-login-popup">
            <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])), 0);?>

        </div>
    </div>
    <div class="ty-account-info__buttons buttons-container">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php $_smarty_tpl->tpl_vars['is_vendor_with_active_company'] = new Smarty_variable(fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['auth']->value['user_type']=="V")&&($_smarty_tpl->tpl_vars['auth']->value['company_status']=="A"), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['is_vendor_with_active_company']->value) {?>
                <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['vendor_index']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary" target="_blank"><?php echo $_smarty_tpl->__("go_to_admin_panel");?>
</a>
            <?php }?>
            <a href="<?php echo htmlspecialchars(fn_url("auth.logout?redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn <?php if ($_smarty_tpl->tpl_vars['is_vendor_with_active_company']->value) {?>ty-btn__tertiary<?php } else { ?>ty-btn__primary<?php }?>"><?php echo $_smarty_tpl->__("sign_out");?>
</a>
        <?php } else { ?>
            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__("register");?>
</a>

        <?php }?>
    </div>
<!--account_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?><?php }} ?>
