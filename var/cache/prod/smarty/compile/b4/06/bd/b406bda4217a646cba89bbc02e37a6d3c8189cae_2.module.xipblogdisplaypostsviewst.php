<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:19
  from 'module:xipblogdisplaypostsviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aab31efc2_26262685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b406bda4217a646cba89bbc02e37a6d3c8189cae' => 
    array (
      0 => 'module:xipblogdisplaypostsviewst',
      1 => 1560817615,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:xipblogdisplayposts/views/templates/front/post-video.tpl' => 2,
    'module:xipblogdisplayposts/views/templates/front/post-audio.tpl' => 2,
    'module:xipblogdisplayposts/views/templates/front/post-gallery.tpl' => 2,
  ),
),false)) {
function content_5d0a5aab31efc2_26262685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/elbarco/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="home_blog_post_area <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_designlayout']->value, ENT_QUOTES, 'UTF-8');?>
 product_block_container">
	<div class="boxiner">
	<div class="container">
		<div class="home_blog_post">
			<div class="page_title_area pos_title">
				<span>
					
					<?php if (isset($_smarty_tpl->tpl_vars['xipbdp_subtext']->value)) {?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_subtext']->value, ENT_QUOTES, 'UTF-8');?>

					<?php }?>
				</span>
				<?php if (isset($_smarty_tpl->tpl_vars['xipbdp_title']->value)) {?>
					<a href="<?php echo htmlspecialchars(xipblog::XipBlogLink(), ENT_QUOTES, 'UTF-8');?>
" class="header_title"><h2>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_title']->value, ENT_QUOTES, 'UTF-8');?>

					
					</h2></a>
					
				<?php }?>
			</div>
			<div class="home_blog_post_inner pos_content">
			<?php if ((isset($_smarty_tpl->tpl_vars['xipblogposts']->value) && !empty($_smarty_tpl->tpl_vars['xipblogposts']->value))) {?>
				<div class="row pos_content">
				<div class="blog_slider owl-carousel">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xipblogposts']->value, 'xipblgpst');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xipblgpst']->value) {
?>
						<div class="item">
							<article class="blog_post">
								<div class="blog_post_content_top">
									<div class="post_thumbnail">
										<?php if ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'video') {?>
											<?php $_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['xipblgpst']->value['video']));?>
											<?php if (count($_smarty_tpl->tpl_vars['postvideos']->value) > 1) {?>
												<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'370','height'=>"256",'class'=>"carousel"), 0, true);
?>
											<?php } else { ?>
												<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'370','height'=>"316",'class'=>''), 0, true);
?>
											<?php }?>
										<?php } elseif ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'audio') {?>
											<?php $_smarty_tpl->_assignInScope('postaudio', explode(',',$_smarty_tpl->tpl_vars['xipblgpst']->value['audio']));?>
											<?php if (count($_smarty_tpl->tpl_vars['postaudio']->value) > 1) {?>
												<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'370','height'=>"316",'class'=>"carousel"), 0, true);
?>
											<?php } else { ?>
												<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'370','height'=>"316",'class'=>''), 0, true);
?>
											<?php }?>
										<?php } elseif ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'gallery') {?>
											<?php if (count($_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists']) > 1) {?>
												<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists'],'imagesize'=>"home_default",'class'=>"carousel"), 0, true);
?>
											<?php } else { ?>
												<?php $_smarty_tpl->_subTemplateRender("module:xipblogdisplayposts/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists'],'imagesize'=>"home_default",'class'=>''), 0, true);
?>
											<?php }?>
										<?php } else { ?>
											<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="img_content"><img class="xipblog_img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_img_home_default'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
"></a>
											<div class="blog_mask">
												<div class="blog_mask_content">
													<a class="thumbnail_lightbox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_img_large'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" >
														<i class="material-icons">add_circle_outline</i>
													</a>
												</div>
											</div>
										<?php }?>
									</div>
								</div>
								<div class="post_content">
									
									<div class="content-inner">	
										<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="post_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
										<div class="date-smart">
											<i class="fa-calendar fa" ></i><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['xipblgpst']->value['post_date']), ENT_QUOTES, 'UTF-8');?>

										</div>							
										<p class="post_description">
											<?php if (isset($_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt']) && !empty($_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'])) {?>
												<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'],150,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

											<?php } else { ?>
												<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xipblgpst']->value['post_content'],150,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

											<?php }?>
										</p>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="read-more"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'xipblogdisplayposts'),$_smarty_tpl ) );?>
</a>
									</div>
									
								</div>
							</article>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				</div>
			<?php } else { ?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Blog Post Found','mod'=>'xipblogdisplayposts'),$_smarty_tpl ) );?>
</p>
			<?php }?>
			</div>
		</div>
	</div>
	</div>
</div><?php }
}
