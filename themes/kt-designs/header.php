<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
	<?php wp_head(); ?>
</head>

<body >
<?php wp_body_open(); ?>

<header>
	<div class="holdLogo">
		<h1 class="logo">KT Designs</h1>
	</div>
	<div class="holdNavigation">
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</div>
</header>
<div id="page" class="site">


	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			
