<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>

<header class="main-header main-header-theme animatedParent" data-sequence='500'>
	<div class="header-content">
		<h1 class="animated fadeIn" data-id="1"><?php echo get_cat_name(10);?></h1>
		<hr>
		<h3 class="animated fadeIn" data-id="2"><?php echo category_description( 10 );?></h3>
	</div>
</header>
<div>

<div class="container-fluid news-container">
	<div class="row news-row">
		<?php if (have_posts()) : query_posts('cat=10');
			
			while (have_posts()) : the_post(); ?>

			<?php the_post_thumbnail(array(500, 500)); ?>
			
			<h1 class="news-h1"><?php the_title(); ?></h1>

			
			<p class="news-p"><?php the_content(); ?></p>
				<span class="news-date"><?php the_date(); ?></span>
			<hr class="news-hr">
		<? endwhile; endif; wp_reset_query(); ?>
	</div>
</div>

<? get_footer(); ?> <!-- include footer.php-->

<?php get_template_part('social-links'); ?>
