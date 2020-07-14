<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:06
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonicon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112e7b9e40_32440644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a9f72e1b97461676f58c231335b2e86f4be917' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonicon.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112e7b9e40_32440644 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-icon-box {
    text-align: <?php echo '<%';?>= text_align <?php echo '%>';?>;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-icon-box i {
    font-size:<?php echo '<%';?>= icon_fontsize <?php echo '%>';?>px;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-icon-box img {
    width:<?php echo '<%';?>= image_width <?php echo '%>';?>%;
}
</style>
<div class="pb-icon-box<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
		<?php echo '<%';?> if(icon_type == 'image' && image) { <?php echo '%>';?>
			<img src="<?php echo '<%';?>= image <?php echo '%>';?>" alt="<?php echo '<%';?>= alt_text <?php echo '%>';?>" />
		<?php echo '<%';?> } else if (icon_class) { <?php echo '%>';?>
			<i class="<?php echo '<%';?>= icon_class <?php echo '%>';?>"></i>
		<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
