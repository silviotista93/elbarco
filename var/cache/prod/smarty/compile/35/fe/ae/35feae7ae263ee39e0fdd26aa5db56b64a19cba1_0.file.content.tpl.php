<?php
/* Smarty version 3.1.33, created on 2019-06-19 15:43:48
  from '/opt/lampp/htdocs/elbarco/elbarcoad/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a9e84632166_10852071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35feae7ae263ee39e0fdd26aa5db56b64a19cba1' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/elbarcoad/themes/default/template/content.tpl',
      1 => 1560816034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a9e84632166_10852071 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
