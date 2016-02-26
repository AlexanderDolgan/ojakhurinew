<? get_header(); ?> <!--include header.php-->

<div class="container">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post()
	?>
	<div class="row / single-news">
		<h1><?php the_title(); ?></h1>

		<p class="single-date"><?php the_date(); ?></p>

		<div class="single-img">
			<?php the_post_thumbnail( 'large' ) ?>
		</div>

		<p><?php the_content(); ?></p>

	</div>
	<?php
		endwhile;
	else:
		echo 'sorry but we can\'t find any post\'s';
	endif;
	?>
</div>


<?php get_footer(); ?> <!--include footer.php -->