<? get_header(); ?> <!--include header.php-->


<section class="news / container">
<!--	if have main posts start standard wp loop-->
	<?php if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<div class="row / news-item">

				<div class="news-img / col-md-5">
					<?php the_post_thumbnail( 'medium_large' ) ?>
				</div>

				<div class="text-block / col-md-7">
					<p class="news-date"><?php the_date(); ?></p>

					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>

					<p class="news-text"><?php the_content(); ?></p>

				</div>
			</div>
			<?php
		endwhile;
	else :
		echo '<p>sorry no results</p>';
	endif; ?>
</section>

<? get_footer(); ?> <!--include footer.php-->