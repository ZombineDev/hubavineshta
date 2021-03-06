<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<!--[if IE 8]>
			<meta http-equiv="X-UA-Compatible" content="IE=8" >
		<![endif]-->
		
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
		<link href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" rel="shortcut icon"  />
	<?wp_head();?>
	<script type="text/javascript">

  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-33103535-1']);
 		 _gaq.push(['_trackPageview']);

  		(function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();

    </script>
	</head>
	<body>
		<script type="text/javascript">
		$(document).ready(function(){						
			//Rounded Corners
			$("#partners_button").corner('bottom 10px;');
			$(".rounded10bl").corner('bl 10px;');
			$("#menu-main_nav>li").mouseover(function(){$(this).toggleClass('sHover')});
			$("#menu-main_nav>li").mouseout(function(event){
							$(this).removeClass('sHover');
					});
			//$('ul #menu-main_nav').removeClass('menu');
			function tree_walk(root)
			{ 
				root.children().each(function(){
					var lis=$(this).find('li');
					if(lis.length>0)
					{ 	var el=$("<img>");
						el.bind('click',fold_toggle);
						el.attr('src',"<?php bloginfo('template_directory'); ?>/images/sidebar_arrow_down.png");
						$(this).prepend(el);
					}
				});
			}
			function fold_toggle(event)
			{	
				var el=$(event.currentTarget);
				var parent_el=el.parent();
				if(parent_el.hasClass('folded'))
				{ 
					parent_el.find(">ul>li").show();
					el.attr('src',"<?php bloginfo('template_directory'); ?>/images/sidebar_arrow_down.png");
				}
				else
				{ 
					parent_el.find("ul>li").hide();
					el.attr('src',"<?php bloginfo('template_directory'); ?>/images/sidebar_arrow.png");
				}
				parent_el.toggleClass('folded');
				
			}
			
			$("#categories-2>ul>li").each(function(){
				if(!(($(this).hasClass('cat-item-6'))||($(this).hasClass('cat-item-13'))))
					$(this).remove();
			});
			tree_walk($("#categories-2 ul"));
			$("#categories-2 ul>li>ul>li>img").trigger('click');			
			var current_cat=<?=json_encode(get_query_var('cat'))?>;
			if(parseInt(current_cat)==current_cat)
			{ 
				var curr_cat=$(".cat-item-"+current_cat);
				if(curr_cat.find('>img'))
					if(curr_cat.hasClass('folded'))
					{
						curr_cat.find('>a').toggleClass('active');
						curr_cat.find('>img').trigger('click');
											
					}				
				else
				{
					var pp_curr_cat=curr_cat.parent().parent();
					if(pp_curr_cat.hasClass('folded'))
					{
						curr_cat.find('>a').toggleClass('active');
						pp_curr_cat.find('>img').trigger('click');
					}				
				}
			}
			//$('.menu-main_nav-container').hover(function(event){
			//	$(this).style('background: url(../images/nav_tab_highlight.png) repeat-x');
			//	});
		});	
		</script>
		
		<?php generate_debug_bar(); ?>
			<div id='headers-wrapper'>
				<div id='headers-content'>
				<div id="header">
					<div id="imgside"></div>
					<div id="partners" >
						<div id="partners_wrapper">
							<ul id="partners_cotnainer" class="rounded10bl">
								<li>
									<a href="http://www.planmeca.com/" target="_blank">
										<img class="rounded_pic" src="<?php bloginfo('template_directory'); ?>/images/logos/planmeca.jpg" alt="Logo of planmeca" />
									</a>
								</li>
								<li>
									<a href="http://www.owandy.com/" target="_blank">
										<img class="rounded_pic" src="<?php bloginfo('template_directory'); ?>/images/logos/qwandy.jpg" alt="Logo of qwandy" />
									</a>
								</li>
								<li>
									<a href="http://www.fonadental.com/" target="_blank">
										<img class="rounded_pic" src="<?php bloginfo('template_directory'); ?>/images/logos/fona.jpg" alt="Logo of fona" />
									</a>
								</li>
								<li>
									<a href="http://www.duerrdental.de/en/" target="_blank">
										<img class="rounded_pic" src="<?php bloginfo('template_directory'); ?>/images/logos/durr_dental.jpg" alt="Logo of durr dental" />
									</a>
								</li>	
								<li>
									<a href="http://www.catmedical.com/" target="_blank">
										<img class="rounded_pic" src="<?php bloginfo('template_directory'); ?>/images/logos/cat.jpg" alt="Logo of cat medical equipment" />
									</a>
								</li>
								
								<li>
									<a href="http://www.fujifilm.eu/" target="_blank">
										<img class="rounded_pic" src="<?php bloginfo('template_directory'); ?>/images/logos/fujifilm.jpg" alt="Logo of fujifilm" />
									</a>
								</li>
								<li>
									<a href="http://www.kaeser.com/" target="_blank">
										<img class="rounded_pic" src="<?php bloginfo('template_directory'); ?>/images/logos/kaeser_logo.jpg" alt="Logo of kaeser dental" />
									</a>
								</li>
							</ul>
							<div id="partners_button"><span><?php echo __('[:en]Partners[:bg]Партньори', 'demakom' ); ?></span>
							</div>
						</div>
					</div>
					<a href="/" class="logo"></a>
				</div>
				
				
					<div id="div_nav">
					
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ,'sort_column' => 'menu_order','menu'=>'main_nav') ); ?>
					
					</div>
					<script type="text/javascript">
						fix_sizes();
					</script>
				
				
			</div>	
			</div>
		<div id="bottom-images">
			<div id="main-wrapper">
				
			
				<div id="main-content">
					<?php get_sidebar(); ?>
				
		
