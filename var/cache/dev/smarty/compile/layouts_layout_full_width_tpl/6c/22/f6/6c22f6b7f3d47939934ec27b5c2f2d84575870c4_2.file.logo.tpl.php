<?php
/* Smarty version 3.1.33, created on 2020-07-13 17:25:54
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\headers\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c36b27dbed1_39503879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c22f6b7f3d47939934ec27b5c2f2d84575870c4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\headers\\logo.tpl',
      1 => 1594191302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c36b27dbed1_39503879 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['header_layout']) && $_GET['header_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('header_layout', $_GET['header_layout']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('header_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['header_layout']);
}?>

<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['logo_source'] == 'default') {?>
        <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['logo_source'] == 'image') {?>
        <?php $_smarty_tpl->_assignInScope('image_length', preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['gdzSetting']->value['logo_image'], $tmp)-4);?>
        <img
            class="logo img-responsive"
            src="<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['gdzSetting']->value['logo_image'],0,$_smarty_tpl->tpl_vars['image_length']->value), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header_layout']->value, ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars(pathinfo($_smarty_tpl->tpl_vars['gdzSetting']->value['logo_image'],@constant('PATHINFO_EXTENSION')), ENT_QUOTES, 'UTF-8');?>
"
            alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        />
    <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['logo_source'] == 'text') {?>
        <span class="site-logo-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['logo_text'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>
</a>
<?php }
}
