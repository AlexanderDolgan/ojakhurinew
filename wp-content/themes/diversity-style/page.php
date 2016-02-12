<?php get_header(); ?>
		 <div class="container-fluid">
		 		<div class="clearfix"></div>
				<?php if ( get_theme_mod( 'diversity_slider_visibility' ) != 0 ) { ?>
				<?php if ( is_front_page() ) : ?>
				<?php get_template_part( 'slider' ); ?>
				<?php endif; ?>
				<?php } ?>						
    	<div class="row-fluid">
        <div class="span8">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2>
				<?php the_title(); ?>
			</h2>		
		<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'diversity' ), 'after' => '</div>' ) ); ?>
		</div>
		<div class="clear"></div>
		    <?php if ( !is_front_page() ) : ?>
			<?php comments_template( '', true ); ?>
	<?php else:?> 
	<?php endif; ?>
	<?php endwhile; else: ?>
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	<?php endif; ?>
        </div>		
		<div class="span4">
		<div class="sb-right">
			<?php if ( is_active_sidebar( 'sidebar-page' ) ) : ?>
	        <?php dynamic_sidebar( 'sidebar-page' ); ?>
			<?php endif; ?>
		</div>
		</div>	
		</div>

<?php get_footer(); ?>