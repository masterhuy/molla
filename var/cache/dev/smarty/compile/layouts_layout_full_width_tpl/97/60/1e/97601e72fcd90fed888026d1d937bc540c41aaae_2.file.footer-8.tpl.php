<?php
/* Smarty version 3.1.33, created on 2020-07-13 17:25:54
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\footers\footer-8.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c36b2ee0cd8_46076485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97601e72fcd90fed888026d1d937bc540c41aaae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\footers\\footer-8.tpl',
      1 => 1592885029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
    'module:ps_languageselector/ps_languageselector-dropdown-full.tpl' => 1,
  ),
),false)) {
function content_5f0c36b2ee0cd8_46076485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <div id="footer-top" class="footer-top<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_top_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_top_class'], ENT_QUOTES, 'UTF-8');
}?>">
     <div class="container">
       <div class="row align-items-center">
            <div class="layout-column text-center">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_emailsubscription",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

            </div>
       </div>
       <div class="row align-items-center">
            <div class="layout-column text-center">
              <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
       </div>
    </div>
 </div>
 <div id="footer-main" class="footer-main">
     <div class="container">
         <div class="row">
             <div class="layout-column width-25">
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11952027675f0c36b2e448d2_78531116', 'footer-contact');
?>

             </div>
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10758230955f0c36b2e6b9d1_46794667', 'hook_footer');
?>

         </div>
         <div class="row">
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10880629445f0c36b2e92ad3_27880365', 'hook_footer_after');
?>

         </div>
     </div>
 </div>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5512234425f0c36b2eb9bd2_63561321', 'footer-copyright');
?>

<?php }
/* {block 'footer-contact'} */
class Block_11952027675f0c36b2e448d2_78531116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-contact' => 
  array (
    0 => 'Block_11952027675f0c36b2e448d2_78531116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <div class="block block-footer block-newsletter">
                     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

                 </div>
                 <?php
}
}
/* {/block 'footer-contact'} */
/* {block 'hook_footer'} */
class Block_10758230955f0c36b2e6b9d1_46794667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_10758230955f0c36b2e6b9d1_46794667',
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
class Block_10880629445f0c36b2e92ad3_27880365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_10880629445f0c36b2e92ad3_27880365',
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
class Block_5512234425f0c36b2eb9bd2_63561321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_5512234425f0c36b2eb9bd2_63561321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
     <div class="container">
           <div class="row align-items-center">
               <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) {?>
               <div class="layout-column col-auto">
                     <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content'];?>

               </div>
               <?php }?>
               <div class="layout-column text-right">
                   <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_languageselector"));
$_block_repeat=true;
echo $_block_plugin11->smartyWidgetBlock(array('name'=>"ps_languageselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                       <?php $_smarty_tpl->_subTemplateRender('module:ps_languageselector/ps_languageselector-dropdown-full.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                   <?php $_block_repeat=false;
echo $_block_plugin11->smartyWidgetBlock(array('name'=>"ps_languageselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
               </div>
           </div>
     </div>
 </div>
 <?php
}
}
/* {/block 'footer-copyright'} */
}
