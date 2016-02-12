<? get_header(); ?> <!--include header.php-->

<?php get_template_part( 'navigation' ); ?>

	<!--HEADER-->
	<ul class="cb-slideshow">
		<li>
			<span></span>
		</li>
		<li>
			<span></span>
		</li>
		<li>
			<span></span>
		</li>
		<li>
			<span></span>
		</li>
		<li>
			<span></span>
		</li>
		<li>
			<span></span>
		</li>
	</ul>
	<header class="main-header main-header-index animatedParent" data-sequence='500'>
		<div class="container-fluid">
			<div class="row">
				<!--<video autoplay loop muted poster="-->
				<?php //bloginfo('template_directory') ?><!--/images/header.jpg">-->
				<!--<source src="--><?php //bloginfo('template_directory') ?><!--/vid/header_vid.mp4">-->
				<!--</video>-->
				<div class="header-content">
					<div class="header-content-inner">
						<a class="animated bounceInDown" data-id="1"
						   href="<?php echo network_site_url(); ?>"><?php get_template_part( 'images/inline', 'logo.svg' ); ?></a>

						<!--header img for mobile devices-->
						<h1 class="header-h1 animated fadeIn" data-id="2"><?php echo get_the_title( 990 ); ?> </h1>
						<hr class="animated fadeIn" data-id="3">
						<p class="animated bounceInUp" data-id="4"><?php show_the_content_by_id( 990 ); ?></p>

						<!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Узнать больше</a>-->
					</div>
				</div>
			</div>
		</div>
	</header>

	<!--about-->

	<section class="color-section">
		<div class="container-fluid">
			<div class="row">
				<div class="section-content-container col-lg-8 col-md-10 col-lg-offset-2 col-md-offset-1 animatedParent">
					<h1 class="animated fadeIn"><?php echo get_the_title( 1 ); ?></h1>
					<hr>
					<p class="animated fadeInUpShort"><?php show_the_content_by_id( 1 ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container-fluid">
			<div class="row">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>

					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/dishes1.jpg"
							     alt="interior1">
						</div>
						<div class="item">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/dishes2.jpg"
							     alt="interior2">
						</div>
						<div class="item">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/dishes3.jpg"
							     alt="interior3">
						</div>
						<div class="item">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/dishes4.jpg"
							     alt="interior4">
						</div>
						<div class="item">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/dishes5.jpg"
							     alt="interior5">
						</div>
						<div class="item">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/mainpagegallery/dishes6.jpg"
							     alt="interior6">
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- news -->
	<section>
		<div class="container-fluid news-bg">
			<div class="row news">
				<h1 class="news-h1"><a
						href="<?php echo get_permalink( 1056 ); ?>"><?php echo get_cat_name( 10 ); ?></a>
				</h1>

				<div class="news-content col-md-5 col-lg-4 col-md-offset-1 col-lg-offset-2">
					<div class="news-article">
						<?php if ( have_posts() ) : query_posts( 'p=1051' );
							while ( have_posts() ) : the_post(); ?>

								<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( array( 500, 500 ) ); ?></a>
								<h1 class="news-article-h1"><a
										href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
								<p class="news-article-date"><?php the_date(); ?></p>
								<div class="news-article-content"><p class="news-article-content-p"></p></div>
							<?php endwhile;
						else:
							//fallback no content message here
						endif; ?>
					</div>
				</div>
				<!-- -->
				<div class="news-content col-md-5 col-lg-4">
					<div class="news-article">
						<?php if ( have_posts() ) : query_posts( 'p=1054' );
							while ( have_posts() ) : the_post(); ?>

								<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( array( 500, 500 ) ); ?></a>
								<h1 class="news-article-h1"><a
										href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
								<p class="news-article-date"><?php the_date(); ?></p>
								<div class="news-article-content"><p class="news-article-content-p"></p></div>
							<?php endwhile;
						else:
							//fallback no content message here
						endif; ?>
					</div>
				</div>

				<!--social links-->
				<div class="row social animatedParent" data-sequence='500'>

					<?php if ( have_posts() ) : query_posts( 'cat=6' );
						while ( have_posts() ) : the_post(); ?>

							<a href="<?php echo get_post_meta( $post->ID, 'soc_link', true ); ?>"
							   title="<?php the_title(); ?>"><i
									class="fa fa-3x animated tada <?php echo get_post_meta( $post->ID, 'fa_icon', true ); ?>"
									data-id="<?php echo get_post_meta( $post->ID, 'data-id', true ); ?>"></i></a>
						<?php endwhile; endif;
					wp_reset_query(); ?>
				</div>
			</div>
	</section>
	<!---service-boxes-->
	<section class="white-section welcome animatedParent">
		<div class="container-fluid">
			<div class="row col-lg-8 col-md-10 col-lg-offset-2 col-md-offset-1 services-background">
				<div>
					<h1 class="section-heading animated fadeIn"><?php $idObj = get_category_by_slug( 'welcome' );
						$id                                                    = $idObj->term_id;
						echo get_cat_name( $id ) ?></h1>
					<hr>
				</div>
				<?php if ( have_posts() ) : query_posts( 'cat=7' );
					while ( have_posts() ) : the_post(); ?>
						<div
							class="col-lg-4 col-md-4 animated <?php echo get_post_meta( $post->ID, 'animation', true ); ?>">
							<div class="service-box">
								<i class="fa fa-3x <?php echo get_post_meta( $post->ID, 'fa_icon', true ); ?> text-primary"></i>

								<h3><?php the_title(); ?></h3>

								<p class="text-muted"><?php the_content(); ?></p>
							</div>
						</div>
					<? endwhile; endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</section>


<? get_footer(); ?>