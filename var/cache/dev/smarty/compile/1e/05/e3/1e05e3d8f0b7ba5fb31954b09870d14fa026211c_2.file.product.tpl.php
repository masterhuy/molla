<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde053d1e1_04196582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e05e3d8f0b7ba5fb31954b09870d14fa026211c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1596438915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27dde053d1e1_04196582 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['productbox_type']) && $_GET['productbox_type'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_GET['productbox_type']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_type']).".tpl");
}
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['productbox']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
}
}
