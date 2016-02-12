<?php
/**
 * The template for displaying Archive pages.
 * @package Photoline Lite
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>

<header class="page-header">
	<?php photoline_breadcrumb(); ?>				
</header><!-- .page-header -->

<div id="category-single" class="<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>no-sidebar <?php } ?>page-header">

<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							_e( 'Tag: ', 'photoline' );
							single_tag_title();

						elseif ( is_author() ) :
							the_post();
							printf( __( 'Author: %s', 'photoline' ), '<span class="vcard">' . get_the_author() . '</span>' );
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'photoline' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'photoline' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'photoline' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'photoline' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'photoline');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'photoline' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'photoline' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'photoline' );

						else :
							_e( 'Archives', 'photoline' );

						endif;
					?>
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
			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

	</div><!-- .grid -->
		</main><!-- #main -->

<?php
	photoline_content_nav( 'nav-below' );
?>

	</div><!-- #primary -->

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { get_sidebar(); } ?>
<?php get_footer(); ?>
