<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:19
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/customize/button-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aab1e3964_76217131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd220ae4f265ce28f5747d4865c99a36cfe4a3d7' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/customize/button-cart.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aab1e3964_76217131 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {
if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
<div class="product-add-to-cart">	
 <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
   <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
   <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
   <input type="hidden" name="qty" value="1">
   <button class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart" type="submit" <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>>
  		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

   </button>
 </form>
</div>
<?php }?> 
<?php } else { ?>
	<span class="ajax_add_to_cart_button disabled" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Out of stock ','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" ><i class="fa fa-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
<?php }
}
}
