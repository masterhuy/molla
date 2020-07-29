<?php
/* Smarty version 3.1.33, created on 2020-07-28 09:17:54
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonheading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f8ad214b146_36588749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b84430c304b41d2ff277cf068722b1d3baaafd03' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonheading.tpl',
      1 => 1595902453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f8ad214b146_36588749 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['heading']->value) {?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading_tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="pb-heading<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
	<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>

</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading_tag']->value, ENT_QUOTES, 'UTF-8');?>
>
<?php }
}
}
