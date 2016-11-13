<? get_header(); ?> <!--include header.php-->

<div class="container / single">

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post()
			?>
			<div class="row / single-news">
				<h4><a href="<?php echo bloginfo('url') . '/новости/' ?>">Вернуться в раздел новости</a></h4>
				<h1><?php the_title(); ?></h1>

				<!--		<p class="single-date">--><?php //the_date(); ?><!--</p>-->

				<div class="single-img">
					<?php the_post_thumbnail( 'full' ); ?>
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