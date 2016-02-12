<? get_header(); ?> <!--include header.php-->

<main class="container-fluid animatedParent">

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

	<header class="site-header row">
		<div class="site-header-content">
			<span class="logo-svg animated bounceInDown"><?php get_template_part( 'images/inline', 'logo.svg' ); ?></span>
			<p>СЕТЬ РЕСТОРАНОВ ГРУЗИНСКОЙ КУХНИ</p>
			<a href="#news" class="slow-ride"><h1 class="news-header-h1 text-center">- НОВОСТИ -</h1></a>
		</div>
	</header>

	<section class="nav">
		<nav class="side-nav">
			<div class="nav-res">
				<h1 class="nav-header-h1">наши рестораны</h1>

				<div class="nav-res-block">
					<a href="/sch" class="nav-res-block-links">
						<h1 class="sch">Москва</h1></a>
					<p class="nav-res-block-p">Садовая-Черногрязская,<br> 22, стр.1</p>
					<!--					<a href="https://maps.yandex.ru/?um=constructor:HFS65EDDvHWnZKvX7r_-MyqB6Mqgxtol" class=" nav-res-block-map"-->
					<!--					   target="_blank">-->
					<!--					</a>-->
					<div class="rest-photo sch-photo">
						<img src="<?php bloginfo('template_directory')?>/images/sch.jpg"" alt="Садово-Черногрязская">
					</div>
				</div>

				<div class="nav-res-block">
					<a href="/khimki" class="nav-res-block-links">
						<h1 class="khimki">Химки</h1></a>
					<p class="nav-res-block-p">ул. Молодежная д.6</p>
<!--					<a href="https://maps.yandex.ru/?um=constructor:7XH1WB6uTD_c0chtiF-B3bqTVlY0ReB2"-->
<!--					   class="nav-res-block-map" target="_blank">-->
<!--					</a>-->
					<div class="rest-photo khimki-photo">
						<img src="<?php bloginfo('template_directory')?>/images/khimki.jpg" alt="Химки">
					</div>
				</div>

				<div class="nav-res-block">
					<a href="/korolev"
					   class="nav-res-block-links">
						<h1 class="korolev">Королев</h1></a>
					<p class="nav-res-block-p">Проспект Королева 6Г</p>
<!--					<a href="https://maps.yandex.ru/?um=constructor:LtM-pxAjBYyne6wzv_vY_GuwYCK5j1HM" class="nav-res-block-map"-->
<!--					   target="_blank">-->
<!--					</a>-->
					<div class="rest-photo korolev-photo">
						<img src="<?php bloginfo('template_directory')?>/images/korolev.jpg" alt="Королев">
					</div>
				</div>


			</div>
		</nav>
	</section>


	<section class="row news-bg" id="news">
		<article class="news col-md-6 col-lg-6 col-lg-offset-3 col-md-offset-3">
			<div class="news-body">
				<?php if ( have_posts() ) : query_posts( 'cat=11' );
					while ( have_posts() ) : the_post(); ?>

						<h1 class="news-h1"><?php the_title(); ?></h1>

						<?php the_post_thumbnail( array( 600, 600 ) ); ?>

						<span class="news-date"><?php the_date(); ?></span>

						<p class="news-p"><?php the_content(); ?></p>

						<hr class="news-hr">
					<? endwhile; endif;
				wp_reset_query(); ?>
			</div>
		</article>
	</section>

	<div style="display: none;">
		<?php get_footer() ?>
	</div>