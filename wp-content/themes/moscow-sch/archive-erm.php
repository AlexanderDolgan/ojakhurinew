<? get_header(); ?> <!--include header.php-->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto expedita explicabo fugit id nisi quis, repellat! Animi, assumenda, quidem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequatur cum ducimus facere fugit obcaecati perferendis repellat soluta suscipit! Cupiditate.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto expedita explicabo fugit id nisi quis, repellat! Animi, assumenda, quidem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequatur cum ducimus facere fugit obcaecati perferendis repellat soluta suscipit! Cupiditate.</p>
<?php if (have_posts()) :
	while (have_posts()) : the_post();

		the_content();

	endwhile;
else :
	echo '<p>sorry no results</p>';
endif; ?>

<? get_footer(); ?> <!--include footer.php-->