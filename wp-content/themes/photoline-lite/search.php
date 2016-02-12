<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Photoline Lite
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'photoline' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

<?php
        photoline_content_nav( 'nav-below' );
?>

		<?php else : ?>

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Nothing Found', 'photoline' ); ?></h1>
			</header><!-- .page-header -->

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>