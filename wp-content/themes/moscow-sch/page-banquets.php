<? get_header(); ?> <!--include header.php-->
<div class="container-fluid / bnq-wrapper">
	<div class="container">
		<?php
		//The query
		$args      = array( 'post_type' => 'structure_page', 'p' => '1698' );
		$the_query = new WP_Query ( $args );

		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post()
				?>
				<div class="row / banquets">
					<h1><?php the_title(); ?></h1>

					<!--					<p class="single-date">--><?php //the_date(); ?><!--</p>-->


					<p><?php the_content(); ?></p>

				</div>
				<?php
			endwhile;
		else:
			echo 'Test';
		endif;
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div>
</div>

<?php get_footer(); ?> <!--include footer.php -->