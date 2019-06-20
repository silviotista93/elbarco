<?php
/* Smarty version 3.1.33, created on 2019-06-19 15:51:51
  from '/opt/lampp/htdocs/elbarco/elbarcoad/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0aa067ece408_26442615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4db172d3fbe472243e00366a0b9f7597337f1b' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/elbarcoad/themes/new-theme/template/content.tpl',
      1 => 1560816034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0aa067ece408_26442615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
