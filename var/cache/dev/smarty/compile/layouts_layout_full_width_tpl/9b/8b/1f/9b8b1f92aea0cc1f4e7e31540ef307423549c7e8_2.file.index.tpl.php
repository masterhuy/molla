<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde07256d6_34039964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b8b1f92aea0cc1f4e7e31540ef307423549c7e8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\index.tpl',
      1 => 1592884693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27dde07256d6_34039964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1602981655f27dde0719b57_68164176', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_11441735725f27dde071d9d1_51367302 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13750395645f27dde0721855_27853530 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1602981655f27dde0719b57_68164176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1602981655f27dde0719b57_68164176',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11441735725f27dde071d9d1_51367302',
  ),
  'page_content' => 
  array (
    0 => 'Block_13750395645f27dde0721855_27853530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11441735725f27dde071d9d1_51367302', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13750395645f27dde0721855_27853530', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
