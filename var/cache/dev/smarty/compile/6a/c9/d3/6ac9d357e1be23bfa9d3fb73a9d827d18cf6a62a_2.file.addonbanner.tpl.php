<?php
/* Smarty version 3.1.33, created on 2020-07-14 09:27:07
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d17fbceb042_29692245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac9d357e1be23bfa9d3fb73a9d827d18cf6a62a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonbanner.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d17fbceb042_29692245 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-banner<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['banner_link']->value;?>
" target="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
">
<?php }
if ($_smarty_tpl->tpl_vars['banner']->value) {?>
<div class="pb-banner-img">
		<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-responsive" />
</div>
<div class="pb-banner-text">
	<?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?><span class="pb-banner-subtitle"><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['title']->value) {?><<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="pb-banner-desc"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['description']->value) {?><div class="pb-banner-desc"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?><div><div class="pb-banner-button btn"><span><?php echo $_smarty_tpl->tpl_vars['button_text']->value;?>
</span></div></div><?php }?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['banner_link']->value) {?>
</a>
<?php }?>
</div>
<?php }
}
