<?php
/* Smarty version 3.1.33, created on 2020-07-28 08:55:36
  from 'D:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonaccordion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1f85989753c6_05534705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e7cb62c40ef56c9b059d68a8eb2be0066e249f8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonaccordion.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1f85989753c6_05534705 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(accordions.length == 0) { return } <?php echo '%>';?>
<div class="pb-accordion">
    <?php echo '<%';?> var accordion_id = _.random(1000, 9999); <?php echo '%>';?>
    <div class="accordions">
        <?php echo '<%';?> _.forEach(accordions, function(accordion, index) { <?php echo '%>';?>
          <div class="card accordion-item">
            <div class="card-header" id="heading-<?php echo '<%';?>= accordion_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>">
              <h5 class="collapsed" data-toggle="collapse" data-target="#acc-<?php echo '<%';?>= accordion_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>" aria-expanded="false">
                  <?php echo '<%';?>= accordion.title <?php echo '%>';?>
              </h5>
            </div>
            <div id="acc-<?php echo '<%';?>= accordion_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>" class="collapse<?php echo '<%';?> if (index == 0) { <?php echo '%>';?> show<?php echo '<%';?> } <?php echo '%>';?>" aria-labelledby="heading-<?php echo '<%';?>= accordion_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>">
              <div class="card-body accordion-content">
                  <?php echo '<%';?>= accordion.content <?php echo '%>';?>
              </div>
            </div>
          </div>
        <?php echo '<%';?> }); <?php echo '%>';?>
    </div>
</div>
<?php }
}
