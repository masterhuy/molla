<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:36
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonbrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f8598bbf2c5_72478233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f702177dcdca24a344a5a0c6ca3aaead993c26f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonbrand.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f8598bbf2c5_72478233 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(images.length == 0) { return } <?php echo '%>';?>
<div class="pb-brand">
<div class="brand-carousel owl-carousel carousel-tpl" data-items="<?php echo '<%';?> if (items_show_md) { <?php echo '%>';
echo '<%';?>= items_show_md <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>5<?php echo '<%';?> } <?php echo '%>';?>" data-lg="<?php echo '<%';?> if (items_show_md) { <?php echo '%>';
echo '<%';?>= items_show_md <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>5<?php echo '<%';?> } <?php echo '%>';?>" data-md="<?php echo '<%';?> if (items_show_md) { <?php echo '%>';
echo '<%';?>= items_show_md <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>4<?php echo '<%';?> } <?php echo '%>';?>" data-sm="<?php echo '<%';?> if (items_show_sm) { <?php echo '%>';
echo '<%';?>= items_show_sm <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>3<?php echo '<%';?> } <?php echo '%>';?>" data-xs="<?php echo '<%';?> if (items_show_xs) { <?php echo '%>';
echo '<%';?>= items_show_xs <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>2<?php echo '<%';?> } <?php echo '%>';?>" data-nav="<?php echo '<%';?> if (navigation == '1') { <?php echo '%>';?>true<?php echo '<%';?> } else { <?php echo '%>';?>false<?php echo '<%';?> } <?php echo '%>';?>" data-dots="<?php echo '<%';?> if (pagination == '1') { <?php echo '%>';?>true<?php echo '<%';?> } else { <?php echo '%>';?>false<?php echo '<%';?> } <?php echo '%>';?>" data-auto="<?php echo '<%';?> if (autoplay == '1') { <?php echo '%>';?>true<?php echo '<%';?> } else { <?php echo '%>';?>false<?php echo '<%';?> } <?php echo '%>';?>" data-rewind="<?php echo '<%';?> if (rewind == '1') { <?php echo '%>';?>true<?php echo '<%';?> } else { <?php echo '%>';?>false<?php echo '<%';?> } <?php echo '%>';?>" data-slidebypage="<?php echo '<%';?> if (slidebypage == '1') { <?php echo '%>';?>page<?php echo '<%';?> } else { <?php echo '%>';?>1<?php echo '<%';?> } <?php echo '%>';?>" data-margin="<?php echo '<%';?> if (gutter != '') { <?php echo '%>';
echo '<%';?>= gutter <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>30<?php echo '<%';?> } <?php echo '%>';?>">
<?php echo '<%';?> _.forEach(images, function(image) { <?php echo '%>';?>
    <div class="brand-item">
        <?php echo '<%';?> if (image.image) { <?php echo '%>';?>
        <a href="<?php echo '<%';?>= image.link <?php echo '%>';?>" title="<?php echo '<%';?>= image.alt <?php echo '%>';?>">
            <img src="<?php echo '<%';?>= image.image <?php echo '%>';?>" />
        </a>
        <?php echo '<%';?> } <?php echo '%>';?>
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
