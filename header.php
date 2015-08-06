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
  <?php
  /* if (is_front_page() || is_home()){ */
    if (is_front_page()){
    ?>
    <meta property="og:title" content="Women High Impact Startup Preparation Academy (WHISPA)" />
    <meta property="og:description" content="Deviens experte en programmation, marketing et design" />
    <?php
    }
    elseif ( is_page_template('whispa-inscription.php')) {
     ?>
      <meta property="og:title" content="WHISPA inscription" />
      <meta property="og:description" content="Remplissez le formulaire pour vous inscrire au programme" />
    <?php
    }
    elseif ( is_page_template('whispa-contact.php')) {
     ?>
      <meta property="og:title" content="WHISPA contact" />
      <meta property="og:description" content="Envie d'en savoir plus? Contactez nous." />
    <?php
    }
    elseif ( is_page_template('whispa-blog.php')) {
     ?>
      <meta property="og:title" content="WHISPA blog" />
      <meta property="og:description" content="Bienvenue sur notre blog. Soyez informés de nos activités." />
    <?php
    }
    else {
     ?>

    <?php
    }
  ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
  /* if (is_front_page() || is_home()){ */
  if (is_front_page()){
	 ?>
	<div id="header" class="home">
		<div id="overlay">
			<div class="navbar navbar-default">
        	<div class="container">
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
  						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
  					</div>
  					<div class="collapse navbar-collapse">
	  					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right', 'menu_id' => 'primary-menu' ) ); ?>
	          </div>
				</div>
			</div><!--fin navbar-->
  		<div class="container">
					<div class="row">
						<div class="col-margin">
							<h1 class="header-title">Deviens experte en programmation, marketing et design</h1>
								<br>
								<a href="<?php echo home_url(); ?>/inscription" class="btnRose">Inscris-toi gratuitement</a>
         		</div>
				</div>
      </div>
    </div>
	</div>

	<?php
  }
  elseif ( is_page_template('whispa-inscription.php')) {
	 ?>
	 		<div>
			<div>
				<div class="navbar navbar-default">
          <div class="container">
  					<div class="navbar-header">
	  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
  						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">WHISPA</a>
  					</div>
  					<div class="collapse navbar-collapse">
	  					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right', 'menu_id' => 'primary-menu' ) ); ?>
          	</div>
          </div>
				</div><!--fin navbar-->
			</div>
		</div>

	<?php
  }
  else {
	 ?>
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
	  						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">WHISPA</a>
	  					</div>
	  					<div class="collapse navbar-collapse">
		  					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right', 'menu_id' => 'primary-menu' ) ); ?>
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
				            <a href="<?php echo home_url(); ?>/inscription" class="btnRose">Inscris-toi gratuitement</a>
				          </div>
				        </div>
					</div>
				</div>
			</div>
		</div>

	<?php
  }
	?>

