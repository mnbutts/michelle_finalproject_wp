<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eviltwin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Marck+Script|Rajdhani:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/flexslider.css" type="text/css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'eviltwin' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		<div class="center_container float_left">
				<div class="circle_image feature1" style="background-image: url(http://localhost:8888/wp-content/uploads/2016/04/feature1.jpg); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
				<div class="circle_image feature2" style="background-image: url(http://localhost:8888/wp-content/uploads/2016/04/feature2.jpg); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
				<div class="circle_image feature3" style="background-image: url(http://localhost:8888/wp-content/uploads/2016/04/feature3.jpg); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
		</div>
		<nav id="site-navigation" class="main-navigation clear" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
