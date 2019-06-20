<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:18
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aaaf0e560_67057550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d23f9540d0d1ad8dc1feca9f8651e4440a3ad79' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/_partials/header.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aaaf0e560_67057550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17822121675d0a5aaaf07f70_06293999', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5231126335d0a5aaaf09235_99726259', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18947969705d0a5aaaf0a917_53939859', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_17822121675d0a5aaaf07f70_06293999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_17822121675d0a5aaaf07f70_06293999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_5231126335d0a5aaaf09235_99726259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_5231126335d0a5aaaf09235_99726259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

		<div class="setting_top dropdown js-dropdown">
			<i class="fa fa-user-circle-o"></i><span class="icon ion-android-settings" data-toggle="dropdown">Login</span>
			 <div class="content-setting dropdown-menu">
			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

			</div>
		</div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_18947969705d0a5aaaf0a917_53939859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_18947969705d0a5aaaf0a917_53939859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
       <div class="row">
		<div class="header_logo col-left col col-lg-2 col-md-12 col-xs-12">
		  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
			<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
		  </a>
		</div>
		<div class="col-center col col-xs-12 col-lg-8 col-md-12 display_top">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaymegamenu'),$_smarty_tpl ) );?>

		</div>
		<div class="col-right col col-xs-12 col-lg-2 col-md-12 display_top">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
	
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
	
		</div>
      </div>
  </div>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
