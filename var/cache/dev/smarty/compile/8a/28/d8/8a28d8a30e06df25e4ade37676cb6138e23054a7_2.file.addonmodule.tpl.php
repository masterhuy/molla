<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:06
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonmodule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112ea79046_39671781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a28d8a30e06df25e4ade37676cb6138e23054a7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonmodule.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112ea79046_39671781 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
component = $('#gdz-configuration').data('component');
if(component) {
		var post_data = 'module=' + modulename + '&hook=' + modulehook;
		$.ajax({
				type: 'POST',
				url: PagebuilderConfig.editor_link + '&action=GetModule&ajax=1',
				data:post_data,
				success: function(data)
				{
						component.find('.addon-body').html('<div class="pb-module">' + data + '</div>');
				}
		});
}
<?php echo '%>';
}
}
