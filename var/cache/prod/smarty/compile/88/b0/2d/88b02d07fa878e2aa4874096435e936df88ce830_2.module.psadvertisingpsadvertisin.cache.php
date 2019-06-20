<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:58:11
  from 'module:psadvertisingpsadvertisin' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5b9357d509_21702846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b02d07fa878e2aa4874096435e936df88ce830' => 
    array (
      0 => 'module:psadvertisingpsadvertisin',
      1 => 1560817615,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5b9357d509_21702846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2696205865d0a5b9357b631_28268851';
?>

<div class="advertising">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adv_title']->value, ENT_QUOTES, 'UTF-8');?>
"/></a>
</div>
<?php }
}
