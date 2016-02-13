<? get_header(); ?> <!--include header.php-->
<p>archive-erm-menu.php</p>
<p>archive-erm-menu.php</p>
<p>archive-erm-menu.php</p>
<p>archive-erm-menu.php</p>
<p>archive-erm-menu.php</p>
<p>archive-erm-menu.php</p>
<p>archive-erm-menu.php</p>

<?php if (have_posts()) :
	while (have_posts()) : the_post();

		the_content();

	endwhile;
endif; ?>

<? get_footer(); ?> <!--include footer.php-->