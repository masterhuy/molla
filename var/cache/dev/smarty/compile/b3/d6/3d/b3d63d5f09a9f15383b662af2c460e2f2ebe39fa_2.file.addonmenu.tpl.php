<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:06
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112ea03d49_59078820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3d63d5f09a9f15383b662af2c460e2f2ebe39fa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonmenu.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112ea03d49_59078820 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
		var post_data = 'menu_id=' + menu_id;
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.editor_link + '&action=GetMenu&ajax=1',
        data:post_data,
        success: function(data)
        {
            component.find('.addon-body').html(data);
        }
  });
}
<?php echo '%>';
}
}
