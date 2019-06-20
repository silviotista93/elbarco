<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:18
  from '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aaae800e7_51751816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c21d609b01b85f15e788658eb62296b81aecb0f2' => 
    array (
      0 => '/opt/lampp/htdocs/elbarco/themes/theme_theface1/templates/page.tpl',
      1 => 1560817615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aaae800e7_51751816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11521466635d0a5aaae7a145_81530903', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15636780505d0a5aaae7b0e2_14326095 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13658617485d0a5aaae7a846_62384849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15636780505d0a5aaae7b0e2_14326095', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7189021575d0a5aaae7d4b8_14461390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4722985855d0a5aaae7dd96_34979052 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11675649445d0a5aaae7ce26_04366239 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7189021575d0a5aaae7d4b8_14461390', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4722985855d0a5aaae7dd96_34979052', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9246867925d0a5aaae7f166_09018833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8969442555d0a5aaae7eb27_60077433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9246867925d0a5aaae7f166_09018833', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11521466635d0a5aaae7a145_81530903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11521466635d0a5aaae7a145_81530903',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13658617485d0a5aaae7a846_62384849',
  ),
  'page_title' => 
  array (
    0 => 'Block_15636780505d0a5aaae7b0e2_14326095',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11675649445d0a5aaae7ce26_04366239',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7189021575d0a5aaae7d4b8_14461390',
  ),
  'page_content' => 
  array (
    0 => 'Block_4722985855d0a5aaae7dd96_34979052',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8969442555d0a5aaae7eb27_60077433',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9246867925d0a5aaae7f166_09018833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13658617485d0a5aaae7a846_62384849', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11675649445d0a5aaae7ce26_04366239', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8969442555d0a5aaae7eb27_60077433', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
