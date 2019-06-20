<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:58:11
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5b935a1b06_15111745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '240149e46daf5835a76dd43d88edc504671bf26d' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/products.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5d0a5b935a1b06_15111745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
   <div class="products row product_content grid">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20948898995d0a5b9359f1f9_97770311', 'product_miniature');
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20806536155d0a5b935a0843_26559475', 'pagination');
?>

</div>
<?php }
/* {block 'product_miniature'} */
class Block_20948898995d0a5b9359f1f9_97770311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_20948898995d0a5b9359f1f9_97770311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  	<div class="item-product col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
		</div>
      <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_20806536155d0a5b935a0843_26559475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_20806536155d0a5b935a0843_26559475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
}
