<?php
/* Smarty version 3.1.33, created on 2020-07-13 17:25:53
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c36b1e448c7_03965631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad6018a1282cd61788bf60dda9668e3e3590e708' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\page.tpl',
      1 => 1592884694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c36b1e448c7_03965631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10247311455f0c36b1d813c4_12978559', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_6234968445f0c36b1dcf5c0_11828275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_15407335975f0c36b1df66c2_37216659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14056074935f0c36b1da84c0_46469555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6234968445f0c36b1dcf5c0_11828275', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15407335975f0c36b1df66c2_37216659', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_8621916965f0c36b1e1d7c7_79805425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10247311455f0c36b1d813c4_12978559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10247311455f0c36b1d813c4_12978559',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14056074935f0c36b1da84c0_46469555',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6234968445f0c36b1dcf5c0_11828275',
  ),
  'page_content' => 
  array (
    0 => 'Block_15407335975f0c36b1df66c2_37216659',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8621916965f0c36b1e1d7c7_79805425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14056074935f0c36b1da84c0_46469555', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8621916965f0c36b1e1d7c7_79805425', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
