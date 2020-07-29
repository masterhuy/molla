<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:35
  from 'module:gdzpagebuilderviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f859767f646_11191526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e535ef3ceb629b9ce507d1a9a6e48ffa8dd6fa7' => 
    array (
      0 => 'module:gdzpagebuilderviewstempla',
      1 => 1594717124,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f859767f646_11191526 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/library.tpl --><div class="pagebuilder-dialog save" id="pagebuilder-template-library" style="display: none;">
    <div class="pagebuilder-dialog-content" style="top: 70px;">
        <div class="pagebuilder-dialog-content-wrapper">
            <div class="pagebuilder-dialog-header">
                <div class="pagebuilder-dialog-header-left pull-left">
                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template Library','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</h3>
                </div>
                <div class="pagebuilder-dialog-header-right pull-right">
                    <div class="pagebuilder-dialog-switch-form pagebuilder-dialog-element pagebuilder-dialog-switch-library" data-form="library">
                        <i class="pb-icon-library"></i>
                    </div>
                    <div class="pagebuilder-dialog-switch-form pagebuilder-dialog-element pagebuilder-dialog-switch-load" data-form="load">
                        <i class="pb-icon-import"></i>
                    </div>
                    <div class="pagebuilder-dialog-switch-form pagebuilder-dialog-element pagebuilder-dialog-switch-file" data-form="file">
                        <i class="pb-icon-export"></i>
                    </div>
                    <div class="pagebuilder-dialog-switch-form pagebuilder-dialog-element pagebuilder-dialog-switch-save" data-form="save">
                        <i class="pb-icon-save-to-template"></i>
                    </div>
                    <div class="pagebuilder-dialog-close pagebuilder-dialog-element">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
            </div>
            <div class="pagebuilder-dialog-body">
                <form id="pagebuilder-library-template-form" class="pagebuilder-template-form">
                  <div class="template-list" id="pagebuilder-template-list">
                      <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </form>
                <form id="pagebuilder-save-template-form" class="pagebuilder-template-form">
                    <div class="form-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter template name to save this page (row) as template to Library','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
.</div>
                    <div class="form-content">
                        <input id="library-template-name" name="title" class="pagebuilder-dialog-input" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter Template Name','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
" required="">
                        <button id="library-save-template" class="pagebuilder-dialog-btn"><span class="elementor-state-icon"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</button>
                    </div>
                </form>
                <form id="pagebuilder-load-template-form" class="pagebuilder-template-form" enctype="multipart/form-data">
                    <div class="form-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter template name + select file to upload it as template in Library','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
.</div>
                    <div class="form-content">
                        <input id="library-load-template-name" class="pagebuilder-dialog-input" type="text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter Template Name','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
" name="name" required="">
                  		  <input id="library-template-file" class="pagebuilder-dialog-input" type="file" name="file" required="">
                  		  <button id="library-load-template" class="pagebuilder-dialog-btn"><span class="elementor-state-icon"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</button>
                    </div>
              	</form>
                <form id="pagebuilder-file-template-form" class="pagebuilder-template-form">
                    <div class="form-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter File Name to Export this page as json file','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
.</div>
                    <div class="form-content">
                        <input id="library-file-name" name="title" class="pagebuilder-dialog-input" placeholder="Enter File Name" required="">
                        <button id="save-template-file" class="pagebuilder-dialog-btn"><span class="elementor-state-icon"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</button>
                    </div>
              	</form>
            </div>
        </div>
    </div>
</div>
<!-- end D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/library.tpl --><?php }
}
