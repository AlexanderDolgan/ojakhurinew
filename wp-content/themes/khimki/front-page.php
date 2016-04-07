<? get_header(); ?> <!--include header.php-->
<!--hero image and restaurant about-->
<section class="hero container-fluid">
	<!--hero background image-->
	<div class="hero-img row">

		<!--Start Query for page index.php / custom_pages -> Главная-->
		<?php

		// The Query
		$args      = array( 'post_type' => 'structure_page', 'p' => 1822 );
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {

			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				?>

				<div class="slideshow">

					<div class="fadein">
						<img src="<?php echo get_post_meta( $post->ID, 'gal1', true ) ?>"
						     alt="interior1">
						<img src="<?php echo get_post_meta( $post->ID, 'gal2', true ) ?>"
						     alt="interior1">
						<img src="<?php echo get_post_meta( $post->ID, 'gal3', true ) ?>"
						     alt="interior1">
						<img src="<?php echo get_post_meta( $post->ID, 'gal4', true ) ?>"
						     alt="interior1">
						<img src="<?php echo get_post_meta( $post->ID, 'gal3', true ) ?>"
						     alt="interior1">
					</div>
				</div>
				<!--End Query for page index.php / custom_pages -> Главная-->
				<?php
			}

		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div>

	<div class="container / about">
		<div class="row">

			<!--Start Query for page index.php / custom_pages -> Главная-->
			<?php

			// The Query
			$args      = array( 'post_type' => 'structure_page', 'p' => 1624 );
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {

			while ( $the_query->have_posts() ) {
			$the_query->the_post();


			echo '<h1 class="about-h1">' . get_post_meta( $post->ID, 'header1', true ) . '</h1>'; ?>

			<div class="about-text">
				<!--about text-->
				<p><?php echo get_post_meta( $post->ID, 'text_area1', true ) ?></p>
			</div>
		</div>
	</div>

</section>

	<section class="site-carousel">
		<div class="container-fluid">
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
						<li data-target="#carousel-example-generic" data-slide-to="7"></li>
						<li data-target="#carousel-example-generic" data-slide-to="8"></li>

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
						<div class="item">
							<img src="<?php echo get_post_meta( $post->ID, 'gal7', true ) ?>"
							     alt="interior6">
						</div>
						<div class="item">
							<img src="<?php echo get_post_meta( $post->ID, 'gal8', true ) ?>"
							     alt="interior6">
						</div>
						<div class="item">
							<img src="<?php echo get_post_meta( $post->ID, 'gal9', true ) ?>"
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

<!--advantages - delivery cookery banquet-->
	<section class="advantages-wrapper container-fluid">
		<div class="container">
			<div class="row">
				<div class="advant-item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/svg/hink.svg" alt="бесплатная доставка">

					<h2><?php echo get_post_meta( $post->ID, 'header2', true ) ?></h2>

					<p><?php echo get_post_meta( $post->ID, 'text_area2', true ) ?></p>
					<a href="<?php echo bloginfo( 'url' ) . '/mainmenu' ?>" class="btn">Меню</a>
				</div>
				<div class="advant-item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/svg/hach.svg" alt="фирменная кулинария">

					<h2><?php echo get_post_meta( $post->ID, 'header3', true ) ?></h2>

					<p><?php echo get_post_meta( $post->ID, 'text_area3', true ) ?></p>
					<!--                    <a href="#" class="btn">Контакты</a>-->
				</div>
				<div class="advant-item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/svg/cake.svg" alt="банкеты и застолья">

					<h2><?php echo get_post_meta( $post->ID, 'header4', true ) ?></h2>

					<p><?php echo get_post_meta( $post->ID, 'text_area4', true ) ?></p>
					<a href="<?php echo bloginfo( 'url' ) . '/banquet' ?>" class="btn">Подробнее</a>
				</div>
			</div>
		</div>
	</section>
<!--End Query for page index.php / custom_pages -> Главная-->
<?php
}

} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>


<!--gallery section-->

<section class="gallery-wrapper container-fluid">
	<div class="container gallery">
		<div class="row">
			<h1>НОВОСТИ</h1>
			<!--            start news query $post_per_page = 2 parameter-->
			<?php
			$news_posts = new WP_Query( 'posts_per_page=2' );
			if ( $news_posts->have_posts() ) :
				while ( $news_posts->have_posts() ) : $news_posts->the_post();
					?>

					<div class="left col-md-6">
						<div class="gal-item">

							<?php the_post_thumbnail( 'medium_large' ); ?>

							<a href="<?php the_permalink() ?>">
								<h3><?php the_title(); ?></h3>
							</a>
						</div>
					</div>
				<?php endwhile; endif;
			wp_reset_query();
			?>
		</div>
	</div>
</section>

</main>


<? get_footer(); ?> <!--include footer.php-->