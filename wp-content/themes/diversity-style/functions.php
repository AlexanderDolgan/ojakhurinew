<?php 
function diversity_register_my_menus() {
	register_nav_menus(
		array(
			'menu-1' => __( 'Menu 1', 'diversity' ),		
		)
	);
}
add_action( 'after_setup_theme', 'diversity_register_my_menus' );

function diversity_script_loader() {      
    global $wp_styles;
	wp_enqueue_script('bootstrap.min.js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'),'2.3.1', true );
	wp_enqueue_script( 'bootstrap-carousel', get_template_directory_uri() . '/assets/js/bootstrap-carousel2.3.1.js', array( 'jquery' ), '2.3.1', true ); 
        
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
    wp_enqueue_style( 'diversity_style', get_template_directory_uri() . '/style.css');        

    if (is_child_theme()) {
      wp_enqueue_style('diversity_child', get_stylesheet_uri(), false, '1.0', null);
    }
	wp_enqueue_style( 'diversity-style', get_stylesheet_uri() );
 	wp_enqueue_style('diversity-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', false ,'2.3.1', 'all' );
    wp_enqueue_style('diversity-responsive', get_template_directory_uri().'/assets/css/bootstrap-responsive.css', false ,'2.3.1', 'all' );
	wp_enqueue_style('diversity-custom', get_template_directory_uri().'/assets/css/custom.css', false ,'1.0.0', 'all' );
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz');
    wp_enqueue_style( 'googleFonts'); 	
}
add_action('wp_enqueue_scripts', 'diversity_script_loader');
function diversity_style_admin() {
 	wp_enqueue_style( 'style_admin', get_stylesheet_directory_uri() . '/settings/options.css' );
} 
add_action( 'admin_enqueue_scripts', 'diversity_style_admin' );	
	

################################################################################


if ( ! function_exists( 'diversity_template_setup' ) ) :	
  function diversity_template_setup() 
    {	
global $diversity_content_width, $diversity_footer_text;
if ( ! isset( $content_width ) )
	$content_width = 700;
	add_editor_style();
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'diversity_thumb-feature', 578, 390, true ); 
	add_image_size( 'diversity_page-feature', 1000, 470, true ); 
	add_theme_support( 'automatic-feed-links' );
	load_theme_textdomain( 'diversity', get_template_directory() . '/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory(). "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file ); 
	$diversity_footer_text = '&copy;'.date('Y').' <a href="'.get_home_url().'">'.get_bloginfo('name').'</a>.'
      .  __('Powered by', 'diversity') . '<a href="http://wordpress.org">WordPress</a>.';	
 
  };
endif;
  
  add_action('after_setup_theme', 'diversity_template_setup');
  
if ( ! function_exists( 'diversity_filter_wp_title' ) ) :	
function diversity_filter_wp_title( $title ) {
	global $page, $paged;
    $site_name = get_bloginfo( 'name' );
    $filtered_title = $site_name . $title;
      return $filtered_title;
	  $site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'diversity' ), max( $paged, $page ) ); 
}
endif; 
add_filter( 'wp_title', 'diversity_filter_wp_title' );  
  

