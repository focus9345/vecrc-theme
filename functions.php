<?php
/**
 * vecrc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VECRC
 */

if ( ! function_exists( 'vecrc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vecrc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vecrc, use a find and replace
		 * to change 'vecrc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vecrc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
        /* Original menu replaced for Bootstrap
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'vecrc' ),
		) );
        */
        // Bootstrap supported menu
        // Register Custom Navigation Walker
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
        
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'vecrc' ),
        ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'vecrc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 60,
			'width'       => 300,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'vecrc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vecrc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'vecrc_content_width', 640 );
}
add_action( 'after_setup_theme', 'vecrc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vecrc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vecrc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vecrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'meeting-min', 'vecrc' ),
		'id'            => 'meeting-min',
		'description'   => esc_html__( 'Only  Meeting Minuets!', 'vecrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'home-top', 'vecrc' ),
		'id'            => 'home-top',
		'description'   => esc_html__( 'Add content for home page top banner section.', 'vecrc' ),
		'before_widget' => '<div id="%1$s" class="card-body %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="card-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'callout-age0', 'vecrc' ),
		'id'            => 'callout-age0',
		'description'   => esc_html__( 'Home page callout for ages 0 to 2.', 'vecrc' ),
		'before_widget' => '<div id="%1$s" class="card-body %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="card-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'callout-age3', 'vecrc' ),
		'id'            => 'callout-age3',
		'description'   => esc_html__( 'Home page callout for ages 3 to 4.', 'vecrc' ),
		'before_widget' => '<div id="%1$s" class="card-body %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="card-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'callout-age5', 'vecrc' ),
		'id'            => 'callout-age5',
		'description'   => esc_html__( 'Home page callout for ages 5 and up.', 'vecrc' ),
		'before_widget' => '<div id="%1$s" class="card-body %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="card-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'mission-hp', 'vecrc' ),
		'id'            => 'mission-hp',
		'description'   => esc_html__( 'Widget for the home page mission statement.', 'vecrc' ),
		'before_widget' => '<div id="%1$s" class="card-body %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="card-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer-widget-left', 'vecrc' ),
		'id'            => 'footer-widget-left',
		'description'   => esc_html__( 'Add widgets here.', 'vecrc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<p class="footer-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer-widget-center', 'vecrc' ),
		'id'            => 'footer-widget-center',
		'description'   => esc_html__( 'Add widgets here.', 'vecrc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<p class="footer-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer-widget-right', 'vecrc' ),
		'id'            => 'footer-widget-right',
		'description'   => esc_html__( 'Add widgets here.', 'vecrc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<p class="footer-title">',
		'after_title'   => '</p>',
	) );
}
add_action( 'widgets_init', 'vecrc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vecrc_scripts() {

    // Style Sheets
    wp_enqueue_style( 'fontAwesome-css', '//use.fontawesome.com/releases/v5.0.13/css/all.css' );
    wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    // Local Style Sheet
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Javascript
    wp_enqueue_script( 'google-fonts', '//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array(), '1.6.26', true );
    wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/releases/v5.0.9/js/all.js', array(), '5.0.9', true );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery'), '1.14.0', true );
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('jquery','popper'), '4.1.0', true );
    // Local Javascripts
	wp_enqueue_script( 'vecrc-js', get_template_directory_uri() . '/js/script.js', array('google-fonts','jquery'), '', true );


//NEW MENU ISSUE

    // Style Sheets
	
	//wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array(), '5.15.2', 'all');
    //wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '5.0.0', 'all' );
    // Local Style Sheet
	//wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Javascript
    //wp_enqueue_script( 'google-fonts', '//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array(), '1.6.26', true );
	//wp_enqueue_script( 'fontawesome-js', get_template_directory_uri() . '/assets/fontawesome/js/all.min.js',  array(), '5.15.2', true );
    //wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/popper/popper.min.js', array('jquery'), '2.5.4', true );
    //wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('popper'), '5.0.0', true );
    // Local Javascripts
	//wp_enqueue_script( 'vecrc-js', get_template_directory_uri() . '/js/script.js', array('google-fonts','jquery'), '', true );

    // Not sure yet what these do
	wp_enqueue_script( 'vecrc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vecrc_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* Added to Customeze Read more *
function new_excerpt_more( $more ) {
	global $post;
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'vecrc') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
*/