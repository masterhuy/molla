<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:37
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addoninstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f85992705c6_55798293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dd542b43d6c0ee259d0c48cf9867de08c390722' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addoninstagram.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f85992705c6_55798293 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-instagram-grid .il-item {
    padding: <?php echo '<%';?>= gutter/2 <?php echo '%>';?>px;
}
</style>
<?php echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
      component.find('.pb-instagram').remove();
      if(view_type == 'grid') {
        component.append('<div class="pb-instagram"><div class="pb-instagram-images pb-instagram-grid row"></div></div>');
      } else {
        component.append('<div class="pb-instagram"><div class="pb-instagram-images pb-instagram-carousel"></div></div>');
      }
      var insta_urls = false;
      if(linked == '1') insta_urls = true;
      var insta_likes = false;
      if(likes == '1') insta_likes = true;
      var insta_comments = false;
      if(comments == '1') insta_comments = true;
      var insta_date = false;
      if(date == '1') insta_date = true;
      if(view_type == 'grid' && element_class == '1') {
          element_class ='col-6 col-md-6 col-lg-12';
      } else if(view_type == 'grid' && element_class == '2') {
          element_class ='col-6 col-md-6 col-lg-6';
      } else if(view_type == 'grid' && element_class == '3') {
          element_class ='col-6 col-md-6 col-lg-4';
      } else if(view_type == 'grid' && element_class == '4') {
          element_class ='col-6 col-md-6 col-lg-3';
      } else if(view_type == 'grid' && element_class == '6') {
          element_class ='col-6 col-md-6 col-lg-2';
      } else if(view_type == 'grid' && element_class == '12') {
          element_class ='col-6 col-md-6 col-lg-1';
      } else {
          element_class = 'image-item';
      }
      component.find('.pb-instagram-images').instagramLite({
          accessToken: access_token,
          limit:limit,
          urls: insta_urls,
          comments: insta_comments,
          date: insta_date,
          likes: insta_likes,
          element_class : element_class,
          success: function() {
              if(view_type == 'carousel') {
                  var $carousel = component.find('.pb-instagram-carousel');
                  if ( ! $carousel.length ) {
                      return;
                  }
                  var nav = false;
                  if(navigation == '1') nav = true;
                  var dots = false;
                  if(pagination == '1') dots = true;
                  var autoplay = false;
                  if(autoplay == '1') autoplay = true;
                  var rewind = false;
                  if(rewind == '1') rewind = true;
                  var slideBy = false;
                  if(slidebypage == '1') slideBy = true;
                  var cols_arr = [];
                  if(cols != '')
                      cols_arr = cols.split("-");
                  $carousel.owlCarousel({
                      loop:true,
                      margin:parseInt(gutter),
                      nav:nav,
                      dots:dots,
                      autoplay:autoplay,
                      rewind:rewind,
                      slideBy:slideBy,
                      lazyLoad:true,
                      responsive:{
                          0:{
                              items:cols_arr[2]
                          },
                          576:{
                              items:cols_arr[1]
                          },
                          992:{
                              items:cols_arr[0]
                          }
                      }
                  });
                  $carousel.addClass('owl-carousel');
              }
          },
          error: function() {
          },
      });
  }
<?php echo '%>';
}
}
