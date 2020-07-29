<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:37
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addontestimonial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f85997ee9d1_63725180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6799c5aeeacc63381e67f0d07ff86b27b71e3b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addontestimonial.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f85997ee9d1_63725180 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(testimonials.length == 0) { return } <?php echo '%>';?>
<div class="pb-testimonial">
    <div class="pb-testimonial-carousel owl-carousel carousel-tpl"
    data-items="<?php echo '<%';?> if (items_show_md) { <?php echo '%>';
echo '<%';?>= items_show_md <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>5<?php echo '<%';?> } <?php echo '%>';?>"
    data-lg="<?php echo '<%';?> if (items_show_md) { <?php echo '%>';
echo '<%';?>= items_show_md <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>5<?php echo '<%';?> } <?php echo '%>';?>"
    data-md="<?php echo '<%';?> if (items_show_md) { <?php echo '%>';
echo '<%';?>= items_show_md <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>4<?php echo '<%';?> } <?php echo '%>';?>"
    data-sm="<?php echo '<%';?> if (items_show_sm) { <?php echo '%>';
echo '<%';?>= items_show_sm <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>3<?php echo '<%';?> } <?php echo '%>';?>"
    data-xs="<?php echo '<%';?> if (items_show_xs) { <?php echo '%>';
echo '<%';?>= items_show_xs <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>2<?php echo '<%';?> } <?php echo '%>';?>"
    data-nav="<?php echo '<%';?> if (navigation == '1') { <?php echo '%>';?>true<?php echo '<%';?> } else { <?php echo '%>';?>false<?php echo '<%';?> } <?php echo '%>';?>"
    data-dots="<?php echo '<%';?> if (pagination == '1') { <?php echo '%>';?>true<?php echo '<%';?> } else { <?php echo '%>';?>false<?php echo '<%';?> } <?php echo '%>';?>"
    data-auto="<?php echo '<%';?> if (autoplay == '1') { <?php echo '%>';?>true<?php echo '<%';?> } else { <?php echo '%>';?>false<?php echo '<%';?> } <?php echo '%>';?>"
    data-rewind="<?php echo '<%';?> if (rewind == '1') { <?php echo '%>';?>true<?php echo '<%';?> } else { <?php echo '%>';?>false<?php echo '<%';?> } <?php echo '%>';?>"
    data-slidebypage="<?php echo '<%';?> if (slidebypage == '1') { <?php echo '%>';?>page<?php echo '<%';?> } else { <?php echo '%>';?>1<?php echo '<%';?> } <?php echo '%>';?>"
    data-margin="<?php echo '<%';?> if (gutter != '') { <?php echo '%>';
echo '<%';?>= gutter <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>30<?php echo '<%';?> } <?php echo '%>';?>">

    <?php echo '<%';?> _.forEach(testimonials, function(testimonial) { <?php echo '%>';?>
        <div class="pb-testimonial-box">
            <?php echo '<%';?> if (show_image == '1') { <?php echo '%>';?>
            <div class="pb-testimonial-img">
                <img class="img-responsive" src="<?php echo '<%';?>= testimonial.image <?php echo '%>';?>" />
            </div>
            <?php echo '<%';?> } <?php echo '%>';?>
            <h5 class="pb-testimonial-author">
                <?php echo '<%';?>= testimonial.author <?php echo '%>';?>
            </h5>
            <?php echo '<%';?> if (show_position == '1') { <?php echo '%>';?>
            <div class="pb-testimonial-position">
                <?php echo '<%';?>= testimonial.position <?php echo '%>';?>
            </div>
            <?php echo '<%';?> } <?php echo '%>';?>
            <div class="pb-testimonial-comment" >
                <?php echo '<%';?>= testimonial.comment <?php echo '%>';?>
            </div>
        </div>
    <?php echo '<%';?> }); <?php echo '%>';?>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        
        iframeDoc = document.getElementById('pagebuilder-preview-iframe').contentWindow.document;
        $(iframeDoc).find('#main').find('.carousel-tpl').trigger('carousel');
        
    <?php echo '</script'; ?>
>
</div>
<?php }
}
