<?php
/**
 * Template Name: Page Mosaic Tiles
 *
 * @package Photoline Lite
 */

get_header(); ?>

<section id="home-hero">
<div class="entry-content" <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'photoline-medium' ); ?> style="background:<?php echo esc_attr( get_theme_mod( 'photoline_main_color', '#2d2d2d' ) ); ?><?php if  ( $thumbnail ) { ?> url(<?php echo $thumbnail[0]; ?>) no-repeat; background-position: 50%; background-size: 100%<?php } ?>;">

	<div class="hero">		
		<h1><?php the_title(); ?></h1>
		<?php the_excerpt(); ?>
	</div>

</div><!-- .entry-content -->
</section>

	<div id="primary" class="site-content">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page-mosaic' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
