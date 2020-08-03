<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde07a6578_50215683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f59db88f2e0cde8a7018c4b7b9b190f10b754d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1595410731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5f27dde07a6578_50215683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3404427725f27dde07738e1_12041342', 'head');
?>

    </head>
    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_pageclass']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_nav_type']) {?> carousel-nav-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_nav_type'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_nav_show']) {?> carousel-nav-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_nav_show'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_pag_show']) {?> carousel-pag-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_pag_show'], ENT_QUOTES, 'UTF-8');
}?>">

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

        <div class="main-site">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7127881105f27dde077b5f4_68146284', 'product_activation');
?>

            <header id="header">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19235821205f27dde077f478_61397909', 'header');
?>

            </header>

    		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['gdzSetting']->value['breadcrumb']) {?>
    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19639112215f27dde07832f2_46739364', 'breadcrumb');
?>

    		<?php }?>
            <div id="wrapper">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17128959825f27dde0787171_09699393', 'notifications');
?>

                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-page' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-preview') {?>
                    <div class="container">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'cart' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-jmspagebuilder-preview') {?>
                <div class="row">
                <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_765682865f27dde078aff2_31000128', "left_column");
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1041935525f27dde078ee76_11757158', "content_wrapper");
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8174666845f27dde0796b75_16442625', "right_column");
?>

                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'cart' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-preview') {?>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-page' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-preview') {?>
                </div>
                <?php }?>


    		</div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8558480805f27dde079e878_56468056', "footer");
?>

        <button id="scroll-top" title="Back to Top" class="show">
            <i class="icon-arrow-up"></i>
        </button>
        </div>



        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13990274685f27dde07a26f7_15616060', 'javascript_bottom');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    </body>
</html>
<?php }
/* {block 'head'} */
class Block_3404427725f27dde07738e1_12041342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3404427725f27dde07738e1_12041342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'head'} */
/* {block 'product_activation'} */
class Block_7127881105f27dde077b5f4_68146284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_7127881105f27dde077b5f4_68146284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_19235821205f27dde077f478_61397909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19235821205f27dde077f478_61397909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_19639112215f27dde07832f2_46739364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_19639112215f27dde07832f2_46739364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    			   <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    			<?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'notifications'} */
class Block_17128959825f27dde0787171_09699393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_17128959825f27dde0787171_09699393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'notifications'} */
/* {block "left_column"} */
class Block_765682865f27dde078aff2_31000128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_765682865f27dde078aff2_31000128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="left-column" class="page-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                            <?php }?>
                        </div>
                    <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_10431297645f27dde0792cf8_30173560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <p>Hello world! This is HTML5 Boilerplate.</p>
                            <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_1041935525f27dde078ee76_11757158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1041935525f27dde078ee76_11757158',
  ),
  'content' => 
  array (
    0 => 'Block_10431297645f27dde0792cf8_30173560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="content-wrapper" class="left-column right-column col-sm-12 col-md-6">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10431297645f27dde0792cf8_30173560', "content", $this->tplIndex);
?>

                        </div>
                    <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_8174666845f27dde0796b75_16442625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_8174666845f27dde0796b75_16442625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="right-column" class="col-xs-12 col-sm-12 col-md-4">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                            <?php }?>
                        </div>
                    <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_8558480805f27dde079e878_56468056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8558480805f27dde079e878_56468056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_13990274685f27dde07a26f7_15616060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_13990274685f27dde07a26f7_15616060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
        <?php
}
}
/* {/block 'javascript_bottom'} */
}
