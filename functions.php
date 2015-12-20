<?php
/**
 * WHISPA functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @since WHISPA 0.1
 */

/*
 * Set up the content width value based on the theme's design.
 *
 * @see whispa_content_width() for template-specific adjustments.
 */
if ( ! isset( $content_width ) )
	$content_width = 750;

/**
 * WHISPA setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * WHISPA supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since WHISPA 0.1
 */
function whispa_setup() {
	/*
	 * Makes WHISPA available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on WHISPA, use a find and
	 * replace to change 'whispa' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'whispa', get_template_directory() . '/languages' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'fonts/genericons.css', whispa_fonts_url() ) );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'whispa' ) );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 750, 550, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'whispa_setup' );

/**
 * Return the Google font stylesheet URL, if available.
 *
 * The use of Source Sans Pro and Open Sans by default is localized. For languages
 * that use characters not supported by the font, the font can be disabled.
 *
 * @since WHISPA 0.1
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function whispa_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'whispa' );

	/* Translators: If there are characters in your language that are not
	 * supported by Open Sans, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'whispa' );

	if ( 'off' !== $source_sans_pro || 'off' !== $open_sans ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro )
			$font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';

		if ( 'off' !== $open_sans )
			$font_families[] = 'Open Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since WHISPA 0.1
 */
function whispa_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Adds Masonry to handle vertical alignment of footer widgets.
	if ( is_active_sidebar( 'sidebar-1' ) )
		wp_enqueue_script( 'jquery-masonry' );

	// Loads JavaScript file with functionality specific to Boot Ship.
        wp_deregister_script('jquery');
        wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null);
        wp_enqueue_script('jquery');


	wp_enqueue_script( 'whispa-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2014-08-09', true );
	wp_enqueue_script( 'whispa-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.2.0', true );

