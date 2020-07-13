<?php
/* Smarty version 3.1.33, created on 2020-07-13 17:25:53
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonimage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c36b1a4cec3_54228567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e50a89eb3fc3f2d386b3c8c8eacdbfb6cdc6da' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonimage.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c36b1a4cec3_54228567 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['image']->value) {?>
<div class="pb-image<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
<?php if ($_smarty_tpl->tpl_vars['image_link']->value) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['image_link']->value;?>
" target="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
">
<?php }?>
		<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-responsive" />
<?php if ($_smarty_tpl->tpl_vars['image_link']->value) {?>
</a>
<?php }?>
</div>
<?php }
}
}
