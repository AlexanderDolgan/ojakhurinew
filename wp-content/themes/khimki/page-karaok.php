<? get_header(); ?> <!--include header.php-->

<section class="container-fluid / wrapper-karaoke">
	<div class="container / karaoke">
		<!--Start Query for page index.php / custom_pages -> Контакты-->
		<?php
		$args      = array( 'post_type' => 'structure_page', 'p' => 1699 );
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) :
		$the_query->the_post(); ?>

		<!--Phone / Adress / mail / mode-->
		<div class="row / contacts-info">
			<div class="col1">
				<h1><?php the_title(); ?></h1>

				<p><span><?php echo get_post_meta( $post->ID, 'text_area1', true ); ?></p>

			</div>
		</div>
	</div>
</section>

	<section class="container / site-carousel">
		<div class="row">
			<div class="row">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>
						<li data-target="#carousel-example-generic" data-slide-to="6"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo get_post_meta( $post->ID, 'gal1', true ) ?>"
							     alt="interior1">
						</div>
						<div class="item">
							<img src="<?php echo get_post_meta( $post->ID, 'gal2', true ) ?>"
							     alt="interior2">
						</div>
						<div class="item">
							<img src="<?php echo get_post_meta( $post->ID, 'gal3', true ) ?>"
							     alt="interior3">
						</div>
						<div class="item">
							<img src="<?php echo get_post_meta( $post->ID, 'gal4', true ) ?>"
							     alt="interior4">
						</div>
						<div class="item">
							<img src="<?php echo get_post_meta( $post->ID, 'gal5', true ) ?>"
							     alt="interior5">
						</div>
						<div class="item">
							<img src="<?php echo get_post_meta( $post->ID, 'gal6', true ) ?>"
							     alt="interior6">
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; ?>

<!--End Query for page index.php / custom_pages -> Контакты-->
<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<? get_footer(); ?> <!--include footer.php-->