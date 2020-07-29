<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:37
  from 'module:gdzpagebuilderviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f8599d6cdd7_36919864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c367fda0694179ed2ccba38b2a382f7a04ef7bf' => 
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
function content_5f1f8599d6cdd7_36919864 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/preview_rows.tpl --><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
		<div id="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->id)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->id, ENT_QUOTES, 'UTF-8');
}?>" class="gdz-row <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if (isset($_smarty_tpl->tpl_vars['row']->value->layout)) {?> data-layout="<?php echo $_smarty_tpl->tpl_vars['row']->value->layout;?>
"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['row']->value->style) && $_smarty_tpl->tpl_vars['row']->value->style) {?>
        <style type="text/css">
          <?php echo $_smarty_tpl->tpl_vars['row']->value->style;?>

        </style>
        <?php }?>
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
                      		<li><a title="3,9" data-layout="3,9" class="column-layout label-tooltip column-layout-39" href="#"></a></li>
                      		<li><a title="3,6,3" data-layout="3,6,3" class="column-layout label-tooltip column-layout-363" href="#"></a></li>
                      		<li><a title="2,6,4" data-layout="2,6,4" class="column-layout label-tooltip column-layout-264" href="#"></a></li>
                      		<li><a title="2,10" data-layout="2,10" class="column-layout label-tooltip column-layout-210" href="#"></a></li>
                      		<li><a title="5,7" data-layout="5,7" class="column-layout label-tooltip column-layout-57" href="#"></a></li>
                      	</ul>
                        <div class="pb-custom-layout clearfix align-items-center">
                          <div class="pb-custom-label width-auto"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></div>
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
				<div class="container<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->fluid) && $_smarty_tpl->tpl_vars['row']->value->settings->fluid == '1') {?>-fluid<?php }?> pb-row-inner">
						<div class="row">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->cols, 'column', false, 'cindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cindex']->value => $_smarty_tpl->tpl_vars['column']->value) {
?>
							<div id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->id,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="layout-column <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 addon-sortable">
                <div class="pb-column-tools">
                  <a href="#" class="pb-column-setting"><i class="fa fa-pencil"></i></a>
                </div>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value->addons, 'addon', false, 'aindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['aindex']->value => $_smarty_tpl->tpl_vars['addon']->value) {
?>
								   <div id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon']->value->id,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="addon-box" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value->type, ENT_QUOTES, 'UTF-8');?>
">
                      <div class="pb-addon-tools">
                        <a href="#" class="pb-drag-arrow pull-right"><i class="fa fa-arrows-alt"></i></a>
                  	    <a href="#" class="pb-addon-setting pull-right"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="pb-addon-duplicate pull-right"><i class="fa fa-files-o"></i></a>
                        <a href="#" class="pb-addon-delete pull-right"><i class="fa fa-trash-o"></i></a>
                  		</div>
                      <div class="addon-body">
                          <?php if (isset($_smarty_tpl->tpl_vars['addon']->value->return_value) && $_smarty_tpl->tpl_vars['addon']->value->return_value) {
echo $_smarty_tpl->tpl_vars['addon']->value->return_value;
}?>
                      </div>
									 </div>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
				</div>
        <div class="pb-add-row btn-group dropup">
            <a href="#" data-toggle="dropdown" data-display="static"><i class="fa fa-plus"></i></a>
            <div class="dropdown-menu pb-add-row-dropup">
                <div class="pb-add-row-dropup-container">
                  <ul class="pb-column-list">
              			<li><a data-original-title="12" data-layout="12" class="column-layout label-tooltip column-layout-12" href="#"></a></li>
              			<li><a data-original-title="6,6" data-layout="6,6" class="column-layout label-tooltip column-layout-66" href="#"></a></li>
              			<li><a data-original-title="4,4,4" data-layout="4,4,4" class="column-layout label-tooltip column-layout-444" href="#"></a></li>
              			<li><a data-original-title="3,3,3,3" data-layout="3,3,3,3" class="column-layout label-tooltip column-layout-3333" href="#"></a></li>
              			<li><a data-original-title="4,8" data-layout="4,8" class="column-layout label-tooltip column-layout-48" href="#"></a></li>
              			<li><a data-original-title="3,9" data-layout="3,9" class="column-layout label-tooltip column-layout-39 active" href="#"></a></li>
              			<li><a data-original-title="3,6,3" data-layout="3,6,3" class="column-layout label-tooltip column-layout-363" href="#"></a></li>
              			<li><a data-original-title="2,6,4" data-layout="2,6,4" class="column-layout label-tooltip column-layout-264" href="#"></a></li>
              			<li><a data-original-title="2,10" data-layout="2,10" class="column-layout label-tooltip column-layout-210" href="#"></a></li>
              			<li><a data-original-title="5,7" data-layout="5,7" class="column-layout label-tooltip column-layout-57" href="#"></a></li>
              		</ul>
                  <div class="pb-custom-layout clearfix align-items-center">
                    <div class="pb-custom-label width-auto"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></div>
                    <div class="pb-custom-input"><input type="text" class="custom-layout" placeholder="4,4,4" value="4,4,4"></div>
                    <div class="pb-custom-btn width-auto"><a href="#" class="pb-btn pb-btn-primary column-layout" data-layout="custom"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></div>
                  </div>
                </div>
            </div>
        </div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- end D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/preview_rows.tpl --><?php }
}
