<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cercec_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cercec-theme' ); ?></a>

			<header id="masthead" class="container site-header">
				<div class="custom-logo">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88.49 87.13"><defs><style>.cls-1{fill:#1f1a33;}.cls-2{fill:#ea5425;}</style></defs><title>4Fichier 1</title><g id="Calque_2" data-name="Calque 2"><g id="Layer_1" data-name="Layer 1"><path class="cls-1" d="M9,34.17a5.22,5.22,0,0,1,5.52,5.49A5.25,5.25,0,0,1,10.11,45l4.37,8.35H11L6.85,45.15H6.41v8.24H3.33V34.17ZM6.41,42.24H9a2.34,2.34,0,0,0,2.47-2.58A2.34,2.34,0,0,0,9,37.08H6.41Z"/><path class="cls-2" d="M15.87,9.94c0,3.88-2.61,6.7-6.2,6.7s-6.2-2.88-6.2-6.7,2.67-6.69,6.2-6.69a5.81,5.81,0,0,1,5,2.67l.12.17,2.39-2.4-.1-.11A9.34,9.34,0,0,0,9.67,0,9.71,9.71,0,0,0,0,9.94a9.67,9.67,0,1,0,19.34,0V9.77H15.87Z"/><path class="cls-2" d="M49.77,43.15A7,7,0,0,1,48,48a6,6,0,0,1-4.46,1.89c-3.53,0-6.2-2.88-6.2-6.69s2.67-6.7,6.2-6.7a5.84,5.84,0,0,1,5,2.67l.11.17,2.4-2.39-.1-.12a9.34,9.34,0,0,0-7.44-3.58,9.71,9.71,0,0,0-9.67,9.95,9.67,9.67,0,1,0,19.34,0V43H49.77Z"/><path class="cls-2" d="M85,76.93v.17c0,3.88-2.6,6.69-6.2,6.69s-6.2-2.87-6.2-6.69,2.67-6.69,6.2-6.69a5.84,5.84,0,0,1,5,2.67l.11.17,2.4-2.4-.1-.11a9.34,9.34,0,0,0-7.44-3.58,9.7,9.7,0,0,0-9.66,9.94,10,10,0,0,0,2.75,7A9.47,9.47,0,0,0,78.82,87a9.69,9.69,0,0,0,9.67-9.94v-.17Z"/><rect class="cls-2" x="-0.89" y="76.32" width="28.85" height="0.71" transform="translate(-50.21 31.96) rotate(-44.94)"/><rect class="cls-2" x="63.12" y="12.31" width="28.85" height="0.71" transform="translate(13.76 58.54) rotate(-45)"/><path class="cls-1" d="M37.45.29H49.53V3.21h-9V8.38h4.38V11.3H40.53v5.34H49.7v2.92H37.45Z"/><path class="cls-1" d="M37.45,67.63H49.53v2.92h-9v5.17h4.38v2.92H40.53V84H49.7V86.9H37.45Z"/></g></g></svg>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cercec-theme' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location'	=> 'menu-1',
						'menu_id'        	=> 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

				<div id="content" class="site-content">
