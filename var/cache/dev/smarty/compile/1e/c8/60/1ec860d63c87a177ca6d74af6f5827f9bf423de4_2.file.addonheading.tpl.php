<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:06
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonheading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112e65a548_60554155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec860d63c87a177ca6d74af6f5827f9bf423de4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonheading.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112e65a548_60554155 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if (heading) { <?php echo '%>';?>
<style type="text/css">
<?php echo '<%';?>
fontsize_arr = [];
if(fontsize) fontsize_arr = fontsize.split("-");
<?php echo '%>';?>
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-heading {
    font-size: <?php echo '<%';?>= fontsize_arr[0] <?php echo '%>';?>px;
    color:<?php echo '<%';?>= headingcolor <?php echo '%>';?>;
		text-align: <?php echo '<%';?>= text_align <?php echo '%>';?>;
}
@media (max-width:991px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-heading {
      font-size: <?php echo '<%';?>= fontsize_arr[1] <?php echo '%>';?>px;
  }
}
@media (max-width:575px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-heading {
      font-size: <?php echo '<%';?>= fontsize_arr[2] <?php echo '%>';?>px;
  }
}
</style>
<<?php echo '<%';?>= heading_tag <?php echo '%>';?> class="pb-heading<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
	<?php echo '<%';?>= heading <?php echo '%>';?>
</<?php echo '<%';?>= heading_tag <?php echo '%>';?>>
<?php echo '<%';?> } else { <?php echo '%>';?>
  dfdfdfdf
<?php echo '<%';?> } <?php echo '%>';
}
}
