<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:18
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aaaf36ea3_83400994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1560817615,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aaaf36ea3_83400994 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<ul class="user_info_top">
	<li>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="dropdown-item"><i class="fa fa-user"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
	</li>
	<li>
		<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink("cart",true),"html","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
?action=show" class="dropdown-item"><i class="fa fa-check-circle"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
	</li>
	<li>
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
	  <a class="logout dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="fa fa-key"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
	  <a
		class="account dropdown-item"
		href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
		title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
		rel="nofollow"
	  >
		<span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
	  </a>
	<?php } else { ?>
	  <a
		href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"
		title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
		rel="nofollow"
	  >
		<span class=""><i class="fa fa-key"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
	  </a>
	<?php }?>
	</li>
</ul>

<?php }
}
