<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:46:59
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\headers\mobile-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f8393461567_03100649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978658782beb38a6fefdd676448d04942acf4918' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\headers\\mobile-menu.tpl',
      1 => 1592885381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f8393461567_03100649 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="mobile-menu-toggle" class="open-button hidden-lg">
		<i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['menu_icon'], ENT_QUOTES, 'UTF-8');?>
"></i>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <button id="mobile-menu-close" class="close-button"><h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3> <i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['close_icon'], ENT_QUOTES, 'UTF-8');?>
"></i></button>
    <nav id="off-canvas-menu">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"gdz_megamenu",'hook'=>'MobiMenu'),$_smarty_tpl ) );?>

    </nav>
</div>
<?php }
}
