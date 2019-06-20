<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:18
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aaae73733_10332910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d5671486ee28225ccc65c68309ba3cf42846fed' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/index.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aaae73733_10332910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21341922445d0a5aaae6e426_40506482', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17161155505d0a5aaae6ed03_31240968 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1081168785d0a5aaae6ff01_91684767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_20654324415d0a5aaae6f876_13730447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1081168785d0a5aaae6ff01_91684767', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21341922445d0a5aaae6e426_40506482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_21341922445d0a5aaae6e426_40506482',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17161155505d0a5aaae6ed03_31240968',
  ),
  'page_content' => 
  array (
    0 => 'Block_20654324415d0a5aaae6f876_13730447',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1081168785d0a5aaae6ff01_91684767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17161155505d0a5aaae6ed03_31240968', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20654324415d0a5aaae6f876_13730447', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
