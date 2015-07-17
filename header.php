<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @since WHISPA 0.1
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php /*
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header container" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'whispa' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'whispa' ); ?>"><?php _e( 'Skip to content', 'whispa' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main container">

  <body>
  */ ?>
		<div id="header" class="page_content">
			<div id="overlay">
				<div class="navbar navbar-default">
          			<div class="container">
	  					<div class="navbar-header">
	  						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
	  						<a href="index.html" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
	  					</div>
	  					<div class="collapse navbar-collapse">
		  					<ul class="nav navbar-nav navbar-right">
		  						<li><a href="programme.html">Programme</a></li>
		  						<li><a class="ligne" href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a></li>
		  						<li><a href="contact.html">Contact</a></li>
		  					</ul>
		          		</div>
					</div>
				</div><!--fin navbar-->
				
				<div class="program">
					<div class="container">
						<div class="row">
				         <div class="col-md-5  col-xs-12 col-sm-7">
				            <h1 class="header-program">Deviens experte en programmation, marketing et design.</h1>
				          </div>
				          <div class="col-md-4 col-md-offset-3 col-xs-12 col-sm-5 ">
				            <a href="inscription.html" class="btnRose">Inscris-toi gratuitement</a>
				          </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
