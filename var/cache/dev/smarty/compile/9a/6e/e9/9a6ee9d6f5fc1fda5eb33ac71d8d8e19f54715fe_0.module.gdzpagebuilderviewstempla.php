<?php
/* Smarty version 3.1.33, created on 2020-07-14 08:58:04
  from 'module:gdzpagebuilderviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d112ceaf1e2_90520099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a6ee9d6f5fc1fda5eb33ac71d8d8e19f54715fe' => 
    array (
      0 => 'module:gdzpagebuilderviewstempla',
      1 => 1594026290,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d112ceaf1e2_90520099 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/row_style_template.tpl -->
<style type="text/css" class="row-style" id="row_style_template">
#<?php echo '<%'; ?>
= row_id <?php echo '%>'; ?>
 {
    <?php echo '<%'; ?>
 if (text_color) { <?php echo '%>'; ?>
color: <?php echo '<%'; ?>
= text_color <?php echo '%>'; ?>
!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    <?php echo '<%'; ?>
 if (background_color) { <?php echo '%>'; ?>
background-color: <?php echo '<%'; ?>
= background_color <?php echo '%>'; ?>
!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    <?php echo '<%'; ?>
 if (background_img) { <?php echo '%>'; ?>
background-image: url(<?php echo '<%'; ?>
= background_img <?php echo '%>'; ?>
)!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    <?php echo '<%'; ?>
 if (background_size) { <?php echo '%>'; ?>
background-size: <?php echo '<%'; ?>
= background_size <?php echo '%>'; ?>
!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    <?php echo '<%'; ?>
 if (background_repeat) { <?php echo '%>'; ?>
background-repeat: <?php echo '<%'; ?>
= background_repeat <?php echo '%>'; ?>
!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    <?php echo '<%'; ?>
 if (background_position) { <?php echo '%>'; ?>
background-position: <?php echo '<%'; ?>
= background_position <?php echo '%>'; ?>
!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    <?php echo '<%'; ?>
 if (background_attachment) { <?php echo '%>'; ?>
background-attachment: <?php echo '<%'; ?>
= background_attachment <?php echo '%>'; ?>
!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    <?php echo '<%'; ?>
 if (animation_duration) { <?php echo '%>'; ?>
animation-duration: <?php echo '<%'; ?>
= animation_duration <?php echo '%>'; ?>
!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    <?php echo '<%'; ?>
 if (animation_delay) { <?php echo '%>'; ?>
animation-delay: <?php echo '<%'; ?>
= animation_delay <?php echo '%>'; ?>
!important;<?php echo '<%'; ?>
 } <?php echo '%>'; ?>

    padding: <?php echo '<%'; ?>
= obj['md_padding_top']?obj['md_padding_top']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['md_padding_right']?obj['md_padding_right']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['md_padding_bottom']?obj['md_padding_bottom']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['md_padding_left']?obj['md_padding_left']:0 <?php echo '%>'; ?>
px!important;
    margin: <?php echo '<%'; ?>
= obj['md_margin_top']?obj['md_margin_top']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['md_margin_right']?obj['md_margin_right']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['md_margin_bottom']?obj['md_margin_bottom']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['md_margin_left']?obj['md_margin_left']:0 <?php echo '%>'; ?>
px!important;

}
@media screen and (max-width: 991px) {
    #<?php echo '<%'; ?>
= row_id <?php echo '%>'; ?>
 {
        padding: <?php echo '<%'; ?>
= obj['sm_padding_top']?obj['sm_padding_top']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['sm_padding_right']?obj['sm_padding_right']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['sm_padding_bottom']?obj['sm_padding_bottom']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['sm_padding_left']?obj['sm_padding_left']:0 <?php echo '%>'; ?>
px!important;
        margin: <?php echo '<%'; ?>
= obj['sm_margin_top']?obj['sm_margin_top']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['sm_margin_right']?obj['sm_margin_right']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['sm_margin_bottom']?obj['sm_margin_bottom']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['sm_margin_left']?obj['sm_margin_left']:0 <?php echo '%>'; ?>
px!important;
    }
}
@media screen and (max-width: 575px) {
    #<?php echo '<%'; ?>
= row_id <?php echo '%>'; ?>
 {
        padding: <?php echo '<%'; ?>
= obj['xs_padding_top']?obj['xs_padding_top']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['xs_padding_right']?obj['xs_padding_right']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['xs_padding_bottom']?obj['xs_padding_bottom']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['xs_padding_left']?obj['xs_padding_left']:0 <?php echo '%>'; ?>
px!important;
        margin: <?php echo '<%'; ?>
= obj['xs_margin_top']?obj['xs_margin_top']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['xs_margin_right']?obj['xs_margin_right']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['xs_margin_bottom']?obj['xs_margin_bottom']:0 <?php echo '%>'; ?>
px <?php echo '<%'; ?>
= obj['xs_margin_left']?obj['xs_margin_left']:0 <?php echo '%>'; ?>
px!important;
    }
}

</style>

<!-- end D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/row_style_template.tpl --><?php }
}
