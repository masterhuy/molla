<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:36
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f85989ea6c9_96580800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a89b1978677b2c03a91ec92816fa3fd4abf7184' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonalert.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f85989ea6c9_96580800 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo '<%';?>= alert_type <?php echo '%>';
echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
	<?php echo '<%';?>= alert_message <?php echo '%>';?>
	<?php echo '<%';?> if( show_close_btn == "1"){ <?php echo '%>';?>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
