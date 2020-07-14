<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:06
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonspacer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112edad558_53720589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '521bbaea0e7a9b2e97637c99e601a1696ba6a2e8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonspacer.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112edad558_53720589 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-spacer-inner {
    height: <?php echo '<%';?>= space_md <?php echo '%>';?>px;
}
@media (max-width:991px) {
    #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-spacer-inner {
        height: <?php echo '<%';?>= space_sm <?php echo '%>';?>px;
    }
}
@media (max-width:575px) {
    #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-spacer-inner {
        height: <?php echo '<%';?>= space_xs <?php echo '%>';?>px;
    }
}
</style>
<div class="pb-spacer<?php echo '<%';?> if (box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
    <div class="pb-spacer-inner"></div>
</div>
<?php }
}
