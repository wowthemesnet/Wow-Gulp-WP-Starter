<?php 
//-----------------------------------------------------
// Setup
//-----------------------------------------------------
if ( ! function_exists( 'wowgulpwpstarter_setup' ) ) :

	function wowgulpwpstarter_setup() {
		if ( ! isset( $content_width ) ) {
			$content_width = 730; /* pixels */
		}
		load_theme_textdomain( 'wowgulpwpstarter', get_template_directory() . '/languages' );
		
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		
		register_nav_menus( array(
		'extramenu' => 'Main Menu',
		) );
		
	}
	endif;
	add_action( 'after_setup_theme', 'wowgulpwpstarter_setup' );

//-----------------------------------------------------
// Scripts & Styles
//-----------------------------------------------------
if ( ! function_exists( 'wowgulpwpstarter_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function wowgulpwpstarter_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'wowgulpwpstarter-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'wowgulpwpstarter-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'wowgulpwpstarter_scripts' ).

add_action( 'wp_enqueue_scripts', 'wowgulpwpstarter_scripts' );

//-----------------------------------------------------
// Require
//-----------------------------------------------------
require_once get_template_directory() . '/inc/bootstrap/wp_bootstrap_pagination.php';
require_once get_template_directory() . '/inc/bootstrap/wp_bootstrap_navwalker.php';