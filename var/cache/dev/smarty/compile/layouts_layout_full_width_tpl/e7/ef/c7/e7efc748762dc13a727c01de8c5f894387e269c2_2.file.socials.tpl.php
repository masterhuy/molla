<?php
/* Smarty version 3.1.33, created on 2020-07-13 17:25:55
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\socials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c36b303acd5_41456914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7efc748762dc13a727c01de8c5f894387e269c2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\socials.tpl',
      1 => 1592884977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c36b303acd5_41456914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6457829065f0c36b3013bd0_76636277', 'footer-social');
?>

<?php }
/* {block 'footer-social'} */
class Block_6457829065f0c36b3013bd0_76636277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-social' => 
  array (
    0 => 'Block_6457829065f0c36b3013bd0_76636277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul id="social-links" class="social-links">
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook'] != '') {?><li class="facebook"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['facebook_icon'], ENT_QUOTES, 'UTF-8');?>
" ></i></a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter'] != '') {?><li class="twitter"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['twitter_icon'], ENT_QUOTES, 'UTF-8');?>
" ></i></a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus'] != '') {?><li class="google-plus"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['twitter_icon'], ENT_QUOTES, 'UTF-8');?>
" ></i></a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram'] != '') {?><li class="instagram"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['instagram_icon'], ENT_QUOTES, 'UTF-8');?>
" ></i></a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest'] != '') {?><li class="pinterest"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['pinterest_icon'], ENT_QUOTES, 'UTF-8');?>
" ></i></a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube'] != '') {?><li class="youtube"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['youtube_icon'], ENT_QUOTES, 'UTF-8');?>
" ></i></a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo'] != '') {?><li class="vimeo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['twitter_icon'], ENT_QUOTES, 'UTF-8');?>
" ></i></a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin'] != '') {?><li class="linkedin"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['linkedin_icon'], ENT_QUOTES, 'UTF-8');?>
" ></i></a></li><?php }?>

</ul>
<?php
}
}
/* {/block 'footer-social'} */
}
