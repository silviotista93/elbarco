<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:19
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aab21d268_21923346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1560817615,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a5aab21d268_21923346 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ft_newsletter">
<div class="container">
    <div id="block-newsletter-label">
		
		<div class="title-newsletter">
			<h2 class="text1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
			<h2 class="text2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'10%','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
			<h2 class="text3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
			<?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
				<p class="desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php }?>
		</div>
	</div>
    
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <div class="col-xs-12">
            <input
              class="btn btn-primary float-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <input
              class="btn btn-primary float-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                aria-labelledby="block-newsletter-label"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">      
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
          </div>
        </div>
      </form>
 
</div>
</div>

<?php }
}
