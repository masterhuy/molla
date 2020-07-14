<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:05
  from 'module:gdzpagebuilderviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112d0cc6e0_74233082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7df23c436f8e49f47a390ea5ae24a5c264caeb8c' => 
    array (
      0 => 'module:gdzpagebuilderviewstempla',
      1 => 1594026290,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112d0cc6e0_74233082 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/settings.tpl -->    <div id="<?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['setting']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['setting']->value['id'];?>
" role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>active<?php }?>">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setting']->value['content'], 'field', false, 'field_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
            <div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['field']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>">
                <label><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                    <input type="text" value="" data-attrname="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" class="form-control addon-input addon-<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" />
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'number') {?>
                    <input type="number" value="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['default'])) {
echo $_smarty_tpl->tpl_vars['field']->value['default'];
}?>" data-attrname="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" class="form-control addon-input addon-<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" />
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'color') {?>
                    <div class="input-group colorpicker-component color-picker-component">
                        <input data-attrname="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" type="text" value="#38a677" name="text_color" class="form-control addon-input"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'checkbox') {?>
                    <div class="pagebuilder-checkbox">
                        <input type="checkbox" data-attrname="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" class="addon-input input-<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
 gdz-switch">
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                    <div class="media-upload" data-url="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzpagebuilderMedia');?>
&fid=<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
">
                        <div class="media-image-preview media-preview" id="media-preview-<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
"></div>
                        <div class="media-image-delete"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</div>
                        <div class="media-image-empty-button"><i class="fa fa-plus-circle"></i></div>
                    </div>
                    <input name="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" data-attrname="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" type="text" data-type="image" class="media-value addon-input form-control input-media" id="media-value-<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" data-fid="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" />
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'select') {?>
                    <select data-attrname="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" class="form-control addon-input">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option', false, 'op_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['op_key']->value => $_smarty_tpl->tpl_vars['option']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['op_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'range') {?>
                    <div class="pb-range-input">
                      <input type="range" class="pb-range" min="<?php echo $_smarty_tpl->tpl_vars['field']->value['min'];?>
" max="<?php echo $_smarty_tpl->tpl_vars['field']->value['max'];?>
">
                      <input type="number" class="form-control addon-input input-range" data-attrname="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" data-type="range">
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'padding') {?>
                    <ul class="pb-device-tabs pb-device-md">
                      <li class="screen-md"><i class="icon-desktop icon-md"></i></li>
                      <li class="screen-sm"><i class="icon-tablet icon-sm"></i></li>
                      <li class="screen-xs"><i class="icon-mobile icon-xs"></i></li>
                    </ul>
                    <div class="pb-screen-inputs pb-device-md">
                      <div class="pb-padding-input md">
                        <ul>
                            <li><input type="number" class="form-control addon-input" data-attrname="md_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_top" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="md_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_right" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Right','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="md_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_bottom" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bottom','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="md_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_left" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                        </ul>
                      </div>
                      <div class="pb-padding-input sm">
                        <ul>
                            <li><input type="number" class="form-control addon-input" data-attrname="sm_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_top" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="sm_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_right" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Right','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="sm_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_bottom" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bottom','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="sm_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_left" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                        </ul>
                      </div>
                      <div class="pb-padding-input xs">
                        <ul>
                            <li><input type="number" class="form-control addon-input" data-attrname="xs_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_top" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="xs_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_right" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Right','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="xs_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_bottom" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bottom','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                            <li><input type="number" class="form-control addon-input" data-attrname="xs_<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
_left" /><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></li>
                        </ul>
                      </div>
                    </div>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['field']->value['desc']) && $_smarty_tpl->tpl_vars['field']->value['desc']) {?>
                    <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['field']->value['desc'];?>
</p>
                <?php }?>
          </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<!-- end D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/settings.tpl --><?php }
}
