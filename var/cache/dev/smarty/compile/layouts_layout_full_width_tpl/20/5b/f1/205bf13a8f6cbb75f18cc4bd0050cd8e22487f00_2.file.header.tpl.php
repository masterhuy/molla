<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde0869aa4_56141589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '205bf13a8f6cbb75f18cc4bd0050cd8e22487f00' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\header.tpl',
      1 => 1596015974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/header-1.tpl' => 1,
    'file:_partials/headers/header-2.tpl' => 1,
    'file:_partials/headers/header-3.tpl' => 1,
    'file:_partials/headers/header-4.tpl' => 1,
    'file:_partials/headers/header-5.tpl' => 1,
    'file:_partials/headers/header-6.tpl' => 1,
    'file:_partials/headers/header-7.tpl' => 1,
    'file:_partials/headers/header-8.tpl' => 1,
    'file:_partials/headers/header-9.tpl' => 1,
    'file:_partials/headers/header-10.tpl' => 1,
    'file:_partials/headers/header-mobile-1.tpl' => 1,
    'file:_partials/headers/header-mobile-2.tpl' => 1,
    'file:_partials/headers/header-mobile-3.tpl' => 1,
    'file:_partials/headers/header-mobile-4.tpl' => 1,
  ),
),false)) {
function content_5f27dde0869aa4_56141589 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['header_layout']) && $_GET['header_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('header_layout', $_GET['header_layout']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('header_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['header_layout']);
}?>
<div id="desktop-header" class="header-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header_layout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['header_layout']->value == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 4) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 5) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 6) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 7) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 8) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-8.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 9) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-9.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif ($_smarty_tpl->tpl_vars['header_layout']->value == 10) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-10.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<div id="mobile-header" class="header-mobile-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<?php }
}
