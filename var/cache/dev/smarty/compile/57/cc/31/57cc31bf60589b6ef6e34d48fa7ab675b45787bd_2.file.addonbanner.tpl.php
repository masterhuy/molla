<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:36
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f8598a5f9c1_13585661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57cc31bf60589b6ef6e34d48fa7ab675b45787bd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonbanner.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f8598a5f9c1_13585661 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-banner<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
<?php echo '<%';?> if (banner_link) { <?php echo '%>';?>
<a href="<?php echo '<%';?>= banner_link <?php echo '%>';?>" target="<?php echo '<%';?>= target <?php echo '%>';?>">
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner) { <?php echo '%>';?>
<div class="pb-banner-img">
		<img src="<?php echo '<%';?>= banner <?php echo '%>';?>" alt="<?php echo '<%';?>= alt_text <?php echo '%>';?>" class="img-responsive" />
</div>
<div class="pb-banner-text">
	<?php echo '<%';?> if (subtitle) { <?php echo '%>';?><span class="pb-banner-subtitle"><?php echo '<%';?>= subtitle <?php echo '%>';?></span><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (title) { <?php echo '%>';?><<?php echo '<%';?>= title_tag <?php echo '%>';?> class="pb-banner-desc"><?php echo '<%';?>= title <?php echo '%>';?></<?php echo '<%';?>= title_tag <?php echo '%>';?>><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (description) { <?php echo '%>';?><div class="pb-banner-desc"><?php echo '<%';?>= description <?php echo '%>';?></div><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (button_text) { <?php echo '%>';?><div><div class="pb-banner-button btn"><span><?php echo '<%';?>= button_text <?php echo '%>';?></span></div></div><?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner_link) { <?php echo '%>';?>
</a>
<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
