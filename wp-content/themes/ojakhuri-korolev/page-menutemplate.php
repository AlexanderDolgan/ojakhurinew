<?php
/*
Template Name: Menu Pages
 */

get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>

<header class="main-header-theme main-header ">
	<div class="header-content">
		<h1><?php echo get_the_title(895); ?></h1>
		<hr>
		<h3><?php show_the_content_by_id(895);?></h3>
	</div>
</header>

<section class="menu-page animatedParent">
	<div class="container">
		<div class="row">
			<div class="col-md-3 animated ">
				<ul class="nav-menu">
					<?php
					$args = array(
						'child_of' => get_top_ancestor_id(),
						'title_li' => ''
					);
					?>
					<?php wp_list_pages( $args ) ?>


				</ul>
			</div>
			<!--------page content-------->

			<div class="col-md-8 animated fadeInRightShort">

				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif; ?>

			</div>
		</div>
	</div>
</section>

<? get_footer(); ?> <!-- include footer.php-->

<?php get_template_part('social-links')?>