/* ------- Register sidebar ------- */
function diversity_widgets_init() {

	 register_sidebar( array(
    'name' => __('Posts Sidebar','diversity'),
    'id' => 'sidebar-posts',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
	 register_sidebar( array(
    'name' => __('Page Sidebar','diversity'),
    'id' => 'sidebar-page',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ) );
   
  register_sidebar(array(
    'name' => __('Footer Left','diversity'),
    'id'   => 'footer-left',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));

  register_sidebar(array(
    'name' => __('Footer Middle1','diversity'),
    'id'   => 'footer-middle1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
    register_sidebar(array(
    'name' => __('Footer Middle2','diversity'),
    'id'   => 'footer-middle2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));

  register_sidebar(array(
    'name' => __('Footer Right','diversity'),
    'id'   => 'footer-right',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
}
 add_action('widgets_init', 'diversity_widgets_init');

if ( ! function_exists( 'diversity_comment' ) ) :	
  function diversity_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>			
			<?php printf( __( '%s', 'diversity' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author-->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'diversity' ); ?></em>
			<br />
		<?php endif; ?>

<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s', 'diversity'), get_comment_date('F j, Y g:i a')) ?></a>

</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php sanitize_text_field(comment_text()); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->
</li>
	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'diversity' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'diversity' ), ' ' ); ?></p></li>
	<?php
			break;
	endswitch;
  };
  endif; 
  
function diversity_font_awesome() {
 if (!is_admin()) {
 wp_register_style('font-awesome', get_template_directory_uri() . '/font-awesome-4.3.0/css/font-awesome.min.css');
 wp_enqueue_style('font-awesome');
 }
}
add_action('wp_enqueue_scripts', 'diversity_font_awesome');  
  
function diversity_excerpt_more($more) {
    global $post;
}
add_filter('excerpt_more', 'diversity_excerpt_more');

	// Customizer
require( get_template_directory() . '/assets/inc/customizer.php' );

if ( ! function_exists( 'diversity_entry_meta' ) ) :

function diversity_entry_meta() {

	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . __( 'Sticky', 'diversity' ) . '</span>';

	if ( ! has_post_format( 'aside' ) && ! has_post_format( 'link' ) && 'post' == get_post_type() )
		diversity_entry_date();	
}
endif;
if ( ! function_exists( 'diversity_ilc_farbtastic_script' ) ) :	
  function diversity_ilc_farbtastic_script( $hook_suffix ) 
  { 
      wp_enqueue_style( 'farbtastic' );
      wp_enqueue_script( 'farbtastic' );
  };
 endif;
if ( ! function_exists( 'diversity_entry_date' ) ) :

function diversity_entry_date( $echo = true ) {
	$format_prefix = ( has_post_format( 'chat' ) || has_post_format( 'status' ) ) ? _x( '%1$s on %2$s', '1: post format name. 2: date', 'diversity' ): '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'diversity' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;
function diversity_clearboth() { ?>
<div class="clearboth"> </div>
<?php } 

function diversity_theme_customizer_favicon( $wp_customize ) {
    // Fun code will go here

    $wp_customize->add_section( 'diversity_favicon_section' , array(
      'title'       => __( 'Favicon', 'diversity' ),
      'priority'    => 30,
      'description' => __( 'Upload a favicon to your Wordpress', 'diversity'),
  ) );
    $wp_customize->add_setting( 'diversity_favicon_url',
array(
			'sanitize_callback' => 'diversity_sanitize_escaping'
			)
	);

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'diversity_favicon_url', array(
      'label'    => __( 'Favicon', 'diversity' ),
      'section'  => 'diversity_favicon_section',
      'settings' => 'diversity_favicon_url',
  ) ) );
}
add_action('customize_register', 'diversity_theme_customizer_favicon');

function diversity_customizer_css() {
    ?>
    <style type="text/css">
        a { color: <?php echo esc_attr(get_theme_mod( 'diversity_link_color', '#2a9ed4' )); ?>; }
		.single-post, .entry { background: <?php echo esc_attr(get_theme_mod('diversity_bac_single_color', '#ffffff')); ?>}
		.sb-right { background: <?php echo esc_attr(get_theme_mod('diversity_sb_right_color', '#f4f4f4')); ?>}		
		#footer { background: <?php echo esc_attr(get_theme_mod('diversity_footer_color', '#e8e8e8')); ?>}
		body{ background: <?php echo esc_attr(get_theme_mod('diversity_background_color', '#0d3070')); ?>}
		.site-name h1 a, .site-description { color: <?php echo esc_attr(get_theme_mod( 'diversity_header_text_color', '#ffffff')); ?>; }		
    </style>
    <?php
}
add_action( 'wp_head', 'diversity_customizer_css' );

function diversity_wp_corenavi() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; 
  $a['mid_size'] = 3; 
  $a['end_size'] = 1; 
  $a['prev_text'] = __( 'Previous', 'diversity' ); 
  $a['next_text'] = __( 'Next', 'diversity' ); 

  if ($max > 1) echo '<div class="navigation">';

  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}
 
  

?>
