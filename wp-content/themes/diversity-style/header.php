<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>  
 <?php wp_title('|',true,'left'); ?>
</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	

		 <?php if ( get_theme_mod( 'diversity_favicon_url' ) ) : ?>
      <link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod( 'diversity_favicon_url' ) ); ?>" />
  <?php endif; ?>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="header">		
	<div id="logo"> 	
	<div class="site-name"><h1><a href="<?php echo esc_url(home_url()); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>
	<div class="site-description"><?php bloginfo( 'description' ); ?>
	</div>
	</div><!-- logo -->	
	<div class="main-menu-container">
<?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => 'div', 'container_id' => 'access')); ?>				
		<!-- searchform -->				
<?php get_search_form(); ?>
			
	</div>		
	<div class="clear"></div>


