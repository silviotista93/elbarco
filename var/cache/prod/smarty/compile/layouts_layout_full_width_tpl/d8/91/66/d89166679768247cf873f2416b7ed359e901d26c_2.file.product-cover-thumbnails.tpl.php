<?php
/* Smarty version 3.1.33, created on 2019-06-19 16:07:36
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0aa4182daac2_65618820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd89166679768247cf873f2416b7ed359e901d26c' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0aa4182daac2_65618820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="images-container">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15215172465d0aa4182bf719_10818187', 'product_images');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4232442895d0aa4182d1227_59990373', 'product_cover');
?>


  
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>

<?php echo '<script'; ?>
 type="text/javascript"> 
		$(document).ready(function() {
			var owl = $("#product .images-container .product-images");
			owl.owlCarousel({
				loop: true,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				autoPlay : false ,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				nav: true,
				dots : false,	
				responsive:{
					0:{
						items:1,
					},
					480:{
						items:1,
					},
					768:{
						items:1,
						nav:false,
					},
					992:{
						items:1,
					},
					1200:{
						items:1,
					}
				}
			}); 
			var owl = $(".quickview .images-container .product-images");
			owl.owlCarousel({
				loop: true,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				autoPlay : false ,
				smartSpeed: 1000,
				autoplayHoverPause: true,
				nav: true,
				dots : false,	
				responsive:{
					0:{
						items:1,
					},
					480:{
						items:1,
					},
					768:{
						items:1,
						nav:false,
					},
					992:{
						items:1,
					},
					1200:{
						items:1,
					}
				}
			}); 
		});
<?php echo '</script'; ?>
><?php }
/* {block 'product_images'} */
class Block_15215172465d0aa4182bf719_10818187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_15215172465d0aa4182bf719_10818187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="js-qv-mask mask pos_content">
      <div class="product-images js-qv-product-images owl-carousel">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
         <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%3 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>
			<div class="thumb-container">
		  <?php }?>
            <img
              class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
              data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              width="100"
              itemprop="image"
            >
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null)%3 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
        </div>
		<?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_flags'} */
class Block_18180717705d0aa4182d45e2_32064821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<ul class="product-flag">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
			<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	  <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_4232442895d0aa4182d1227_59990373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_4232442895d0aa4182d1227_59990373',
  ),
  'product_flags' => 
  array (
    0 => 'Block_18180717705d0aa4182d45e2_32064821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">
      <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18180717705d0aa4182d45e2_32064821', 'product_flags', $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block 'product_cover'} */
}
