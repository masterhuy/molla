<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\footers\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde0bc5173_82209559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf809af80bcc438646fbfff70d917e81f50b33e1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\footers\\logo.tpl',
      1 => 1596099590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27dde0bc5173_82209559 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['footer_layout']) && $_GET['footer_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('footer_layout', $_GET['footer_layout']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('footer_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_layout']);
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
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer_layout']->value, ENT_QUOTES, 'UTF-8');?>
-footer.<?php echo htmlspecialchars(pathinfo($_smarty_tpl->tpl_vars['gdzSetting']->value['logo_image'],@constant('PATHINFO_EXTENSION')), ENT_QUOTES, 'UTF-8');?>
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
