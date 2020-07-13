<?php
/* Smarty version 3.1.33, created on 2020-07-13 17:25:53
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c36b1591fb9_58423232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ae7c62a51ff5b10bea2de8525c4fdcac9d6442a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonbutton.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c36b1591fb9_58423232 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-button<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['button_align']->value) {?> pb-button-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_align']->value, ENT_QUOTES, 'UTF-8');
}?>">
<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
<a class="btn<?php if ($_smarty_tpl->tpl_vars['button_size']->value) {?> btn-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_size']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['button_style']->value) {?> btn-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_style']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['button_align']->value) {?> btn-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_align']->value, ENT_QUOTES, 'UTF-8');
}?>" href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {
echo $_smarty_tpl->tpl_vars['button_link']->value;
} else { ?>#<?php }?>" target="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
">
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_text']->value, ENT_QUOTES, 'UTF-8');?>

</a>
<?php }?>
</div>
<?php }
}
