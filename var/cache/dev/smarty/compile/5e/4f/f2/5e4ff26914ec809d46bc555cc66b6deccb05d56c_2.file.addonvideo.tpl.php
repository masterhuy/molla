<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:37
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f85998d8fd8_65925955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e4ff26914ec809d46bc555cc66b6deccb05d56c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonvideo.tpl',
      1 => 1594717124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f85998d8fd8_65925955 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
  var video_id = '';
  var video_setting = '';
  if (video_type == 'youtube') {
      var parser = new URL(youtube_link);
      var queries = parser['search'].replace("?", '').split("&");
      for( i = 0; i < queries.length; i++ ) {
          split = queries[i].split('=');
          if(split[0] == 'v')
              var video_id = split[1];
      }
      var video_source = '//www.youtube.com/embed/' + video_id;
      if (autoplay == '1')
          video_setting += 'autoplay=1&mute=1';
      else
          video_setting += 'autoplay=0';
      if (loop == '1')
          video_setting += '&loop=1';
      else
          video_setting += '&loop=0';
      if(playercontrol == '1')
          video_setting += '&controls=1';
      else
          video_setting += '&controls=0';
      if(playertitleactions == '1')
          video_setting += '&showinfos=1';
      else
          video_setting += '&showinfos=0';
  } else {
      var parser = new URL(vimeo_link);
      var video_id = parser.pathname.replace("/", '');
      var video_source = '//player.vimeo.com/video/' + video_id;
      if (autoplay == '1')
          video_setting += 'autoplay=1&muted=1';
      else
          video_setting += 'autoplay=0';
      if (loop == '1')
          video_setting += '&loop=1';
      else
          video_setting += '&loop=0';
      if(introtitle == '1')
          video_setting += '&title=1';
      else
          video_setting += '&controls=0';
      if(introportrait == '1')
          video_setting += '&portrait=1';
      else
          video_setting += '&portrait=0';
      if(introbyline == '1')
          video_setting += '&byline=1';
      else
          video_setting += '&byline=0';
      if(controlscolor == '1')
          video_setting += '&color=1';
      else
          video_setting += '&color=0';
  }
<?php echo '%>';?>
<div class="pb-video">
<?php echo '<%';?> if (video_modal == '1') { <?php echo '%>';?>
		<div class="pb-video-wrapper">
				<button class="pb-video-open-modal" data-toggle="modal" data-target="#pb-video-modal">
					<i class="fa fa-play-circle"></i>
				</button>
				<div class="modal fade pb-video-modal" id="pb-video-modal">
						<div class="modal-dialog" role="document">
								<div class="modal-content">
										<div class="modal-header">
												<span class="modal-title"></span>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
												</button>
										</div>
										<div class="modal-body">
												<iframe width="320" height="320" src="<?php echo '<%';?>= video_source <?php echo '%>';?>?<?php echo '<%';?>= video_setting <?php echo '%>';?>" frameborder="0" allowfullscreen=""></iframe>
										</div>
								</div>
						</div>
				</div>
		</div>
<?php echo '<%';?> } else { <?php echo '%>';?>
		<div class="pb-video-wrapper video-screen-<?php echo '<%';?>= aspect_ratio <?php echo '%>';?>">
		<?php echo '<%';?> if (video_source) { <?php echo '%>';?>
		<iframe width="320" height="320" src="<?php echo '<%';?>= video_source <?php echo '%>';?>?<?php echo '<%';?>= video_setting <?php echo '%>';?>" frameborder="0" allowfullscreen=""></iframe>
		<?php echo '<%';?> } <?php echo '%>';?>
		</div>
<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
