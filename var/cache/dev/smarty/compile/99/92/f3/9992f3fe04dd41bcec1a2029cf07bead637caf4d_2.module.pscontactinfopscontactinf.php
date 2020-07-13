<?php
/* Smarty version 3.1.33, created on 2020-07-13 17:25:55
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c36b30affe2_10377704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1592884695,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c36b30affe2_10377704 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\jms_molla/themes/jms_molla/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact wrapper block">
    <h3 class="block-title">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    </h3>
    <div class="block-content">
        <div class="address section">
            <p class="info-company"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['company'];?>
</h3>
            <p class="info-address"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>
</p>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <div class="phone section">
                
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
            <div class="fax section">
                <span class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
            <div class="email section">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </div>
      <?php }?>
  </div>
</div>
<!-- end D:\xampp\htdocs\jms_molla/themes/jms_molla/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
