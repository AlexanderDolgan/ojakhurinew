<!--contact-2 page-->
<? get_header(); ?> <!--include header.php-->

<?php get_template_part('navigation'); ?>

<header class="main-header main-header-contacts animatedParent">
    <div class="header-content">

        <h1 class="animated fadeIn"><?php echo get_the_title(925); ?></h1>
        <hr>
        <h3 class="animated bounceInUp"><?php show_the_content_by_id(925); ?></h3>
    </div>
</header>



<div class="yandex-map">
    <!--	Яндекс карта без использования API-->
    <?php
    $id = 75;// post-yandex map
    $post = get_post($id);
    $content = $post->post_content;
    echo $content;
    ?>
</div>

<? get_footer(); ?> <!-- include footer.php-->

<!--	контактная форма - плагин ContactForm 7-->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Напишите нам</h1>
                <?php echo do_shortcode('[contact-form-7 id="93" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('social-links')?>