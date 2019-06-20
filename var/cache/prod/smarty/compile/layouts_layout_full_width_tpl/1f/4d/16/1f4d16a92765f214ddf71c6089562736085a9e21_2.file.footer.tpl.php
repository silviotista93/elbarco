<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:19
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aab347cf3_21903568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f4d16a92765f214ddf71c6089562736085a9e21' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/_partials/footer.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aab347cf3_21903568 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer-container">
	<div class="statictop">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockFooter1'),$_smarty_tpl ) );?>

	</div>
	<div class=" footer-middle">
		<div class="container">	
			  <div class="row">	
					<div class="col-sm-12 col-md-12 col-lg-3 col-xs-12 footer_block box1">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 box2">
						<div class="row">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-3 col-xs-12 footer_block box3">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

					</div>
			  </div>
		</div>
	</div>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockFooter2'),$_smarty_tpl ) );?>

</div>
<?php }
}
