<?php
/* Smarty version 3.1.33, created on 2020-07-13 17:25:53
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c36b182a0b7_88709863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e05e3d8f0b7ba5fb31954b09870d14fa026211c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1594026289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-1.tpl' => 1,
    'file:catalog/_partials/miniatures/product-2.tpl' => 1,
    'file:catalog/_partials/miniatures/product-3.tpl' => 1,
  ),
),false)) {
function content_5f0c36b182a0b7_88709863 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_type'] == 'product-1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
 <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_type'] == 'product-2') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
 <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_type'] == 'product-3') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
 <?php }
}
}
