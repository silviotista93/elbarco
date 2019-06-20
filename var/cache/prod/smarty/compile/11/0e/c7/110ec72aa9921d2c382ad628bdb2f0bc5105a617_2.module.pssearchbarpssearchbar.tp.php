<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:19
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aab0f4a79_56800187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1560817615,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aab0f4a79_56800187 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->
<div class="block-search  dropdown js-dropdown">
	<span class="search-icon" data-toggle="dropdown"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'ps_searchbar'),$_smarty_tpl ) );?>
</span>
	<div id="search_widget" class="search_top dropdown-menu" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
			<input type="hidden" name="controller" value="search">
			<input class="text_input" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
			<button type="submit">
				<span class="fa fa-search"></span>
			</button>
		</form>
	</div>
</div>

<!-- /Block search module TOP --><?php }
}
