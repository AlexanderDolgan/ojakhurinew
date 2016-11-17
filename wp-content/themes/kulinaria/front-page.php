<? get_header(); ?> <!--include header.php-->

<!-- Site main-->
<main id="site-main">

    <!--Start Query for page index.php / custom_pages -> Главная-->
    <?php

    // The Query
    $args      = array( 'post_type' => 'structure_page', 'p' => 4 );
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
    $the_query->the_post();
    ?>

    <section class="l-content">
        <div class="container">
            <header class="l-text__header"><img src="<?php echo get_template_directory_uri() ?>/img/assets/fruit.png">
                <h1><?php echo get_the_title();?></h1>
            </header>
            <section class="content-item">
                <div class="side">
                    <p><?php echo get_post_meta( $post->ID, 'text_area1', true ) ?></p>
                </div>
                <div class="side"><img src="<?php echo get_template_directory_uri() ?>/img/assets/bread.png"></div>
            </section>
            <section class="content-item">
                <div class="side">
                    <p><?php echo get_post_meta( $post->ID, 'text_area2', true ) ?></p>
                </div>
                <div class="side"><img src="<?php echo get_template_directory_uri() ?>/img/assets/samsa.png"></div>
            </section>
            <section class="content-item">
                <div class="side">
                    <p><?php echo get_post_meta( $post->ID, 'text_area3', true )?></p>
                </div>
                <div class="side"><img src="<?php echo get_template_directory_uri() ?>/img/assets/hachapuri.png"></div>
            </section>
            <section class="content-item">
                <div class="side">
                    <p><?php echo get_post_meta( $post->ID, 'text_area4', true )?></p>
                </div>
                <div class="side"><img src="<?php echo get_template_directory_uri() ?>/img/assets/khinkali.png"></div>
            </section>
        </div>
    </section>
    <section class="l-gallery">
        <div class="fotorama" data-ratio="1920/1000" data-max-width="100%" data-nav="thumbs" data-autoplay="true"
             data-loop="true"><img src="<?php echo get_template_directory_uri() ?>/img/gallery/1.jpg"><img
                src="<?php echo get_template_directory_uri() ?>/img/gallery/2.jpg"><img
                src="<?php echo get_template_directory_uri()?>/img/gallery/3.jpg"><img src="<?php echo get_template_directory_uri() ?>/img/gallery/4.jpg"><img
                src="<?php echo get_template_directory_uri()?>/img/gallery/5.jpg"></div>
    </section>
    <section class="l-adresses">
        <h3>Адреса:</h3>
        <h1>Москва</h1>
        <p><?php echo get_post_meta( $post->ID, 'adr1', true )?></p>
        <p><?php echo get_post_meta( $post->ID, 'adr2', true );?></p>
        <p><?php echo get_post_meta( $post->ID, 'adr3', true );?></p>
        <h1>Королев</h1>
        <p><?php echo get_post_meta( $post->ID, 'adr4', true );?></p>
        <h1>Химки</h1>
        <p><?php echo get_post_meta( $post->ID, 'adr5', true );?></p>
        <p><?php echo get_post_meta( $post->ID, 'adr6', true );?></p>
    </section>
</main>

<!--End Query for page index.php / custom_pages -> Главная-->
<?php
}

} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>

<? get_footer(); ?> <!--include footer.php-->