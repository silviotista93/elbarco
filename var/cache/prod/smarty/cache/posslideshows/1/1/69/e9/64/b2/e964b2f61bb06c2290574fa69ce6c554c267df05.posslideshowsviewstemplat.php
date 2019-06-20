<?php
/* Smarty version 3.1.33, created on 2019-06-19 10:54:19
  from 'module:posslideshowsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a5aab110391_33996888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b99bba41e0a582d22b4fe8c3f409f941620b8b0e' => 
    array (
      0 => 'module:posslideshowsviewstemplat',
      1 => 1560817615,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5d0a5aab110391_33996888 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="pos-slideshow">
		<div class="flexslider ma-nivoslider">
			<div class="pos-loading"></div>
			<div id="pos-slideshow-home" class="slides">
				
													<a href="http://www.posthemes.com" title="Sample 1" ><img style="display:none" src="http://localhost:5050/elbarco/modules/posslideshows/images/sample-1.jpg"  data-thumb="http://localhost:5050/elbarco/modules/posslideshows/images/sample-1.jpg"  alt="" title="#htmlcaption1"  /> </a>
			   					<a href="http://www.posthemes.com" title="Sample 2" ><img style="display:none" src="http://localhost:5050/elbarco/modules/posslideshows/images/sample-2.jpg"  data-thumb="http://localhost:5050/elbarco/modules/posslideshows/images/sample-2.jpg"  alt="" title="#htmlcaption2"  /> </a>
			   					<a href="#" title="" ><img style="display:none" src="http://localhost:5050/elbarco/modules/posslideshows/images/5fa0402230b0fa302a8b4b8ca32ae7751394d921_índice5.jpeg"  data-thumb="http://localhost:5050/elbarco/modules/posslideshows/images/5fa0402230b0fa302a8b4b8ca32ae7751394d921_índice5.jpeg"  alt="" title="#htmlcaption3"  /> </a>
			   			</div>
												<div id="htmlcaption1" class="pos-slideshow-caption nivo-html-caption nivo-caption">					
							<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:8;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
														<div class="banner7-des"><div class="container"><div class="info desc1">
<div class="container"></div>
</div></div> </div>
												</div>
				 					<div id="htmlcaption2" class="pos-slideshow-caption nivo-html-caption nivo-caption">					
							<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:8;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
														<div class="banner7-des"><div class="container"><div class="info desc2">
<div class="container">
<p class="title1">view our</p>
<p class="title2">Womens hair</p>
<p class="title3">Products now</p>
<p class="readmore"><a href="#"><span>Shop the collection</span></a></p>
</div>
</div></div> </div>
												</div>
				 					<div id="htmlcaption3" class="pos-slideshow-caption nivo-html-caption nivo-caption">					
							<div class="timethai" style=" 
								position:absolute;
								top:0;
								left:0;
								z-index:8;
								background-color: rgba(49, 56, 72, 0.298);
								height:5px;
								-webkit-animation: myfirst 5000ms ease-in-out;
								-moz-animation: myfirst 5000ms ease-in-out;
								-ms-animation: myfirst 5000ms ease-in-out;
								animation: myfirst 5000ms ease-in-out;
							
							">
							</div>
												</div>
				 			 		</div>
	</div>


 <script type="text/javascript">
 $(document).ready(function() {
	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	//Variables on page load 
	var $myCarousel = $('.ma-nivoslider'),
		$firstAnimatingElems = $myCarousel.find('.nivo-caption').find("[data-animation ^= 'animated']");
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);

});
</script><?php }
}
