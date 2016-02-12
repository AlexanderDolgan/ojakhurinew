<?php 
/**
 * Template Name: Full-width Page Template, No Sidebar
*/

get_header(); ?>

<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

     <div class="container-fluid">
	 		<div class="clearfix"></div>
		 	    <?php if ( get_theme_mod( 'diversity_slider_visibility' ) != 0 ) { ?>
	    <?php if ( is_front_page() ) : ?>
		    <?php get_template_part( 'slider' ); ?>
	    <?php endif; ?>
	<?php } ?>
 
    	<div class="row-fluid">
        	<div class="span12">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Begin the first div -->	
		    <?php if ( is_front_page() ) : ?>		
			<h2>
				<?php the_title(); ?>
			</h2>
			<?php else:?> 
			<h2 style="padding-top: 20px; border-bottom: 5px solid #f5f5f0;">
				<?php the_title(); ?>
			</h2>
			<?php endif; ?>
			<!-- Display the Page's Content in a div box. -->
			<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'diversity' ), 'after' => '</div>' ) ); ?>
			</div>
			<div class="clear"></div>
		    <?php if ( !is_front_page() ) : ?>
		<!-- Closes the first div -->
	<?php comments_template( '', true ); ?>
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php else:?> 
		<?php endif; ?>
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error"><?php _e( 'Sorry, the page you requested was not found', 'diversity' ); ?></div>
	
	<!--End the loop -->
	<?php endif; ?>

      </div>    	
       
    </div>
	<!-- end row -->
  
<!-- end container -->


<?php get_footer(); ?>