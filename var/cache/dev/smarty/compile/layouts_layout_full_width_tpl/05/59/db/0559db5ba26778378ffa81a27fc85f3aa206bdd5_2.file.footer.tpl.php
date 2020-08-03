<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde0b8a7e0_02996584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0559db5ba26778378ffa81a27fc85f3aa206bdd5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\footer.tpl',
      1 => 1596099740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/footers/footer-1.tpl' => 1,
    'file:_partials/footers/footer-2.tpl' => 1,
    'file:_partials/footers/footer-3.tpl' => 1,
    'file:_partials/footers/footer-4.tpl' => 1,
    'file:_partials/footers/footer-5.tpl' => 1,
    'file:_partials/footers/footer-6.tpl' => 1,
    'file:_partials/footers/footer-7.tpl' => 1,
    'file:_partials/footers/footer-8.tpl' => 1,
  ),
),false)) {
function content_5f27dde0b8a7e0_02996584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_GET['footer_layout']) && $_GET['footer_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('footer_layout', $_GET['footer_layout']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('footer_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_layout']);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5884431335f27dde0b82ae3_08905031', "footer");
?>

<?php }
/* {block "footer"} */
class Block_5884431335f27dde0b82ae3_08905031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5884431335f27dde0b82ae3_08905031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer id="footer" class="footer-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer_layout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <?php if ($_smarty_tpl->tpl_vars['footer_layout']->value == 1) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 2) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 3) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 4) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 5) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 6) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 7) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['footer_layout']->value == 8) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-8.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </footer>
<?php
}
}
/* {/block "footer"} */
}
