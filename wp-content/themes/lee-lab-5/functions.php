<?php
/**
 * Lee Lab 5 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lee_Lab_5
 */

if ( ! function_exists( 'lee_lab_5_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lee_lab_5_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Lee Lab 5, use a find and replace
		 * to change 'lee-lab-5' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lee_lab_5', get_template_directory() . '/languages' );

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

		add_image_size( 'lee-lab-5-full-bleed', 2000, 1200, true );

		add_image_size('lee-lab-5-index-img', 800, 450, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'lee-lab-5' ),
            'social' => esc_html__( 'Social Media Menu', 'lee-lab-5' ),
//            'secondary' => esc_html__( 'Secondary', 'lee-lab-5' ),
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
		add_theme_support( 'custom-background', apply_filters( 'lee_lab_5_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for custom logo - ch4.4
        add_theme_support( 'custom-logo', array(
            'width' => 90,
            'height' => 90,
            'flex-width' => true,
        ));

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lee_lab_5_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lee_lab_5_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lee_lab_5_content_width', 640 );
}
add_action( 'after_setup_theme', 'lee_lab_5_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lee_lab_5_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lee-lab-5' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lee-lab-5' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	//challenge 12-03
    register_sidebar( array(
        'name'          => esc_html__( 'Page Sidebar', 'lee-lab-5' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add page sidebar widgets here.', 'lee-lab-5' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

	//ch10-6, challenge
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widgets', 'lee-lab-5' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add footer widgets here.', 'lee-lab-5' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    //for Assignment2, REQ-001
    register_sidebar( array(
        'name'          => esc_html__( 'Category Sidebar', 'lee-lab-5' ),
        'id'            => 'sidebar-3',
        'description'   => esc_html__( 'Add page sidebar widgets here.', 'lee-lab-5' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'lee_lab_5_widgets_init' );


/**
 * Register custom fonts.
 */
function lee_lab_5_fonts_url() {
    $fonts_url = '';

    /*
     * Translators: If there are characters in your language that are not
     * supported by Libre Franklin, translate this to 'off'. Do not translate
     * supported by Source Sans Pro and PT Serif, translate this to 'off'. Do not translate
     * into your own language.
     */
    $source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'lee_lab_5');
    $pt_serif = _x( 'on', 'PT Serif font: on or off', 'lee_lab_5');
    $font_families = array();

    $libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'lee_lab_5' );

    if ( 'off' !== $source_sans_pro ) {
        $font_families[] = 'Source Sans Pro:400,400i,700,900';
    }

    if ( 'off' !== $pt_serif ) {
        $font_families[] = 'PT Serif:400,400i,700,700i';
    }

    if ( in_array( 'on', array($source_sans_pro, $pt_serif ) ) ) {

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $fonts_url );
}

//Preconnect custom web fonts for improved performance
/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function lee_lab_5_resource_hints( $urls, $relation_type ) {
    if ( wp_style_is( 'lee_lab_5-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}
add_filter( 'wp_resource_hints', 'lee_lab_5_resource_hints', 10, 2 );



/**
 * Enqueue scripts and styles.
 */
function lee_lab_5_scripts() {
    //Enque google fonts: source sans pro and pt serif
    wp_enqueue_style('lee-lab-5-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i|Source+Sans+Pro:400,400i,600,900' );

	wp_enqueue_style( 'lee-lab-5-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lee-lab-5-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

	wp_localize_script('lee-lab-5-navigation', 'lee_lab_5ScreenReaderText', array(
	    'expand' => __( 'Expand child menu', 'lee-lab-5'),
        'collapse' => __( 'Collapse child menu', 'lee-lab-5'),
    ));

	wp_enqueue_script( 'lee-lab-5-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20190201', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lee_lab_5_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

///**
// * Custom functions that act independently of the theme templates.
// */
//require get_template_directory() . '/inc/extras.php';

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
