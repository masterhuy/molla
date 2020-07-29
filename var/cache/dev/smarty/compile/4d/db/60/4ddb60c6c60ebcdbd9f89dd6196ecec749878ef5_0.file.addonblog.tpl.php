<?php
/* Smarty version 3.1.33, created on 2020-07-28 14:18:29
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1fd1459def29_65968556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ddb60c6c60ebcdbd9f89dd6196ecec749878ef5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonblog.tpl',
      1 => 1595919516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1fd1459def29_65968556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\jms_molla\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'D:\\xampp\\htdocs\\jms_molla\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="pb-blog">
<?php if (count($_smarty_tpl->tpl_vars['posts']->value) > 0) {?>
<div class="blog-carousel owl-carousel" data-items="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' ));
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' ));
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' ));
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' ));
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' ));
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' ));
} else { ?>30<?php }?>">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'posts_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['posts_slide']->value) {
?>
		<div class="item">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts_slide']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
				<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>
				<div class="blog-item">
						<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && ($_smarty_tpl->tpl_vars['show_media']->value == '1')) {?>
						<div class="post-thumb">
							<?php echo $_smarty_tpl->tpl_vars['post']->value['link_video'];?>

						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && ($_smarty_tpl->tpl_vars['show_media']->value == '1')) {?>
						<div class="post-thumb">
							<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" class="img-responsive" /></a>
						</div>
						<?php }?>
						<h4 class="post-title"><a href="<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['postlink'],'htmlall','UTF-8' )),'&amp;','&');?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h4>
						<ul class="post-meta">
							<?php if ($_smarty_tpl->tpl_vars['show_category']->value == '1') {?>
							<li class="post-category"><i class="fa fa-folder-o"></i> <a href="<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['catlink'],'htmlall','UTF-8' )),'&amp;','&');?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['category_name'];?>
</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['show_time']->value == '1') {?>
							<li class="post-created"><i class="fa fa-calendar-o"></i> <?php echo smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),'%b %e, %Y');?>
</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['show_nviews']->value == '1') {?>
							<li class="post-views"><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['show_ncomments']->value == '1') {?>
							<li class="post-comments"><i class="fa fa-comment-o"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['comment_count'];?>
</li>
							<?php }?>
						</ul>
						<?php if ($_smarty_tpl->tpl_vars['show_introtext']->value == '1') {?>
						<div class="post-intro"><?php echo $_smarty_tpl->tpl_vars['post']->value['introtext'];?>
</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['show_readmore']->value == '1') {?>
							<a class="post-readmore" href="<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['postlink'],'htmlall','UTF-8' )),'&amp;','&');?>
"><?php echo $_smarty_tpl->tpl_vars['readmore_text']->value;?>
</a>
						<?php }?>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>
</div>
<?php }
}
