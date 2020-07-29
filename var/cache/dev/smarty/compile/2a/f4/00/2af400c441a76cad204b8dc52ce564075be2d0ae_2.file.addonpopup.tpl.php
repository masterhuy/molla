<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:37
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonpopup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f85994451d7_04955866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af400c441a76cad204b8dc52ce564075be2d0ae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonpopup.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f85994451d7_04955866 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
component = $('#gdz-configuration').data('component');
if(popuptype == 'custom_html') {
		popup_content = html_content;
} else {
		popup_content = '';
		var post_data = 'module=' + modulename + '&hook=' + modulehook;
		$.ajax({
				type: 'POST',
				url: PagebuilderConfig.editor_link + '&action=GetModule&ajax=1',
				data:post_data,
				success: function(data)
				{
						popup_content = data;
						component.find('.gdz-popup-content').html(popup_content);
				}
		});
}
if(component) {
		var window_w = $('#pagebuilder-preview-iframe').width();
		var window_h = $('#pagebuilder-preview-iframe').height();
		var width_default  = popup_width;
		var height_default  = popup_height;
		if(window_w > width_default) {
			var popup_width = width_default;
			var popup_left = (window_w - width_default)/2;
		} else {
			var popup_width = window_w - 40;
			component.find('.gdz-popup').css('width', window_w - 40);
			var popup_left = 20;
		}
		if(window_h > height_default) {
			var popup_height = height_default;
			var popup_top = (window_h - height_default)/2;
		} else {
			var popup_height = window_h - 40;
			var popup_top = 20;
		}
}
<?php echo '%>';?>
<style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .gdz-popup {
	width:<?php echo '<%';?>= popup_width <?php echo '%>';?>px;
	height:<?php echo '<%';?>= popup_height <?php echo '%>';?>px;
	top:<?php echo '<%';?>= popup_top <?php echo '%>';?>px;
	left:<?php echo '<%';?>= popup_left <?php echo '%>';?>px;
}
</style>
<div class="pb-popup gdz-popup-overlay" style="display:block;">
	<div class="gdz-popup">
		<div class="gdz-popup-content">
				<?php echo '<%';?> if (popup_title) { <?php echo '%>';?>
				<h2>
					<?php echo '<%';?>= popup_title <?php echo '%>';?>
				</h2>
				<?php echo '<%';?> } <?php echo '%>';?>
				<div class="gdz-popup-content">
					<div>
							<?php echo '<%';?>= popup_content <?php echo '%>';?>
					</div>
				</div>
		</div>
		<div class="dontshow">
			<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" />
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dont show this box again','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</label>
		</div>
		<a class="popup-close"><i class="fa fa-close"></i></a>
		<input type="hidden" name="width_default" id="width-default" value="<?php echo '<%';?>= popup_width <?php echo '%>';?>" />
		<input type="hidden" name="height_default" id="height-default" value="<?php echo '<%';?>= popup_height <?php echo '%>';?>" />
		<input type="hidden" name="loadtime" id="loadtime" value="<?php echo '<%';?>= loadtime <?php echo '%>';?>" />
	</div>
</div>
<?php }
}