/* Load our scripts *
if ( (is_page_template('whispa-inscription.php')) || (is_page_template('whispa-contact.php')) ) {
	wp_enqueue_script( 'whispa-parsleyjs', get_template_directory_uri() . '/js/parsley.js', array( 'jquery' ), '3.2.0', true );
	wp_enqueue_script( 'whispa-parsleyi18nfrjs', get_template_directory_uri() . '/js/i18n/fr.js', array( 'jquery' ), '3.2.0', true );
}

if ( is_page_template('whispa-inscription.php') ) {
	wp_enqueue_script( 'whispa-bootstrapdatapickerjs', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', array( 'jquery' ), '3.2.0', true );
	wp_enqueue_script( 'whispa-bootstrapdatapickerfrjs', get_template_directory_uri() . '/js/bootstrap-datepicker.fr.min.js', array( 'jquery' ), '3.2.0', true );
	wp_enqueue_script( 'whispa-inscriptionjs', get_template_directory_uri() . '/js/inscription.js', array( 'jquery' ), '3.2.0', true );
}

if ( is_page_template('whispa-contact.php') ) {
	wp_enqueue_script( 'whispa-contactjs', get_template_directory_uri() . '/js/contact.js', array( 'jquery' ), '3.2.0', true );
}
*/
/* End our scripts loading */


	// Add Source Sans Pro and Open Sans fonts, used in the main stylesheet.
	wp_enqueue_style( 'whispa-fonts', whispa_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons.css', array(), '2.09' );

	// Loads our main stylesheet.
	wp_enqueue_style( 'whispa-bootstrapthemecss', get_template_directory_uri() . '/css/bootstrap-theme.css', array(), '3.2.0' );
	wp_enqueue_style( 'whispa-bootstrapcss', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.2.0' );
	wp_enqueue_style( 'whispa-fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '3.2.0' );
	wp_enqueue_style( 'whispa-icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '3.2.0' );
	wp_enqueue_style( 'whispa-parsleycss', get_template_directory_uri() . '/css/parsley.css', array(), '3.2.0' );
	wp_enqueue_style( 'whispa-bootstrapdatapickercss', get_template_directory_uri() . '/css/bootstrap-datepicker3.min.css', array(), '3.2.0' );
	wp_enqueue_style( 'whispa-style', get_stylesheet_uri(), array(), '2014-08-09' );/*mettre la derniere date de validation*/

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'whispa-ie', get_template_directory_uri() . '/css/ie.css', array( 'whispa-style' ), '2014-08-09' );
	wp_style_add_data( 'whispa-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'whispa_scripts_styles' );

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since WHISPA 0.1
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function whispa_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'whispa' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'whispa_wp_title', 10, 2 );

/**
 * Register two widget areas.
 *
 * @since WHISPA 0.1
 */
function whispa_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'whispa' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'whispa' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'whispa' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'whispa' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'whispa_widgets_init' );

if ( ! function_exists( 'whispa_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since WHISPA 0.1
 */
function whispa_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'whispa' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous more"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Articles précédents', 'whispa' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next more pull-right"><?php previous_posts_link( __( 'Articles suivants <span class="meta-nav">&raquo;</span>', 'whispa' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'whispa_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
*
* @since WHISPA 0.1
*/
function whispa_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'whispa' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'whispa' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'whispa' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'whispa_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own whispa_entry_meta() to override in a child theme.
 *
 * @since WHISPA 0.1
 */
// @Hadjara
function whispa_entry_meta() {
	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		whispa_entry_date();

	// Translators: used between list items, there is a space after the comma.
	// $categories_list = get_the_category_list( __( ', ', 'whispa' ) );
	// if ( $categories_list ) {
	// 	echo ' dans <span class="categories-links">' . $categories_list . '</span>';
	// }

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( ' par <span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'whispa' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;

if ( ! function_exists( 'whispa_entry_footer_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own whispa_entry_meta() to override in a child theme.
 *
 * @since WHISPA 0.1
 */
// @Hadjara
function whispa_entry_footer_meta() {

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'whispa' ) );
	if ( $tag_list ) {
		echo 'Tags : <span class="tags-links">' . $tag_list . '</span>';
	}
}
endif;

if ( ! function_exists( 'whispa_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own whispa_entry_date() to override in a child theme.
 *
 * @since WHISPA 0.1
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function whispa_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'whispa' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'whispa' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;

// Change excerpt length to 20 words using excerpt_length filter
// @Hadjara
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Replace the excerpt "more" text by a link
// @Hadjara
function whispa_excerpt_more($more) {
       global $post;
	return '.</p><p class="more"><a href="'. get_permalink($post->ID) . '">' . __("Lire la suite &raquo;", "whispa") . '</a>';

}
add_filter('excerpt_more', 'whispa_excerpt_more');

if ( ! function_exists( 'whispa_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since WHISPA 0.1
 */
function whispa_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since WHISPA 0.1
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'whispa_attachment_size', array( 750, 750 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since WHISPA 0.1
 *
 * @return string The Link format URL.
 */
function whispa_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Active widgets in the sidebar to change the layout and spacing.
 * 3. When avatars are disabled in discussion settings.
 *
 * @since WHISPA 0.1
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function whispa_body_class( $classes ) {
	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() )
		$classes[] = 'sidebar';

	if ( ! get_option( 'show_avatars' ) )
		$classes[] = 'no-avatars';

	return $classes;
}
add_filter( 'body_class', 'whispa_body_class' );

/**
 * Adjust content_width value for video post formats and attachment templates.
 *
 * @since WHISPA 0.1
 */
function whispa_content_width() {
	global $content_width;

	if ( is_attachment() )
		$content_width = 750;
	elseif ( has_post_format( 'audio' ) )
		$content_width = 500;
}
add_action( 'template_redirect', 'whispa_content_width' );

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since WHISPA 0.1
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function whispa_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'whispa_customize_register' );

/**
 * Enqueue analytics script
 *
 * @since Whispa 1.0
 */
function whispa_analytics() {
  ?>
  <script type="text/javascript">

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-66527126-1', 'auto');
    ga('send', 'pageview');

  </script>
  <?php

}

add_action('wp_head', 'whispa_analytics');
