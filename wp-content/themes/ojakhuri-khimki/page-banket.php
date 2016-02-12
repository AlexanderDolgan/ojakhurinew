<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>

<header class="main-header  main-header-contacts main-header-banket animatedParent">
	<div class="header-content">

		<h1 class="animated fadeIn">Банкеты</h1>
		<hr>
<!--		<h3></h3>-->
	</div>
</header>

<div class="container-fluid news-container ">
	<div class="row news-row">
		<?php if (have_posts()) : query_posts('p=1515');

			while (have_posts()) : the_post(); ?>

				<?php the_post_thumbnail(array(500, 500)); ?>

				<h1 class="news-h1"><?php the_title(); ?></h1>

				<pre class="news-p"><?php the_content(); ?></pre>

				<hr class="news-hr">
			<? endwhile; endif; wp_reset_query(); ?>
	</div>
</div>

<section class="gallery-section">
	<div class="container-fluid">
		<div class="row">
			<h3>БАНКЕТЫ</h3>
			<hr/>
			<div>
				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif; ?>
			</div>
		</div>
	</div>
	<style>
		#bwg_container1_0 #bwg_container2_0 .bwg_title_spun2_0, #bwg_container1_1 #bwg_container2_1 .bwg_title_spun2_1 {
			font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
			color: #FFF;
			font-size: 2rem;
			font-weight: 500;
		}

		#bwg_container1_0 #bwg_container2_0 .bwg_title_spun2_0, #bwg_container1_1 #bwg_container2_1 .bwg_title_spun2_1 {
			color: #FFF;
		}
	</style>

</section>

<? get_footer(); ?> <!-- include footer.php-->

<?php get_template_part( 'social-links' ); ?>
