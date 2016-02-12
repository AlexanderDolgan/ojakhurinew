<!--contacts-->
<section class="color-section footer animatedParent" data-sequence="500">
	<div class="container-fluid">
			<div class="row col-lg-8 col-md-10 col-lg-offset-2 col-md-offset-1 section-content-container footer-container">
				<div>
					<?php if ( have_posts() ) :
						query_posts( 'p=1041' );
						while ( have_posts() ) :
							the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<hr class="light"/>
					<p><?php the_content(); ?></p>
				</div>

				<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2">
					<a href="tel:<?php echo get_post_meta( $post->ID, 'phone', true ) ?>"><i class="fa fa-phone fa-2x animated bounceIn" data-id="1"></i></a><br/>
					<a href="tel:<?php echo get_post_meta( $post->ID, 'phone', true ) ?>"><?php echo get_post_meta( $post->ID, 'phone', true ) ?></a>
				</div>

				<div class="col-lg-4 col-md-4">
					<a href="mailto:<?php echo get_post_meta( $post->ID, 'mail', true ) ?>"><i class="fa fa-envelope-o fa-2x animated bounceIn" data-id="2"></i></a> <br/>
					<a href="mailto:<?php echo get_post_meta( $post->ID, 'mail', true ) ?>"><?php echo get_post_meta( $post->ID, 'mail', true ) ?></a>
						<?php endwhile; endif;
					wp_reset_query(); ?>
				</div>

			</div>
		</div>
</section>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter31204916 = new Ya.Metrika({id:31204916,
					clickmap:true,
					accurateTrackBounce:true,
					trackHash:true});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/31204916" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>