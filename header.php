<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package NXI
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">			
			<nav class="top-bar">
				<div class="container">
					<div class="top-bar-menu-left">
						<?php wp_nav_menu( array( 'theme_location' => 'top-bar-menu-left' ) ); ?>
					</div>
					<div class="top-bar-menu-right">
						<?php wp_nav_menu( array( 'theme_location' => 'top-bar-menu-right' ) ); ?>
					</div>
				</div>
			</nav>

			<?php if ( is_front_page() ) : ?>

			<section class="hero">
				<div class="container">
				</div>
			</section>

			<?php endif; ?>

			<nav class="navbar navbar-default" role="navigation" id="navbar"><!-- Navbar -->
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
					</div>

						<?php
						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'nxi-navbar',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
						?>


				</div><!-- /.container -->
			</nav>
			

		</header><!-- #masthead -->

		<div id="content" class="site-content">
