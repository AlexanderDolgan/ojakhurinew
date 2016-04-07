<?php
/*
Template Name: Menu Pages
 */
?>

<? get_header(); ?> <!--include header.php-->

<section class="container / main-menu-bg">
	<div class="row / sub-menu">
		<ul>
			<?php
			$tests = array(
				'child_of' => get_top_ancestor_id(),
				'title_li' => ''
			);
			?>
			<?php wp_list_pages( $tests ); ?>
		</ul>
	</div>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post()
			?>
			<div class="row">
				<!--				<h1>--><?php //the_title(); ?><!--</h1>-->
				<!---->
				<!--				<p class="single-date">--><?php //the_date(); ?><!--</p>-->

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

</section>



<?php get_footer(); ?> <!--include footer.php -->