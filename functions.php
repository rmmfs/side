<?php
/**
 * hpesidebyside functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hpesidebyside
 */


if ( ! function_exists( 'hpesidebyside_setup' ) ) :

function hpesidebyside_setup() {

	load_theme_textdomain( 'hpesidebyside', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'main-menu' => __( 'Main Menu' ),
		'parceiros-menu' => __( 'Parceiros Menu' )
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	add_theme_support( 'custom-background', apply_filters( 'hpesidebyside_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'hpesidebyside_setup' );


function hpesidebyside_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hpesidebyside' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hpesidebyside' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hpesidebyside_widgets_init' );


// Enqueue scripts and styles
function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');

function hpesidebyside_scripts() {

    // main styles
	
    // underscore based
    wp_enqueue_style( 'hpe-with-you', get_stylesheet_uri() );

    // our
    wp_enqueue_style( 'hpe-with-me', get_template_directory_uri() . '/styles/main.css' );

    // components
    wp_enqueue_style( 'hpe-with-plugins', get_template_directory_uri() . '/styles/components.css' );

    // rewrite
    wp_enqueue_style( 'hpe-rewrite', get_template_directory_uri() . '/styles/_styles.css' );

    // media queries
    wp_enqueue_style( 'hpe-media', get_template_directory_uri() . '/styles/media.css' );


    // main scripts

    wp_register_script('modernizr', get_template_directory_uri() . '/scripts/modernizr.js', array('jquery'), '', false);
    wp_enqueue_script( 'modernizr');

    //wp_enqueue_script('main', get_template_directory_uri() . '/scripts/main.js', array(''), '', false);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    // single pages (styles + scripts)

    // 1. login
	if ( is_page( '6' ) ) {
		wp_enqueue_script( 'access', get_template_directory_uri() . '/scripts/access.js', array(), '', false);
	}

    // 2. login + campanhas
	if ( is_page( '6' ) || is_page( '16' ) ) {
		wp_enqueue_script( 'modal', get_template_directory_uri() . '/scripts/modal.js', array(), '', false);
	}

    // 3. product single pages: microserver | ml10 | ml310 | ml30 | ml150 | ml350 | dl60 | dl80 | dl120 | dl160 | dl180 | dl360 | dl380 | bl460 | sistemas | support | foundation | standard | essentials | datacenter

	if ( is_page( '22' ) || is_page( '24' ) || is_page( '26' ) || is_page( '28' ) || is_page( '30' ) || is_page( '32' ) || is_page( '34' ) || is_page( '36' ) || is_page( '38' ) || is_page( '40' ) || is_page( '42' ) || is_page( '44' ) || is_page( '46' ) || is_page( '48' ) || is_page( '50' ) || is_page( '52' ) || is_page( '54' ) || is_page( '56' ) || is_page( '58' ) || is_page( '60' ) ) {
		wp_enqueue_script( 'tabs', get_template_directory_uri() . '/scripts/tabs.js', array(), '', false);
		wp_enqueue_script( 'scroll1', get_template_directory_uri() . '/scripts/scroll.js', array(), '', true);
	}

    // produtos
	if ( is_page( '12' ) ) {
		wp_enqueue_script( 'scroll2', get_template_directory_uri() . '/scripts/scroll.js', array(), '', true);
	}

    // premios + subcategories: adrenalina | espetáculos | gadgets | lazer | restaurantes | vouchers | aventura | cozinha | dia-a-dia | escritório | gamer | lar
	if ( is_page( '14' ) || is_page( '62' ) || is_page( '64' ) || is_page( '66' ) || is_page( '68' ) || is_page( '70' ) || is_page( '72' )|| is_page( '74' ) || is_page( '76' ) || is_page( '78' ) || is_page( '80' ) || is_page( '82' ) || is_page( '84' ) ) {
		wp_enqueue_script( 'clicks', get_template_directory_uri() . '/scripts/clicks.js', array(), '', true);
	}
}

add_action( 'wp_enqueue_scripts', 'hpesidebyside_scripts' );



// configuration values

// customize the footer message in admin panel
function wpfme_footer_admin () {
	echo '';
}
add_filter('admin_footer_text', 'wpfme_footer_admin');


// add excerpts to pages
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

// remove code from the <head>
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_filter( 'the_content', 'capital_P_dangit' );
remove_filter( 'the_title', 'capital_P_dangit' );
remove_filter( 'comment_text', 'capital_P_dangit' );


// insert multimedia witout compression
add_filter('jpeg_quality', function($arg){return 100;});

// remove double line-breaks in the text into HTML paragraphs
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


// removes the comment inline css
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );


// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove unneeded thumbnails
update_option( 'thumbnail_size_h', 0 );
update_option( 'thumbnail_size_w', 0 );
update_option( 'medium_size_h', 0 );
update_option( 'medium_size_w', 0 );
update_option( 'large_size_h', 0 );
update_option( 'large_size_w', 0 );

// Remove query string from static files
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


// load contact form 7 only in specific pages
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

function load_plugins_conditionally() {
	if ( is_page('20') || is_page('') ) {

        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
      			wpcf7_enqueue_scripts();
      			wpcf7_enqueue_styles();
        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_plugins_conditionally' );

