<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:36
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonflashsale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f8598e7e4c8_27285330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '621b8a22a5121133f412899620b07cd316860b87' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonflashsale.tpl',
      1 => 1595493741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f8598e7e4c8_27285330 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
    setting = component.data('setting');
    console.log(component);
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.ajax_link + 'action=getFlashSales&secure_key=' + PagebuilderConfig.secure_key,
        data: {
            'setting' : setting,
        },
        success: function(data)
        {
                component.find('.addon-body').html(data);
                carousel = component.find('.owl-carousel');
                carousel.owlCarousel({
                    loop:true,
                    margin:carousel.data("margin"),
                    nav:carousel.data("nav"),
                    dots:carousel.data("dots"),
                    autoplay:carousel.data("auto"),
                    rewind:carousel.data("rewind"),
                    slideBy:carousel.data("slidebypage"),
                    responsive: {
                        0:{
                            items:carousel.data("xs")
                        },
                        576:{
                            items:carousel.data("sm")
                        },
                        992:{
                            items:carousel.data("md")
                        }
                    }
                });
        }
  });
}
<?php echo '%>';
}
}
