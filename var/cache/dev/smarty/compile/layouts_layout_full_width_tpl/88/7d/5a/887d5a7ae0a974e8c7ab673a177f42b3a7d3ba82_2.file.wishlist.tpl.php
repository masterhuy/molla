<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:46:58
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\headers\wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f8392f36c52_37743812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '887d5a7ae0a974e8c7ab673a177f42b3a7d3ba82' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\headers\\wishlist.tpl',
      1 => 1594195287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f8392f36c52_37743812 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="wishlist_block"class="wishlist col-auto">
    <a href="index.php?fc=module&module=gdz_wishlist&controller=mywishlist">
        <i class="icon-heart-o"></i>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </a>
</div>
<?php }
}
