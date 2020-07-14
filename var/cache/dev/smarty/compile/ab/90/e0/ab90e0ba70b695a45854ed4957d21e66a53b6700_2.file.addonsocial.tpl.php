<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:06
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonsocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112ed38257_68306601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab90e0ba70b695a45854ed4957d21e66a53b6700' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonsocial.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112ed38257_68306601 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(socials.length == 0) { return } <?php echo '%>';?>
<div class="pb-social">
		<div class="pb-social-container pb-social-<?php echo '<%';?>= icon_shape <?php echo '%>';?> pb-social-<?php echo '<%';?>= icon_align <?php echo '%>';?>">
			<?php echo '<%';?> _.forEach(socials, function(social, index) { <?php echo '%>';?>
					<a class="pb-social-box" href="<?php echo '<%';?>= social.link <?php echo '%>';?>"><i class="<?php echo '<%';?>= social.icon_class <?php echo '%>';?>"></i></a>
			<?php echo '<%';?> }); <?php echo '%>';?>
    </div>
</div>
<?php }
}
