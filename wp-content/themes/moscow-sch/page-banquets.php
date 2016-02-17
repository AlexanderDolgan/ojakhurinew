<? get_header(); ?> <!--include header.php-->
<div class="container / contacts">

	<!--Start Query for page index.php / custom_pages -> Контакты-->
	<?php
	$args      = array( 'post_type' => 'structure_page', 'p' => 1698 );
	$the_query = new WP_Query( $args ); ?>

	<?php if ( $the_query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) :
	$the_query->the_post(); ?>

	<!--Phone / Adress / mail / mode-->
	<div class="row / contacts-info">
		<div class="col1">
			<h1><?php the_title(); ?></h1>

			<p><span><?php echo get_post_meta($post->ID, 'text_area1', true ); ?></p>

		</div>

	</div>

</div>

<?php endwhile; ?>

<!--End Query for page index.php / custom_pages -> Контакты-->
<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<? get_footer(); ?> <!--include footer.php-->