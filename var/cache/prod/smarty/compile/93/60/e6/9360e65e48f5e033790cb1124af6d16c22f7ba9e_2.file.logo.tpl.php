<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:19
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/modules/poslogo/logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aab341581_90037218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9360e65e48f5e033790cb1124af6d16c22f7ba9e' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/modules/poslogo/logo.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aab341581_90037218 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pos_logo product_block_container">

	<div class="container">
		
		<div class="row pos_content">
			<div class="logo-slider owl-carousel">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logos']->value, 'logo', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%1 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>
						<div>
						<?php }?>
							<div class="item-banklogo">
								<a href ="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
									<img class="replace-2x img-responsive" src ="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logo','mod'=>'poslogo'),$_smarty_tpl ) );?>
" />
								</a>
							</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null)%1 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
						</div>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	</div>
</div>
<?php }
}
