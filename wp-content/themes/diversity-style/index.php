<?php 
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

		<div class="container-fluid">
		<div class="clearfix"></div>
		 	    <?php if ( get_theme_mod( 'diversity_slider_visibility' ) != 0 ) { ?>
				<?php if ( is_front_page() ) : ?>
				<?php get_template_part( 'slider' ); ?>
				<?php endif; ?>
				<?php } ?>
		<div class="index-posts">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				
<?php if ( comments_open() ) : ?>
		<div class="comm-ind"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a>
		</div>
<?php endif; ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php if (trim(get_the_title()) != '') { the_title(); } else  _e('No title', 'diversity'); ?></a></h2>
		<div class="entry-date">
			<span class="fa fa-calendar"></span> <?php the_time('j F Y'); ?> / 
		</div>
		<div class="entry-author">
			<span class="fa fa-user"></span> <?php the_author_link(); ?> / 
		</div>
		<div class="entry-cat">
			<span class="fa fa-bars"></span> <?php the_category(', '); ?> 
		</div>
		<div class="clear"></div>
		<div class="single-post-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('diversity_thumb-feature', array('alt' => '', 'title' => '')) ?></a>
		</div>
		<div class="clear"></div>
		<div class="single-post-text">						
		<div class="entry">
			<?php global $more; $more = 0; ?><?php the_excerpt(); ?>
		</div>
		<div class="continue-reading">
			<a href="<?php echo get_permalink(); ?>"><?php _e( 'Read More', 'diversity' ); ?></a> 
		</div>						
		<div class="meta">
<?php
		$tag_list = get_the_tag_list( '', __( ', ', 'diversity' ) );
	if ( $tag_list ) {?>
		<span class="fa fa-tags"></span> <?php echo '<span class="tags-links">' . $tag_list . '</span>';
	}?>								
		</div><!--meta-->
		</div><!-- single-post-text -->
		<div class="clearfix"></div>
		</div><!-- single-post -->
<?php endwhile; ?>
		<div class="clear"></div>
		<div class="posts-navigation">
		<div id="nav"><?php if (function_exists('diversity_wp_corenavi')) diversity_wp_corenavi(); ?>
		</div>
		<div class="clearfix"></div>
		</div>
<?php endif; ?>
		</div><!-- index-posts -->	
		<div class="span4">
		<div class="sb-right">
			<?php if ( is_active_sidebar( 'sidebar-posts' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-posts' ); ?>
			<?php endif; ?>
		</div>
		</div>
		<div class="clear"> </div>
<?php get_footer(); ?>
		</div>