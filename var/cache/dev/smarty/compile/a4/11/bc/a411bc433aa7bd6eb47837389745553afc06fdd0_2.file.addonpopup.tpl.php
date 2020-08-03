<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonpopup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde000ceb4_83708696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a411bc433aa7bd6eb47837389745553afc06fdd0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonpopup.tpl',
      1 => 1596165095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27dde000ceb4_83708696 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-popup gdz-popup-overlay" style="display: none;">
	<div class="gdz-popup newsletter-popup-container animated fadeIn hidden">
		<div class="row no-gutters bg-white newsletter-popup-content">
			<div class="col-xl-3-5col col-lg-7 banner-content-wrap">
				<div class="gdz-popup-content banner-content text-center">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
					<?php if ($_smarty_tpl->tpl_vars['popup_title']->value) {?>
						<h2>
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

						</h2>
					<?php }?>
					<h2 class="banner-title">get <span>25<span class="light">%</span></span> off</h2>
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
.</p>
					<div class="gdz-popup-content">
						<?php echo $_smarty_tpl->tpl_vars['popup_content']->value;?>

					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" class="custom-control-input">
						<label class="custom-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show this popup again','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</label>
					</div>
				</div>
				<input type="hidden" name="width_default" id="width-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_width']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
				<input type="hidden" name="height_default" id="height-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_height']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
				<input type="hidden" name="loadtime" id="loadtime" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loadtime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
			</div>
			<div class="col-xl-2-5col col-lg-5">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
			</div>
		</div>
		<a class="mfp-close popup-close"></a>
	</div>
</div>
<?php }
}
