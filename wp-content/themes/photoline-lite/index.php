<?php
/**
 * The main template file.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Photoline Lite
 */
get_header(); ?>




<?php if ( is_active_sidebar( 'blog-intro' ) ) { ?>
	<section id="blog-intro">
		<?php dynamic_sidebar( 'blog-intro' ); ?>
	</section>
<?php } ?>

<!-- END Blog Intro -->

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="grid2 clearfix">
<?php } ?>
<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div id="primary" class="content-area clearfix" style="float: none; width: 100%;">
		<main id="main" class="site-main" role="main">
			<div class="grid3 clearfix">
<?php } ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile;?>

<?php else : ?>
		<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif;  // have_posts() ?>

			</div><!--.grid -->
		</main><!-- #main -->

<div class="clearfix"></div>

<?php
        photoline_content_nav( 'nav-below' );
?>

	</div><!-- #primary -->
<?php if ( is_active_sidebar( 'sidebar-1' ) ) { get_sidebar(); } ?>
<?php get_footer(); ?>