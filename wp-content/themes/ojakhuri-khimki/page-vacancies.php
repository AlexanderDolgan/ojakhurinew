<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>

<header class="main-header main-header-vacancies animatedParent">
	<div class="header-content">

		<h1 class="animated fadeIn"><?php echo get_the_title(890); ?></h1>
		<hr>
		<h3 class="animated bounceInUp"><?php show_the_content_by_id(890); ?></h3>
	</div>

</header>

<!-----------вакансии------------>

<section class="vacancies animatedParent">
	<div class="container vacancies-block">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 text-center bg-content animated swing">
				<i class="fa fa-4x fa-users wow bounceIn text-primary"></i>

				<?php if ( have_posts() ) : query_posts('cat=9');
				while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>
				<hr>
				<p><?php the_content(); ?></p>

				<? endwhile; endif; wp_reset_query(); ?>

			</div>
		</div>
	</div>
</section>

<? get_footer(); ?> <!-- include footer.php-->

<?php get_template_part('social-links')?>

