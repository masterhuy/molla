<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:37
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonmap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f85992e58c4_79679536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '363794b7c4ea6e3ac7a98bd999e4df69244dbfad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonmap.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f85992e58c4_79679536 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if (address) { <?php echo '%>';?>
<style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-map iframe {
	height:<?php echo '<%';?>= height <?php echo '%>';?>px;
}
</style>
<div class="pb-map">
		<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo '<%';?>= address <?php echo '%>';?>&z=<?php echo '<%';?>= zoom <?php echo '%>';?>&output=embed&iwloc=near"></iframe>
</div>
<?php echo '<%';?> } <?php echo '%>';
}
}
