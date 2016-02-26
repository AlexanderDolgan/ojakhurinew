<? get_header(); ?> <!--include header.php-->
<!--create a WP_Query request, -->
<!--show only post title from erm_post-type,-->
<!--create ul navigation with permalink to single-$posttype.php-->
<?php
$args = array(
  'post_type' => 'erm_menu'
);

$query = new WP_Query( $args );
?>
<nav>
    <ul>
        <?php if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post(); ?>

                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

            <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </ul>
</nav>

<?php echo do_shortcode('[erm_menu id=902]'); ?>

<? get_footer(); ?> <!--include footer.php-->