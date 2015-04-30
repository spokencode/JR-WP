<?php get_header(); ?>
<div class="container">
	<div id="x-button">
		<span class="glyphicon glyphicon-remove"></span>
	</div>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							
							
							
							
							
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							
      <?php
// Must be inside a loop.

if ( has_post_thumbnail() ) { ?>

	<div id="featured-image"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full' ); ?></a></div>
    
    <?php
}
?>                      
     
	

                            
                            
                            
                           
							<?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
						</section> <!-- end article section -->
						
						<footer>
			<!--<p class="meta"><span class="glyphicon glyphicon-calendar"></span> <time datetime="<?php // echo the_time('Y-m-j'); ?>" pubdate><?php // the_time(); ?></time> </p>-->
							<div class="tags"><?php the_tags('<span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp; ', ' ', ''); ?></div>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
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
			
				</div> <!-- end #main -->
    
				<?php // get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
</div>
<?php get_footer(); ?>