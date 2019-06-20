<?php
/* Smarty version 3.1.33, created on 2019-06-19 17:50:23
  from '/opt/lampp/htdocs/elbarco/elbarcoad/themes/default/template/helpers/list/list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0abc2f48fde5_72627798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c22872e70abc0d0f181ca67c71cc9e28eeee8ee' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/elbarcoad/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1560816034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0abc2f48fde5_72627798 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="delete">
	<i class="icon-trash"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
