<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:06
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addontext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112ef0ce59_60261974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4deffe4f6242e96b96442cf573289e5aea33329d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addontext.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112ef0ce59_60261974 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if (content) { <?php echo '%>';?>
<style type="text/css">
<?php echo '<%';?>
fontsize_arr = [];
if(fontsize) fontsize_arr = fontsize.split("-");
<?php echo '%>';?>
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-text-content {
    font-size: <?php echo '<%';?>= fontsize_arr[0] <?php echo '%>';?>px;
    color:<?php echo '<%';?>= textcolor <?php echo '%>';?>;
    text-align:<?php echo '<%';?>= text_align <?php echo '%>';?>;
}
@media (max-width:991px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-text-content {
      font-size: <?php echo '<%';?>= fontsize_arr[1] <?php echo '%>';?>px;
  }
}
@media (max-width:575px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-text-content {
      font-size: <?php echo '<%';?>= fontsize_arr[2] <?php echo '%>';?>px;
  }
}
</style>
    <div class="pb-text-content"><?php echo '<%';?>= content <?php echo '%>';?></div>
<?php echo '<%';?> } <?php echo '%>';
}
}
