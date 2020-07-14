<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:57:43
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\admin\gdz_pagebuilder_pages\listpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d1117459db0_60040186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '249ee99e70aa1226fec1e3856cda367a72052579' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\admin\\gdz_pagebuilder_pages\\listpage.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d1117459db0_60040186 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<div id="rows">
		<div id="page_list" class="page">
			<div class="list-heading">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-6">ID-Title</div>
						<div class="col-lg-3">State</div>
						<div class="col-lg-2"><span class="pull-right">Action</span></div>
					</div>
			</div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
				<div id="page_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
" class="list-row">
					<div class="row">
						<div class="col-lg-1 list-arrow"><span class="pull-left"><i class="icon-arrows"></i></span></div>
						<div class="col-lg-6">
							<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzpagebuilderPages'),'html','UTF-8' ));?>
&configure=gdz_pagebuilder&edit_id_page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
">#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
 - <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['title'],'html','UTF-8' ));?>
</h4>
						</div>
						<div class="col-md-3 list-status">
								<a class="grid-toggler-icon-valid"	href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzpagebuilderPages'),'html','UTF-8' ));?>
&configure=gdz_pagebuilder&status_id_page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['page']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="material-icons ps-togglable-row grid-toggler-icon-<?php if ($_smarty_tpl->tpl_vars['page']->value['active']) {?>valid<?php } else { ?>not-valid<?php }?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['active']) {?>check<?php } else { ?>clear<?php }?></i>
								</a>
						</div>
						<div class="col-md-2">
							<div class="btn-group-action pull-right">
								<div class="btn-group pull-right">
									<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzpagebuilderPages'),'html','UTF-8' ));?>
&configure=gdz_pagebuilder&edit_id_page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
" title="Edit" class="edit btn btn-default">
											<i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>

									</a>
									<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<i class="icon-caret-down"></i>&nbsp;
									</button>
									<ul class="dropdown-menu">
											<li>
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzpagebuilderPages'),'html','UTF-8' ));?>
&configure=gdz_pagebuilder&duplicate_id_page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
">
														<i class="icon-copy"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>

												</a>
											</li>
											<li>
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzpagebuilderPages'),'html','UTF-8' ));?>
&configure=gdz_pagebuilder&delete_id_page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to delete this item','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
?');">
														<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>

												</a>
											</li>
											<li>
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzpagebuilderPages'),'html','UTF-8' ));?>
&configure=gdz_pagebuilder&config_id_page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout Config','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
">
														<i class="icon-sitemap"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout Config','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>

												</a>
											</li>
											<li>
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('gdzPagebuilderEditor'),'html','UTF-8' ));?>
&id_page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Editor','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
">
														<i class="icon-sitemap"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Editor','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>

												</a>
											</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div>
<?php }
}
