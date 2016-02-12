<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>
<!---->
<!--<header class="main-header main-header-gallery animatedParent">-->
<!--	<div class="header-content">-->
<!---->
<!--		<h1 class="animated fadeIn">--><?php //echo get_the_title( 1025 ); ?><!--</h1>-->
<!--		<hr>-->
<!--		<h3 class="animated bounceInUp">--><?php //show_the_content_by_id( 1025 ); ?><!--</h3>-->
<!--	</div>-->
<!---->
<!--</header>-->

<section class="gallery-section animatedParent">
	<div class="container-fluid">
		<div class="row">
			<h3>ИНТЕРЬЕР</h3>
			<hr/>
			<div class="animated bounceInUp">
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
			color: #474747
		}
	</style>
</section>

<? get_footer(); ?> <!-- include footer.php-->
<?php get_template_part( 'social-links' ) ?>
