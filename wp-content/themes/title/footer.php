<!--site footer-->
<footer class="row footer-wrapper">
	<section class="site-footer container">
		<div class="row">
			<!--<div class="col-md-4">-->
			<!--<p>Химки, ул. Молодежная 6</p>-->
			<!--<p>12:00 — 00:00</p>-->
			<!--<br>-->
			<!--<p class="copyright">2013 — 2016 © Оджахури</p>-->
			<!--</div>-->
			<!--<div class="phone col-md-3">-->
			<!--<a href="tel:+74956216002">+7 495 621-60-02</a>-->
			<!--<a href="mailto:ojakhuri@mail.ru">ojakhuri@mail.ru</a>-->
			<!--</div>-->
			<div class="logo-footer">
				<img src="<?php echo get_template_directory_uri(); ?>/img/svg/logo-vert.svg" alt="логотип Оджахури">
			</div>
		</div>

	</section>

</footer>

</header>
</section>
</main>

</div>
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