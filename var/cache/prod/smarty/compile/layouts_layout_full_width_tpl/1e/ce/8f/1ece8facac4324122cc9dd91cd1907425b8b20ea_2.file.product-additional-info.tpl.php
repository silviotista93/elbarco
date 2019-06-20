<?php
/* Smarty version 3.1.33, created on 2019-06-19 16:07:36
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0aa41865c354_53060196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ece8facac4324122cc9dd91cd1907425b8b20ea' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0aa41865c354_53060196 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
