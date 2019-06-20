<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:19
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aab1d6ad4_54147194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f22047beed052ab01abbab05c46dfe97b42e2980' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/customize/button-cart.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5d0a5aab1d6ad4_54147194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10717256675d0a5aab1b5089_74339962', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_16758652815d0a5aab1b6fd4_72188188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <img
            src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
            data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </a>
      <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_6832172305d0a5aab1bd0e8_54237179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<ul class="product-flag">
				<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				   <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					   <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
						  <li class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</li>
						<?php }?>
					<?php }?>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
					<li class=" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		 <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_7710959585d0a5aab1c3f02_36467327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1 itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h1>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_19440399315d0a5aab1c6b63_82422423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


              <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              
			   <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?> price_sale <?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

            </div>
          <?php }?>
        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_15205682595d0a5aab1d1a77_87685054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
		<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_17361224085d0a5aab1d3608_48122928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
		<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
		<?php }?>
		<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_10717256675d0a5aab1b5089_74339962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_10717256675d0a5aab1b5089_74339962',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_16758652815d0a5aab1b6fd4_72188188',
  ),
  'product_flags' => 
  array (
    0 => 'Block_6832172305d0a5aab1bd0e8_54237179',
  ),
  'product_name' => 
  array (
    0 => 'Block_7710959585d0a5aab1c3f02_36467327',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_19440399315d0a5aab1c6b63_82422423',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_15205682595d0a5aab1d1a77_87685054',
  ),
  'product_variants' => 
  array (
    0 => 'Block_17361224085d0a5aab1d3608_48122928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="img_block">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16758652815d0a5aab1b6fd4_72188188', 'product_thumbnail', $this->tplIndex);
?>

	  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6832172305d0a5aab1bd0e8_54237179', 'product_flags', $this->tplIndex);
?>

		
			<ul class="add-to-links">
				<li class="cart">
					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
				</li>
				<li>
					<a href="#" class="quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
				</li>
		
			</ul>
		
	</div>
    <div class="product_desc">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7710959585d0a5aab1c3f02_36467327', 'product_name', $this->tplIndex);
?>

		
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19440399315d0a5aab1c6b63_82422423', 'product_price_and_shipping', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15205682595d0a5aab1d1a77_87685054', 'product_description_short', $this->tplIndex);
?>

		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17361224085d0a5aab1d3608_48122928', 'product_variants', $this->tplIndex);
?>

    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
