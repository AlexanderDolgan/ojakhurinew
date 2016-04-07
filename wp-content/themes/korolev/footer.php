<!--site footer-->


<?php

// The Query
$args = array( 'post_type' => 'structure_page', 'p' => 1574 );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

while ( $the_query->have_posts() ) {
$the_query->the_post(); ?>

<footer class="container-fluid footer-wrapper">
	<section class="site-footer container">
		<div class="row">
			<div class="col-md-4">
				<p><?php echo get_post_meta( $post->ID, 'header2', true ) . ' ';
					echo get_post_meta( $post->ID, 'text_area6', true );
					echo get_post_meta( $post->ID, 'text_area2', true );?></p>
				<p><?php echo get_post_meta( $post->ID, 'header1', true ) . '</br>';
					echo get_post_meta( $post->ID, 'text_area1', true );?></p>
				<br>
			</div>
			<div class="phone col-md-3">
				<a href="tel:<?php echo get_post_meta( $post->ID, 'header3', true );?>"> <?php echo get_post_meta( $post->ID, 'text_area3', true );?></a>
				<a href="mailto:<?php echo get_post_meta( $post->ID, 'text_area4' ,true); ?>"><?php echo get_post_meta( $post->ID, 'text_area4' ,true); ?></a>
			</div>
			<div class="logo-footer col-md-offset-2 col-md-3">
				<a href="<?php echo network_home_url(); ?>"><img
						src="<?php echo get_template_directory_uri(); ?>/img/svg/logo-vert.svg" alt="логотип Оджахури"></a>
			</div>
		</div>
		<div class="row / copyright">
			<p>2013 — <?php echo date( 'Y' ); ?> © Оджахури</p>
		</div>

	</section>
	<!--	End Loop-->
	<?php
	}

	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	?>

</footer>
</header>
</section>
</main>

</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function () {
			try {
				w.yaCounter31204916 = new Ya.Metrika({
					id: 31204916,
					clickmap: true,
					accurateTrackBounce: true,
					trackHash: true
				});
			} catch (e) {
			}
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () {
				n.parentNode.insertBefore(s, n);
			};
		s.type = "text/javascript";
		s.async = true;
		s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else {
			f();
		}
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
	<div><img src="//mc.yandex.ru/watch/31204916" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>