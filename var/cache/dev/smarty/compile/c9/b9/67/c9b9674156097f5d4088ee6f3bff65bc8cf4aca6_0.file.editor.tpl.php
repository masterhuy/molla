<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:35
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\admin\editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f85973c0431_40240769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9b9674156097f5d4088ee6f3bff65bc8cf4aca6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\admin\\editor.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:gdz_pagebuilder/views/templates/admin/row_style_template.tpl' => 1,
    'module:gdz_pagebuilder/views/templates/admin/col_style_template.tpl' => 1,
    'file:./row_settings.tpl' => 1,
    'file:./column_settings.tpl' => 1,
    'module:gdz_pagebuilder/views/templates/admin/library.tpl' => 1,
  ),
),false)) {
function content_5f1f85973c0431_40240769 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pagebuilder Editor','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</title>
    <?php echo '<script'; ?>
 type="text/javascript">
    var iso_user = '<?php echo addcslashes($_smarty_tpl->tpl_vars['iso_user']->value,'\'');?>
';
    var lang_is_rtl = '<?php echo intval($_smarty_tpl->tpl_vars['lang_is_rtl']->value);?>
';
    var full_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_language_code']->value,'\'');?>
';
    var full_cldr_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_cldr_language_code']->value,'\'');?>
';
    var country_iso_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['country_iso_code']->value,'\'');?>
';
    var _PS_VERSION_ = '<?php echo addcslashes(@constant('_PS_VERSION_'),'\'');?>
';
    var roundMode = <?php echo intval($_smarty_tpl->tpl_vars['round_mode']->value);?>
;
    var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
    var youEditFieldFor = 'a';
    var baseAdminDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['baseDir']->value);?>
';
    var from_msg ='a';
    var token_admin_orders = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminOrders'),$_smarty_tpl ) );?>
';
    var token_admin_customers = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
';
    var token_admin_customer_threads = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomerThreads'),$_smarty_tpl ) );?>
';
    var currentIndex = '<?php echo addcslashes($_smarty_tpl->tpl_vars['currentIndex']->value,'\'');?>
';
    var employee_token = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminEmployees'),$_smarty_tpl ) );?>
';
    var default_language = '<?php echo intval($_smarty_tpl->tpl_vars['id_lang']->value);?>
';
    var admin_modules_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminModulesSf",true,array('route'=>"admin_module_catalog_post")));?>
';
    var tab_modules_list = '<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value) && $_smarty_tpl->tpl_vars['tab_modules_list']->value) {
echo addslashes($_smarty_tpl->tpl_vars['tab_modules_list']->value);
}?>';
  <?php echo '</script'; ?>
>
  <?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value, 'media', false, 'css_uri');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->value => $_smarty_tpl->tpl_vars['media']->value) {
?>
      <link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css_uri']->value,'html','UTF-8' ));?>
" rel="stylesheet" type="text/css"/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
</head>
<body class="pagebuilder-editor-active">
<div id="pagebuilder-preview">
    <div id="pagebuilder-preview-wrapper" class="md-layout">
        <iframe id="pagebuilder-preview-iframe" name="pagebuilder-preview-iframe" sandbox="allow-same-origin allow-scripts allow-pointer-lock allow-presentation allow-forms" src="<?php echo $_smarty_tpl->tpl_vars['preview_link']->value;?>
"></iframe>
        <div class="pagebuilder-preview-overlay" style="display:none;">
          <div class="page-saved"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saved','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</div>
          <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
</div>
<div id="pagebuilder-panel">
    <div id="pagebuilder-mode-switch">
        <div class="mode-switch-inner">
          <i></i>
        </div>
    </div>
    <div class="gdz-tools" id="tool-addons">
        <div class="tool-search">
            <input type="text" id="search-addon" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for addon name','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
.." />
            <i class="pb-icon-search"></i>
        </div>
        <ul class="pagebuilder-addons clearfix">
          <li class="addon-group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addons','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</li>
          <?php $_smarty_tpl->_assignInScope('shop_addon', "true");?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addonslist']->value, 'addonlist', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['addonlist']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['addonlist']->value['type'] == 'Shop Addons' && $_smarty_tpl->tpl_vars['shop_addon']->value == 'true') {?>
            <li class="addon-group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop Addons','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</li>
            <?php $_smarty_tpl->_assignInScope('shop_addon', "false");?>
            <?php }?>
            <li class="addon-cat-addons<?php if ($_smarty_tpl->tpl_vars['addonlist']->value['pro']) {?> pro<?php }?>" draggable="true">
              <?php echo $_smarty_tpl->tpl_vars['addonlist']->value['addon'];?>

            </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <div class="gdz-tools gdz-configuration bootstrap">
        <div class="config-heading"><a href="#" id="back" class="pb-config-back"><i></i>Back</a><span class="config-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Row Setting','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></div>
        <div id="gdz-configuration" class="gdz-modal-body">
        </div>
    </div>
