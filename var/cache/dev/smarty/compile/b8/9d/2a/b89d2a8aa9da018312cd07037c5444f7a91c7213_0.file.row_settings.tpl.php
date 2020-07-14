<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:05
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\admin\row_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112d0573e8_11122730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b89d2a8aa9da018312cd07037c5444f7a91c7213' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\admin\\row_settings.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:gdz_pagebuilder/views/templates/admin/settings.tpl' => 1,
  ),
),false)) {
function content_5f0d112d0573e8_11122730 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="row-settings" class="hidden">
    <div class="row-settings">
        <ul role="tablist" class="nav nav-tabs">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row_settings']->value, 'row_setting', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['row_setting']->value) {
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>active<?php }?>"><a data-toggle="tab" href="#row-<?php echo $_smarty_tpl->tpl_vars['row_setting']->value['id'];?>
"><i class="pb-icon-<?php echo $_smarty_tpl->tpl_vars['row_setting']->value['id'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['row_setting']->value['title'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="tab-content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row_settings']->value, 'setting', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['setting']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender("module:gdz_pagebuilder/views/templates/admin/settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stype'=>"row"), 0, true);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
}
