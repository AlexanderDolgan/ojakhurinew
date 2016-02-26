<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ) ?></title>

	<!--main stylesheet-->
	<link rel="stylesheet" href="../css/main.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<main class="wrapper">

	<!--site header group - site logo, dropdown rest nav, main navigation-->
	<header class="site-header container-fluid">

		<?php get_template_part( 'navigation' ); ?> <!--include navigation.php-->

	</header>