<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\footers\footer-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde0ba9be5_93898533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b35c7d4945c3e6ae3d0ac6699327c198fea31c3c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\footers\\footer-2.tpl',
      1 => 1596099252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/footers/logo.tpl' => 1,
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5f27dde0ba9be5_93898533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="layout-column col-sm-6 col-lg-3">
                <div class="logo-footer">
                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_html'];?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21185157135f27dde0b9e061_24072306', 'hook_footer');
?>

        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_825294085f27dde0ba1ee2_44556708', 'hook_footer_after');
?>

        </div>
    </div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5528609355f27dde0ba5d69_18839951', 'footer-copyright');
?>

<?php }
/* {block 'hook_footer'} */
class Block_21185157135f27dde0b9e061_24072306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_21185157135f27dde0b9e061_24072306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_825294085f27dde0ba1ee2_44556708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_825294085f27dde0ba1ee2_44556708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'footer-copyright'} */
class Block_5528609355f27dde0ba5d69_18839951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_5528609355f27dde0ba5d69_18839951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <div class="container">
            <div class="row align-items-center no-margin">
                <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) {?>
                    <div class="layout-column">
                        <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content'];?>

                    </div>
                <?php }?>
                <div class="layout-column">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_payment_image'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid ml-auto" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payments','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>
"/>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