</div>
<div id="pagebuilder-setting">
    <div class="setting-left">
        <select id="select-page">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id_page'];?>
"<?php if ($_smarty_tpl->tpl_vars['page']->value['id_page'] == $_smarty_tpl->tpl_vars['id_page']->value) {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
 : <?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select id="select-language">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['language']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['id_lang']->value) {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
 : <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="setting-center">
      <img src="../modules/gdz_pagebuilder/views/img/logo.png" />
    </div>
    <div class="setting-right">
        <?php if ($_smarty_tpl->tpl_vars['pro']->value) {?>
        <div class="dropdown btn" id="template-tool">
          <button class="dropbtn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template Library','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</button><i class="arrow-down"></i>
          <div class="dropdown-content">
            <ul class="drop-list template-icons">
              <li><a id="template-library" class="dialog-open" data-dialog="template-library" data-form="library"><span class="drop-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template Library','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a></li>
              <li><a class="dialog-open" data-dialog="template-library" data-form="save"><span class="drop-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save to Template','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a></li>
              <li><a class="dialog-open" data-dialog="template-library" data-form="file"><span class="drop-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save as File','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a></li>
            </ul>
          </div>
        </div>
        <?php }?>
        <a class="btn" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzThemeSetting');?>
&configure=gdz_themesetting" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme Setting','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</i></a>
        <a class="btn" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page Preview','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a>
        <div class="dropdown btn" id="tool-device">
          <button class="dropbtn"><i class="pb-icon-desktop"></i></button><i class="arrow-down"></i>
          <div class="dropdown-content">
            <ul class="drop-list device-icons">
              <li class="active li-md" data-device="md"><a class="md-device"><span class="icon"><i class="pb-icon-desktop"></i></span><span class="drop-text device"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desktop','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a></li>
              <li class="li-sm" data-device="sm"><a class="sm-device"><span class="icon"><i class="pb-icon-tablet"></i></span><span class="drop-text device"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tablet','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a></li>
              <li class="li-xs" data-device="xs"><a class="xs-device"><span class="icon"><i class="pb-icon-mobile"></i></span><span class="drop-text device"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></a></li>
            </ul>
          </div>
        </div>
        <a class="btn btn-active" id="save" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a>
    </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['js_def_vars']->value) && is_array($_smarty_tpl->tpl_vars['js_def_vars']->value) && count($_smarty_tpl->tpl_vars['js_def_vars']->value)) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_def_vars']->value, 'def', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['def']->value) {
?>
    var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['def']->value ));?>
