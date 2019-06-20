<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:58:11
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5b9347ba57_86568899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e058768caf424921d5fd7e0366bcafc17f3237a' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/_partials/breadcrumb.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5b9347ba57_86568899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="breadcrumb_container">
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb-inner hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16741495075d0a5b93475de7_44402027', 'breadcrumb_item');
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ol>
</nav>
</div>
<?php }
/* {block 'breadcrumb_item'} */
class Block_16741495075d0a5b93475de7_44402027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb_item' => 
  array (
    0 => 'Block_16741495075d0a5b93475de7_44402027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
        </li>
      <?php
}
}
/* {/block 'breadcrumb_item'} */
}
