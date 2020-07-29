<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:36
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f8598c345c0_15990224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1906dcdc84d5b6e35109f4d638604391c396263' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonbutton.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f8598c345c0_15990224 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-button<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';
echo '<%';?> if(button_align) { <?php echo '%>';?> pb-button-<?php echo '<%';?>= button_align <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
<?php echo '<%';?> if (button_text) { <?php echo '%>';?>
<a class="btn<?php echo '<%';?> if(button_size) { <?php echo '%>';?> btn-<?php echo '<%';?>= button_size <?php echo '%>';
echo '<%';?> } <?php echo '%>';
echo '<%';?> if(button_style) { <?php echo '%>';?> btn-<?php echo '<%';?>= button_style <?php echo '%>';
echo '<%';?> } <?php echo '%>';
echo '<%';?> if(button_align) { <?php echo '%>';?> btn-<?php echo '<%';?>= button_align <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>" href="<?php echo '<%';?> if(button_link) { <?php echo '%>';
echo '<%';?>= button_link <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>#<?php echo '<%';?> } <?php echo '%>';?>" target="<?php echo '<%';?>= target <?php echo '%>';?>">
	<?php echo '<%';?>= button_text <?php echo '%>';?>
</a>
<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