;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '</script'; ?>
>
<?php }
if (isset($_smarty_tpl->tpl_vars['js_files']->value) && count($_smarty_tpl->tpl_vars['js_files']->value)) {?>
  <?php $_smarty_tpl->_subTemplateRender((@constant('_PS_ALL_THEMES_DIR_')).("javascript.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<div id="pb-tmpl-row" class="hidden">
    <div class="gdz-row">
        <div class="pb-row-overlay">
            <div class="pb-row-tools">
              <a href="#" class="pb-drag-arrow pb-row-tool"><i class="fa fa-arrows-alt"></i></a>
              <div class="btn-group pb-row-layout pb-row-tool">
                  <a href="#" data-toggle="dropdown" data-display="static" class="row-layout-setting"><i class="fa fa-th"></i></a>
                  <div class="dropdown-menu pb-row-layout-dropdown">
                      <div class="pb-row-layout-dropdown-container">
                          <ul class="pb-column-list">
                            <li><a title="12" data-layout="12" class="column-layout label-tooltip column-layout-12" href="#"></a></li>
                            <li><a title="6,6" data-layout="6,6" class="column-layout label-tooltip column-layout-66" href="#"></a></li>
                            <li><a title="4,4,4" data-layout="4,4,4" class="column-layout label-tooltip column-layout-444" href="#"></a></li>
                            <li><a title="3,3,3,3" data-layout="3,3,3,3" class="column-layout label-tooltip column-layout-3333" href="#"></a></li>
                            <li><a title="4,8" data-layout="4,8" class="column-layout label-tooltip column-layout-48" href="#"></a></li>
                            <li><a title="3,9" data-layout="3,9" class="column-layout label-tooltip column-layout-39 active" href="#"></a></li>
                            <li><a title="3,6,3" data-layout="3,6,3" class="column-layout label-tooltip column-layout-363" href="#"></a></li>
                            <li><a title="2,6,4" data-layout="2,6,4" class="column-layout label-tooltip column-layout-264" href="#"></a></li>
                            <li><a title="2,10" data-layout="2,10" class="column-layout label-tooltip column-layout-210" href="#"></a></li>
                            <li><a title="5,7" data-layout="5,7" class="column-layout label-tooltip column-layout-57" href="#"></a></li>
                          </ul>
                          <div class="pb-custom-layout clearfix align-items-center">
                            <div class="pb-custom-label width-auto"><span>Custom</span></div>
                            <div class="pb-custom-input"><input type="text" class="custom-layout" placeholder="4,4,4" value="4,4,4"></div>
                            <div class="pb-custom-btn width-auto"><a href="#" class="pb-btn pb-btn-primary column-layout" data-layout="custom">Add</a></div>
                          </div>
                      </div>
                  </div>
              </div>
              <a href="#" class="pb-row-setting pb-row-tool"><i class="fa fa-pencil"></i></a>
              <a href="#" class="pb-row-duplicate pb-row-tool"><i class="fa fa-files-o"></i></a>
              <a href="#" class="pb-row-delete pb-row-tool"><i class="fa fa-trash-o"></i></a>
            </div>
        </div>
        <div class="container pb-row-inner">
            <div class="row">
            </div>
        </div>
        <div class="pb-add-row btn-group dropup">
          <a href="#" data-toggle="dropdown" data-display="static"><i class="fa fa-plus"></i></a>
          <div class="dropdown-menu pb-add-row-dropup">
              <div class="pb-add-row-dropup-container">
                  <ul class="pb-column-list">
                    <li><a title="12" data-layout="12" class="column-layout label-tooltip column-layout-12" href="#"></a></li>
                    <li><a title="6,6" data-layout="6,6" class="column-layout label-tooltip column-layout-66" href="#"></a></li>
                    <li><a title="4,4,4" data-layout="4,4,4" class="column-layout label-tooltip column-layout-444" href="#"></a></li>
                    <li><a title="3,3,3,3" data-layout="3,3,3,3" class="column-layout label-tooltip column-layout-3333" href="#"></a></li>
                    <li><a title="4,8" data-layout="4,8" class="column-layout label-tooltip column-layout-48" href="#"></a></li>
                    <li><a title="3,9" data-layout="3,9" class="column-layout label-tooltip column-layout-39 active" href="#"></a></li>
                    <li><a title="3,6,3" data-layout="3,6,3" class="column-layout label-tooltip column-layout-363" href="#"></a></li>
                    <li><a title="2,6,4" data-layout="2,6,4" class="column-layout label-tooltip column-layout-264" href="#"></a></li>
                    <li><a title="2,10" data-layout="2,10" class="column-layout label-tooltip column-layout-210" href="#"></a></li>
                    <li><a title="5,7" data-layout="5,7" class="column-layout label-tooltip column-layout-57" href="#"></a></li>
                  </ul>
                  <div class="pb-custom-layout clearfix align-items-center">
                    <div class="pb-custom-label width-auto"><span>Custom</span></div>
                    <div class="pb-custom-input"><input type="text" class="custom-layout" placeholder="4,4,4" value="4,4,4"></div>
                    <div class="pb-custom-btn width-auto"><a href="#" class="pb-btn pb-btn-primary column-layout" data-layout="custom"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
<div id="pb-tmpl-column" class="hidden">
    <div class="addon-sortable layout-column">
        <div class="pb-column-tools">
            <a href="#" class="pb-column-setting"><i class="fa fa-pencil"></i></a>
        </div>
    </div>
</div>
<div id="pb-tmpl-addon-tools" class="hidden">
  <div class="pb-addon-tools">
    <a href="#" class="pb-drag-arrow pull-right"><i class="fa fa-arrows-alt"></i></a>
    <a href="#" class="pb-addon-setting pull-right"><i class="fa fa-pencil"></i></a>
    <a href="#" class="pb-addon-duplicate pull-right"><i class="fa fa-files-o"></i></a>
    <a href="#" class="pb-addon-delete pull-right"><i class="fa fa-trash-o"></i></a>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("module:gdz_pagebuilder/views/templates/admin/row_style_template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("module:gdz_pagebuilder/views/templates/admin/col_style_template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addonstemplate']->value, 'addontpl', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['addontpl']->value) {
?>
<div style="display:none" id="pb-config-addon-<?php echo $_smarty_tpl->tpl_vars['addontpl']->value['name'];?>
" type="text/html">
      <?php echo $_smarty_tpl->tpl_vars['addontpl']->value['configuration'];?>

</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="bootstrap">
      <?php $_smarty_tpl->_subTemplateRender("file:./row_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:./column_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender("module:gdz_pagebuilder/views/templates/admin/library.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
