<? get_header(); ?> <!--include header.php-->
<p>index.php</p>
<p>index.php</p>
<p>index.php</p>
<p>index.php</p>
<?php if (have_posts()) :
    while (have_posts()) : the_post();

        the_content();

    endwhile;
else :
    echo '<p>sorry no results</p>';
endif; ?>

<? get_footer(); ?> <!--include footer.php-->