<?php
/*
Template Name: Full Home Slider
*/
?>

<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
				
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
				
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="http://www.jasonrenai.com/public/wp-content/uploads/2014/01/JasonRenaiSig.png" /></a>
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

						
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
			
			

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div id="full-slider">
							<?php the_content(); ?>					
					</div>
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
    
    

<div id="grey-footer" >
        <div class="container">
                    <footer role="contentinfo">
                    
                        <div id="inner-footer" class="clearfix">
                          <div id="widget-footer" class="clearfix row">
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
                            <?php endif; ?>
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
                            <?php endif; ?>
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
                            <?php endif; ?>
                          </div>
                            
                            <nav class="clearfix">
                                <?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
                            </nav>
                            
        </div>
        </div>                    
               <div id="black-footer" >
        <div class="container">     
                            <p class="attribution">&copy; <?php bloginfo('name'); ?></p>
                        
                        </div> <!-- end #inner-footer -->
                        
                    </footer> <!-- end footer -->
                    </div>
            </div>	
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>