<? get_header(); ?> <!--include header.php-->
<div class="container / contacts">

	<!--Start Query for page index.php / custom_pages -> Контакты-->
	<?php
	$args      = array( 'post_type' => 'structure_page', 'p' => 1182 );
	$the_query = new WP_Query( $args ); ?>

	<?php if ( $the_query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) :
	$the_query->the_post(); ?>
	<!--header-->
	<div class="row">
		<h1><?php the_title(); ?></h1>
	</div>


	<!--Phone / Adress / mail / mode-->
	<div class="row / contacts-info">
		<div class="col1 / col-md-6">
			<p><span><?php echo get_post_meta($post->ID, 'header1', true ); ?></span> <?php echo get_post_meta($post->ID, 'text_area1', true ); ?></p>

			<p><span><?php echo get_post_meta($post->ID, 'header2', true ); ?></span> <?php echo get_post_meta($post->ID, 'text_area2', true ); ?></p>
		</div>
		<div class="col2 / col-md-6">
			<p><span><?php echo get_post_meta($post->ID, 'header3', true ); ?></span><?php echo get_post_meta($post->ID, 'text_area3', true ); ?></p>

			<p><span><?php echo get_post_meta($post->ID, 'header4', true ); ?></span><?php echo get_post_meta($post->ID, 'text_area4', true ); ?></p>
		</div>

	</div>

	<!--yandex map-->
	<div class="row" id="map"></div>
	<script src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=npElsc60P2O7fwi-pnx1Ymil6_HT6sIy&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor" type="text/javascript" charset="utf-8"></script>

	<!-- Contact form 7 / feedback-->
	<div class="row">
		<h2><?php echo get_post_meta($post->ID, 'header5', true ); ?></h2>
		<?php echo do_shortcode(get_post_meta( $post->ID, 'text_area5', true )); ?>
	</div>

</div>

<?php endwhile; ?>

	<!--End Query for page index.php / custom_pages -> Контакты-->
<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<? get_footer(); ?> <!--include footer.php-->