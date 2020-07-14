<?php
/* Smarty version 3.1.33, created on 2020-07-14 16:12:43
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\admin\templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d770b44ddc3_67147707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7853333a9a19dccf9765c0b19ba732ae15b23743' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\admin\\templates.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d770b44ddc3_67147707 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
      <div class="template-row" data-id="<?php echo $_smarty_tpl->tpl_vars['template']->value['id_template'];?>
">
          <div class="template-name"><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</div>
          <div class="template-tools pull-right">
                <a class="template-export"><i class="pb-icon-export"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a>
                <a class="template-delete"><i class="pb-icon-delete"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a>
                <a class="template-import"><i class="pb-icon-import"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a>
          </div>
      </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
