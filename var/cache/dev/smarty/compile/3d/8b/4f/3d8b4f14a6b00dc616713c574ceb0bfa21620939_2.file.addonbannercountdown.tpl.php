<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:06
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonbannercountdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112e23ba41_70488725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8b4f14a6b00dc616713c574ceb0bfa21620939' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonbannercountdown.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112e23ba41_70488725 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-banner-countdown<<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner) { <?php echo '%>';?> countdown-has-banner<?php echo '<%';?> } <?php echo '%>';?>">
<?php echo '<%';?> if (banner_link && banner) { <?php echo '%>';?>
<a href="<?php echo '<%';?>= banner_link <?php echo '%>';?>" target="<?php echo '<%';?>= target <?php echo '%>';?>">
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner) { <?php echo '%>';?>
<div class="pb-banner-countdown-img">
		<img src="<?php echo '<%';?>= banner <?php echo '%>';?>" alt="<?php echo '<%';?>= alt_text <?php echo '%>';?>" class="img-responsive" />
</div>
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner_link && banner) { <?php echo '%>';?>
</a>
<?php echo '<%';?> } <?php echo '%>';?>
<div class="pb-banner-countdown-text">
	<?php echo '<%';?> if (subtitle) { <?php echo '%>';?><span class="pb-banner-countdown-subtitle"><?php echo '<%';?>= subtitle <?php echo '%>';?></span><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (title) { <?php echo '%>';?><<?php echo '<%';?>= title_tag <?php echo '%>';?> class="pb-banner-countdown-title"><?php echo '<%';?>= title <?php echo '%>';?></<?php echo '<%';?>= title_tag <?php echo '%>';?>><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (description) { <?php echo '%>';?><div class="pb-banner-countdown-desc"><?php echo '<%';?>= description <?php echo '%>';?></div><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (button_text) { <?php echo '%>';?><div><div class="pb-banner-countdown-button btn"><span><?php echo '<%';?>= button_text <?php echo '%>';?></span></div></div><?php echo '<%';?> } <?php echo '%>';?>
</div>
<div class="pb-banner-countdown-time countdown">
	<?php echo '<%';?>= expire_time <?php echo '%>';?>
</div>

</div>
<?php }
}
