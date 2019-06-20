<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:18
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aaaebf309_17822399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '913a63fc2cf51d2067e9eb72a476a05d4941a76f' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/layouts/layout-both-columns.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5d0a5aaaebf309_17822399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7945497315d0a5aaae8df24_37538379', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10318969445d0a5aaae95186_16707600', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130356735d0a5aaae97259_73919682', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8095709125d0a5aaae98682_32349035', 'header');
?>

      </header>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
		<div class=" pos_bannerslide">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

		</div>
	<?php }?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5552515855d0a5aaae9de74_29345734', 'notifications');
?>


      <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
		<div class="container">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockPosition1'),$_smarty_tpl ) );?>

		</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockPosition2'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockPosition3'),$_smarty_tpl ) );?>

		
		<?php }?>
        <div class="container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4144683425d0a5aaaea43f0_00363254', 'breadcrumb');
?>

		    <div class="row">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3896749315d0a5aaaea5990_81411742', "left_column");
?>


			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5948276355d0a5aaaea9323_62761960', "content_wrapper");
?>


			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17911469695d0a5aaaeacac6_38441456', "right_column");
?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
				 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12366650025d0a5aaaeb0089_31523558', 'product_accessories');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2045221165d0a5aaaeb89a0_70579379', 'product_footer');
?>

			<?php }?>
		</div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBrandSlider'),$_smarty_tpl ) );?>

		
      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8685806465d0a5aaaebb292_20298227', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17320728845d0a5aaaebc896_93819335', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21410602375d0a5aaaebe1b8_02198333', 'hook_before_body_closing_tag');
?>

	<div class="back-top"><a href= "#" class="back-top-button"></a></div>
  </body>

</html>
<?php }
/* {block 'head'} */
class Block_7945497315d0a5aaae8df24_37538379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_7945497315d0a5aaae8df24_37538379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_10318969445d0a5aaae95186_16707600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_10318969445d0a5aaae95186_16707600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_130356735d0a5aaae97259_73919682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_130356735d0a5aaae97259_73919682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_8095709125d0a5aaae98682_32349035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_8095709125d0a5aaae98682_32349035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_5552515855d0a5aaae9de74_29345734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_5552515855d0a5aaae9de74_29345734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_4144683425d0a5aaaea43f0_00363254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_4144683425d0a5aaaea43f0_00363254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_3896749315d0a5aaaea5990_81411742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_3896749315d0a5aaaea5990_81411742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
				  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

				  <?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

				  <?php }?>
				</div>
			  <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_7194245695d0a5aaaeaa847_77941522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<p>Hello world! This is HTML5 Boilerplate.</p>
				  <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_5948276355d0a5aaaea9323_62761960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_5948276355d0a5aaaea9323_62761960',
  ),
  'content' => 
  array (
    0 => 'Block_7194245695d0a5aaaeaa847_77941522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7194245695d0a5aaaeaa847_77941522', "content", $this->tplIndex);
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

				</div>
			  <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_17911469695d0a5aaaeacac6_38441456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_17911469695d0a5aaaeacac6_38441456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
				  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

				  <?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

				  <?php }?>
				</div>
			  <?php
}
}
/* {/block "right_column"} */
/* {block 'product_miniature'} */
class Block_16765812265d0a5aaaeb6362_11934453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div class="item-product">
												<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
											</div>
										<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_12366650025d0a5aaaeb0089_31523558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_accessories' => 
  array (
    0 => 'Block_12366650025d0a5aaaeb0089_31523558',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_16765812265d0a5aaaeb6362_11934453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
					<div class="product-accessories clearfix">
						<div class="container">
							<div class="pos_title">
								<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'related products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
							</div>
							<div class="row pos_content">
								<div class="product_accessoriesslide owl-carousel">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16765812265d0a5aaaeb6362_11934453', 'product_miniature', $this->tplIndex);
?>

									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
					</div>
				  <?php }?>
				<?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_2045221165d0a5aaaeb89a0_70579379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_footer' => 
  array (
    0 => 'Block_2045221165d0a5aaaeb89a0_70579379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'product_footer'} */
/* {block "footer"} */
class Block_8685806465d0a5aaaebb292_20298227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8685806465d0a5aaaebb292_20298227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_17320728845d0a5aaaebc896_93819335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_17320728845d0a5aaaebc896_93819335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_21410602375d0a5aaaebe1b8_02198333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_21410602375d0a5aaaebe1b8_02198333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
