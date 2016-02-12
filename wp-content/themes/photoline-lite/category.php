<?php
/**
 * The template for displaying Category default template.
 * @package Photoline Lite
 */

get_header(); ?>

<header class="page-header">
	<?php photoline_breadcrumb(); ?>
</header><!-- .page-header -->

<div id="category-single" class="<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>no-sidebar <?php } ?>page-header">
				<h1 class="page-title">
					<?php single_cat_title(); ?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
</div>


<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<div class="grid2 clearfix">
<?php } ?>
<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div id="primary" class="content-area" style="float: none; width: 100%;">
		<main id="main" class="site-main" role="main">
	<div class="grid3 clearfix">
<?php } ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

<?php else : ?>
		<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif;  // have_posts() ?>

	</div><!-- grid -->
		</main><!-- #main -->

<?php
        photoline_content_nav( 'nav-below' );
?>

	</div><!-- #primary -->


<?php if ( is_active_sidebar( 'sidebar-1' ) ) { get_sidebar(); } ?>
<?php get_footer(); ?>
