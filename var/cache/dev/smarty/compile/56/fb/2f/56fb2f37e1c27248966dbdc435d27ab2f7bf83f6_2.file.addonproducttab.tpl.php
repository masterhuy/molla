<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonproducttab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde051dde3_44578671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56fb2f37e1c27248966dbdc435d27ab2f7bf83f6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonproducttab.tpl',
      1 => 1594893810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 10,
  ),
),false)) {
function content_5f27dde051dde3_44578671 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-producttab addon-tab">
		<ul class="nav nav-tabs tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_align']->value, ENT_QUOTES, 'UTF-8');?>
">
		<?php $_smarty_tpl->_assignInScope('cf', 0);?>
			<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_featured'] == '1') {?>
				<li class="nav-item"><a data-toggle="tab" href="#featured" class="nav-link active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['producttabs']->value['featured_text'], ENT_QUOTES, 'UTF-8');?>
</a></li>
			<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_new'] == '1') {?>
				<li class="nav-item"><a data-toggle="tab" href="#latest" class="nav-link<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?> active<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['producttabs']->value['new_text'], ENT_QUOTES, 'UTF-8');?>
</a></li>
				<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_onsale'] == '1') {?>
				<li class="nav-item"><a data-toggle="tab" href="#onsale" class="nav-link<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?> active<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['producttabs']->value['onsale_text'], ENT_QUOTES, 'UTF-8');?>
</a></li>
				<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_topseller'] == '1') {?>
				<li class="nav-item"><a data-toggle="tab" href="#topseller" class="nav-link<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?> active<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['producttabs']->value['topseller_text'], ENT_QUOTES, 'UTF-8');?>
</a></li>
				<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_special'] == '1') {?>
				<li class="nav-item"><a data-toggle="tab" href="#special" class="nav-link<?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?> active<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['producttabs']->value['special_text'], ENT_QUOTES, 'UTF-8');?>
</a></li>
				<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
			<?php }?>
		</ul>
</div>
<div class="tab-content">
	<?php $_smarty_tpl->_assignInScope('cf', 0);?>
	<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_featured'] == '1') {?>
		<div role="tabpanel" class="tab-pane active" id="featured">
			<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'carousel') {?>
				<div class="producttab-products owl-carousel customs" data-items="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>30<?php }?>">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['featured_products'], 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
						<div class="item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php } else { ?>
				<div class="producttab-products products row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['featured_products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<div class="col-md-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_md']->value, ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_sm']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_xs']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
		<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_new'] == '1') {?>
		<div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active<?php }?>" id="latest">
			<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'carousel') {?>
				<div class="producttab-products owl-carousel" data-items="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>30<?php }?>">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['new_products'], 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
						<div class="item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php } else { ?>
				<div class="producttab-products products row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['new_products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<div class="col-md-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_md']->value, ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_sm']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_xs']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
		<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_topseller'] == '1') {?>
		<div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active<?php }?>" id="topseller">
			<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'carousel') {?>
				<div class="producttab-products owl-carousel" data-items="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>30<?php }?>">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['topseller_products'], 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
						<div class="item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php } else { ?>
				<div class="producttab-products products row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['topseller_products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<div class="col-md-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_md']->value, ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_sm']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_xs']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
		<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_special'] == '1') {?>
		<div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active<?php }?>" id="special">
			<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'carousel') {?>
				<div class="producttab-products owl-carousel" data-items="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>30<?php }?>">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['special_products'], 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
						<div class="item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php } else { ?>
				<div class="producttab-products products row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['special_products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<div class="col-md-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_md']->value, ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_sm']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_xs']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
		<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['producttabs']->value['show_onsale'] == '1') {?>
		<div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['cf']->value == 0) {?>active<?php }?>" id="onsale">
			<?php if ($_smarty_tpl->tpl_vars['view_type']->value == 'carousel') {?>
				<div class="producttab-products owl-carousel" data-items="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>30<?php }?>">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['onsale_products'], 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
						<div class="item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php } else { ?>
				<div class="producttab-products products row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttabs']->value['onsale_products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<div class="col-md-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_md']->value, ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_sm']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_xs']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
		<?php $_smarty_tpl->_assignInScope('cf', $_smarty_tpl->tpl_vars['cf']->value+1);?>
	<?php }?>
</div>
<?php }
}
