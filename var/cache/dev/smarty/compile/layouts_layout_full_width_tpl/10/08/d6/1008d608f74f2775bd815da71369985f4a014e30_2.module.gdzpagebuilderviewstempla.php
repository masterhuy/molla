<?php
/* Smarty version 3.1.33, created on 2020-07-14 16:02:17
  from 'module:gdzpagebuilderviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0d749908afd8_86568853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1008d608f74f2775bd815da71369985f4a014e30' => 
    array (
      0 => 'module:gdzpagebuilderviewstempla',
      1 => 1594717124,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:gdz_pagebuilder/views/templates/admin/preview_rows.tpl' => 1,
  ),
),false)) {
function content_5f0d749908afd8_86568853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/preview.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14374718785f0d7499044ac6_93654228', 'head_seo_title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9008995355f0d7499050643_57887533', 'head_seo_description');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10595896475f0d74990544c4_37267157', 'head_seo_keywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11823273515f0d7499058342_91237294', 'content');
?>

<!-- end D:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/preview.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/layout-full-width.tpl");
}
/* {block 'head_seo_title'} */
class Block_14374718785f0d7499044ac6_93654228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_title' => 
  array (
    0 => 'Block_14374718785f0d7499044ac6_93654228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['gdz_pagebuilder_page']->value['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_9008995355f0d7499050643_57887533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_description' => 
  array (
    0 => 'Block_9008995355f0d7499050643_57887533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['gdz_pagebuilder_page']->value['meta_desc'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_10595896475f0d74990544c4_37267157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_keywords' => 
  array (
    0 => 'Block_10595896475f0d74990544c4_37267157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['gdz_pagebuilder_page']->value['meta_key'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'page_content_top'} */
class Block_3167840405f0d7499060046_16869959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block "page_content"} */
class Block_14744195545f0d7499063ec8_06667352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("module:gdz_pagebuilder/views/templates/admin/preview_rows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="gdz-row row-add">
                  <div class="container">
                      <div class="pb-add-row pb-add-btn btn-group dropup">
                        <a href="#" data-toggle="dropdown" data-display="static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add New Row','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a>
                        <div class="dropdown-menu pb-add-row-dropup">
                            <div class="pb-add-row-dropup-container">
                                <ul class="pb-column-list">
                                  <li><a data-original-title="12" data-layout="12" class="column-layout label-tooltip column-layout-12" href="#"></a></li>
                                  <li><a data-original-title="6,6" data-layout="6,6" class="column-layout label-tooltip column-layout-66" href="#"></a></li>
                                  <li><a data-original-title="4,4,4" data-layout="4,4,4" class="column-layout label-tooltip column-layout-444" href="#"></a></li>
                                  <li><a data-original-title="3,3,3,3" data-layout="3,3,3,3" class="column-layout label-tooltip column-layout-3333" href="#"></a></li>
                                  <li><a data-original-title="4,8" data-layout="4,8" class="column-layout label-tooltip column-layout-48" href="#"></a></li>
                                  <li><a data-original-title="3,9" data-layout="3,9" class="column-layout label-tooltip column-layout-39 active" href="#"></a></li>
                                  <li><a data-original-title="3,6,3" data-layout="3,6,3" class="column-layout label-tooltip column-layout-363" href="#"></a></li>
                                  <li><a data-original-title="2,6,4" data-layout="2,6,4" class="column-layout label-tooltip column-layout-264" href="#"></a></li>
                                  <li><a data-original-title="2,10" data-layout="2,10" class="column-layout label-tooltip column-layout-210" href="#"></a></li>
                                  <li><a data-original-title="5,7" data-layout="5,7" class="column-layout label-tooltip column-layout-57" href="#"></a></li>
                                </ul>
                                <div class="pb-custom-layout clearfix align-items-center">
                                  <div class="pb-custom-label width-auto"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span></div>
                                  <div class="pb-custom-input"><input type="text" class="custom-layout" placeholder="4,4,4" value="4,4,4"></div>
                                  <div class="pb-custom-btn width-auto"><a href="#" class="pb-btn pb-btn-primary column-layout" data-layout="custom"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="pb-add-template pb-add-btn">
                          <a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Template','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a>
                      </div>
                      <span class="drag-addon-here"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or drag addon here to create new row + dragged addon','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</span>
                  </div>
                </div>
								<?php
}
}
/* {/block "page_content"} */
/* {block 'page_content_container'} */
class Block_10522075135f0d749905c1c7_54199532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content rowlist row-sortable">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3167840405f0d7499060046_16869959', 'page_content_top', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14744195545f0d7499063ec8_06667352', "page_content", $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_13255302705f0d7499077741_34150546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11823273515f0d7499058342_91237294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11823273515f0d7499058342_91237294',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10522075135f0d749905c1c7_54199532',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3167840405f0d7499060046_16869959',
  ),
  'page_content' => 
  array (
    0 => 'Block_14744195545f0d7499063ec8_06667352',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13255302705f0d7499077741_34150546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10522075135f0d749905c1c7_54199532', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13255302705f0d7499077741_34150546', 'page_footer_container', $this->tplIndex);
?>

    </section>

<div id="pb-right-menu" style="display:none;">
    <ul>
    <li class="edit-row"><a href="#"><i class="fa fa-edit"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Row','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></li>
    <li class="duplicate-row seperator"><a href="#"><i class="fa fa-copy"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></li>
    <li class="copy-style-row"><a href="#"><i class="fa fa fa-magic"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy Style','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></li>
    <li class="paste-style-row"><a href="#"><i class="fa fa-magic"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Paste Style','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></li>
    <li class="reset-style-row seperator"><a href="#"><i class="fa fa-magic"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Style','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></li>
    <li class="save-template-row" data-dialog="template-library" data-form="save"><a href="#"><i class="fa fa-floppy-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save as Template','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></li>
    <li class="export-row seperator"><a href="#"><i class="fa fa-arrow-circle-o-down"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export to File','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></li>
    <li class="delete-row"><a href="#"><i class="fa fa-trash-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</a></li>
    </ul>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addonstemplate']->value, 'addontpl', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['addontpl']->value) {
echo '<script'; ?>
 id="pb-tmpl-addon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addontpl']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="x-tmpl-lodash">
  <?php echo $_smarty_tpl->tpl_vars['addontpl']->value['tpl'];?>

<?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'content'} */
}
