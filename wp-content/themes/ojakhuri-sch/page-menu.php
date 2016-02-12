<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>


<header class="main-header main-header-menu animatedParent" data-sequence='500'>
	<div class="header-content">
		<h1 class="animated fadeIn" data-id="1"><?php echo get_the_title(895); ?></h1>
		<hr>
		<h3 class="animated fadeIn" data-id="2"><?php show_the_content_by_id(895);?></h3>
	</div>
</header>
<div>

</div>
<section class="menu-page animatedParent">
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<ul class="nav-menu animated fadeInUpShort">
					<?php
					$args = array(
						'child_of' => get_top_ancestor_id(),
						'title_li' => ''
					);
					?>
					<?php wp_list_pages( $args ) ?>
				</ul>
			</div>

			<div class="col-md-8 animated fadeInRightShort">

				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif; ?>

			</div>
	</div>
</section>

<? get_footer(); ?> <!-- include footer.php-->

<?php get_template_part('social-links')?>
