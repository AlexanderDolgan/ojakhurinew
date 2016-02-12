<?php

function theme_styles() {
	/* Bootstrap Core CSS -->*/
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/stylesheets/bootstrap.min.css' );
	/* Custom Core CSS -->*/
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/stylesheets/screen.css' );
	/* font awesome CSS -->*/
	wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css' );
	/* Plugin CSS -->*/
//	wp_enqueue_style( 'animations', get_template_directory_uri() . '/stylesheets/animations.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond', 'http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	/*bootstrap core js*/
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );

	/*plugin js*/
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.js' );
	wp_enqueue_script( 'easing_js', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'fittext_js', get_template_directory_uri() . '/js/jquery.fittext.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'css3-animate-it', get_template_directory_uri() . '/js/css3-animate-it.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'creative_js', get_template_directory_uri() . '/js/creative.js', array( 'jquery' ), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support( 'menus' );

//Get top ancestor for menu navigation

function get_top_ancestor_id() {

	global $post;

	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );

		return $ancestors[0];
	}

	return $post->ID;
}

// Navigation Menus
function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

/**
 * Display the post content. Optinally allows post ID to be passed
 * @uses the_content()
 *
 * @param int $id Optional. Post ID.
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool $stripteaser Optional. Strip teaser content before the more text. Default is false.
 */

function show_the_content_by_id( $post_id = 0, $more_link_text = null, $stripteaser = false ) {
	global $post;
	$post = &get_post( $post_id );
	setup_postdata( $post, $more_link_text, $stripteaser );
	the_content();
	wp_reset_postdata( $post );
}

function show_the_content_by_id_with_title( $post_id = 0, $more_link_text = null, $stripteaser = false ) {
	global $post;
	$post = &get_post( $post_id );
	setup_postdata( $post, $more_link_text, $stripteaser );
	?>
	<h1><?php the_title(); ?><h1><?php
	the_content();
	wp_reset_postdata( $post );
}

/*Add theme support- theme format*/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-formats', array( 'aside', 'link', 'quote' ) );

}

add_theme_support( 'post-thumbnails' );

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'generator');
remove_action('wp_head', 'wlwmanifest_link');

remove_filter('term_description','wpautop');
remove_filter ('the_content',  'wpautop');
remove_filter ('comment_text', 'wpautop');

?>