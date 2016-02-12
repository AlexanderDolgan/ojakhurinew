<?php get_header(); ?>
	 <div class="container-fluid">
	     	<div class="index-posts">
			<div class="search-results"><h2><?php _e( 'Not Found', 'diversity'); ?></h2></div>
		</div>
<div class="span4">
<div class="sb-right">
        <?php if ( is_active_sidebar( 'sidebar-posts' ) ) : ?>
	        <?php dynamic_sidebar( 'sidebar-posts' ); ?>
        <?php endif; ?>
    </div>
</div>
<!-- end container -->
	<div class="clear"> </div>
<?php get_footer(); ?>
