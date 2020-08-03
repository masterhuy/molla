<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:50:24
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\catalog\_partials\miniatures\product-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27dde058b3f3_23890271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3762c17906650c9e4e8ff10bd1b8ba3ebda3bd21' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\catalog\\_partials\\miniatures\\product-2.tpl',
      1 => 1596447580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5f27dde058b3f3_23890271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20391136935f27dde054cbe7_70353738', 'product_miniature_item');
}
/* {block 'product_thumbnail'} */
class Block_17114746965f27dde0550a69_95119934 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-image<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_hover'] == 'swap-image' && isset($_smarty_tpl->tpl_vars['product']->value['images'][1]) && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?> swap-image<?php } else { ?> blur-image<?php }?>">
				<img class="img-responsive product-img1<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_lazyload']) {?> owl-lazy<?php }?>f"
                    <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_lazyload']) {?>
                        data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php } else { ?>
                        src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                        alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                        data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
				/>
				<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_hover'] == 'swap-image' && isset($_smarty_tpl->tpl_vars['product']->value['images'][1]) && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?>
					<img class="img-responsive product-img2<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_lazyload']) {?> owl-lazy<?php }?>"
                        <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_lazyload']) {?>
                            data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
					        src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
					    alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['legend'], ENT_QUOTES, 'UTF-8');?>
"
						title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
					    data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
					/>
				<?php }?>
		  	</a>
		<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_9324745015f27dde0577b74_29360812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h3 class="product-title text-left" itemprop="name">
                    <a class="product-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a>
                </h3>
            <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_16599006385f27dde057b9f9_55905280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="content_price">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                            <span class="old price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>
                        <span class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_10351963245f27dde05836f6_96750787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_variants'} */
class Block_1461259235f27dde0587572_11044457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
            <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_20391136935f27dde054cbe7_70353738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_20391136935f27dde054cbe7_70353738',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_17114746965f27dde0550a69_95119934',
  ),
  'product_name' => 
  array (
    0 => 'Block_9324745015f27dde0577b74_29360812',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_16599006385f27dde057b9f9_55905280',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_10351963245f27dde05836f6_96750787',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1461259235f27dde0587572_11044457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="product-miniature js-product-miniature productbox-2" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
	<div class="product-preview">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17114746965f27dde0550a69_95119934', 'product_thumbnail', $this->tplIndex);
?>

        <div class="wrapp-buttons">
			<div class="product-buttons">
				<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_wishlist']) {?>            
					<a 
                        href="#" 
                        class="addToWishlist btn-icon" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Whislist','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" 
                        onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;" 
                        data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
"
                    >
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Whislist','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
					</a>
				<?php }?>
			</div>
		</div>
	</div>
    <div class="product-action">     
        <div class="product-cart">
            <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog'] && $_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_addtocart']) {?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] >= 1) {?>
                    <a href="#" class="ajax-add-to-cart product-btn <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?> cart-button btn-icon" <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sold Out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>" <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?> data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-token="<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value) && $_smarty_tpl->tpl_vars['static_token']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');
}?>">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                <?php } else { ?>
                    <a href="#" class="product-btn btn-icon disabled" disabled title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sold Out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sold Out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_quickview']) {?>
                <a href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" class="btn-icon quick-view">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                </a>
            <?php }?>
        </div>
    </div>

	<div class="product-info">
        <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_category']) {?>
			<a class="category-name" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['product']->value['id_category_default']),$_smarty_tpl ) );?>
">
				<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['category_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			</a>
	    <?php }?>
        <div class="title-price align-items-center">
    		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9324745015f27dde0577b74_29360812', 'product_name', $this->tplIndex);
?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_price']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16599006385f27dde057b9f9_55905280', 'product_price_and_shipping', $this->tplIndex);
?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10351963245f27dde05836f6_96750787', 'product_reviews', $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants'] && $_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_variant']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1461259235f27dde0587572_11044457', 'product_variants', $this->tplIndex);
?>

        <?php }?>
        <div class="product-short-desc">
    		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],300,'...' ));?>

    	</div>
	</div>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
