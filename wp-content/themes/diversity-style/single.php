<?php
get_header(); ?>
	<div class="container-fluid">
	<div class="index-posts">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
	<div class="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				
<?php if ( comments_open() ) : ?><div class="comm-ind"><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a>
	</div>
<?php endif; ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'diversity' ); ?> <?php the_title_attribute(); ?>"><?php if (trim(get_the_title()) != '') { the_title(); } else  _e('No title', 'diversity'); ?></a></h2>
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
	<div class="single-post-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('diversity_thumb-feature', array('alt' => '', 'title' => '')) ?></a>
	</div>
	<div class="clear"></div>
	<div class="entry">	
		<?php the_content(); ?>
	</div>
	<div class="meta">
<?php
				$tag_list = get_the_tag_list( '', __( ', ', 'diversity' ) );
	if ( $tag_list ) {?>
		<span class="fa fa-tags"></span> <?php echo '<span class="tags-links">' . $tag_list . '</span>';
	}?>
	</div><!--meta-->
	<div class="clearboth"> </div>
	</div>			
	<div class="full-post-pages">
<?php wp_link_pages(); ?>
	</div> 	     
	<div class="clearboth"> </div>	
	<div class="post-nav">
		<div class="post-nav-l"><?php previous_post_link(__('&larr; %link', '<span class="meta-nav">' . '</span> %title', 'diversity')); ?></div>
		<div class="post-nav-r"><?php next_post_link( __('%link &rarr;', '%title <span class="meta-nav">' . '</span>' , 'diversity')); ?></div>
	</div>
	<div class="clear"></div>
<?php comments_template( '', true ); ?>
<?php endwhile; else: ?>	
	<div class="no-posts">
<?php _e( 'Sorry, no posts matched your criteria.', 'diversity' );?> 
	</div>	
<?php endif; ?>	
	</div>
	<div class="span4">
	<div class="sb-right">
        <?php if ( is_active_sidebar( 'sidebar-posts' ) ) : ?>
	    <?php dynamic_sidebar( 'sidebar-posts' ); ?>
        <?php endif; ?>
    </div>
	</div>
	<div class="clear"> </div>
<?php get_footer(); ?>