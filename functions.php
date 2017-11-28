<?php

function csm_enqueue_style() {
    // -- Normalize CSS
    wp_enqueue_style( 'csmnormalize', get_template_directory_uri().'/assets/css/normalize.css', false );
    
    // -- WP Style
    wp_enqueue_style( 'csmcss', get_stylesheet_uri(), flase);

    // -- Font-Awesome
    wp_enqueue_style( 'fontawesome-cdn', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0');

    // -- Font
    wp_enqueue_style( 'latofont', '//fonts.googleapis.com/css?family=Lato', false );

    // -- Bootstrap
    wp_enqueue_style( 'bootsrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false );
}

function csm_enqueue_script() {
	wp_enqueue_script( 'my-js', 'filename.js', false );
}

add_action( 'wp_enqueue_scripts', 'csm_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'csm_enqueue_script' );


 // ------------------------------- FONCTIONNALITÉ DU THEME --------------------------------------------------------

// -- Image de logo Personnalisable
add_theme_support( 'custom-logo', array (
    'height' => 50,
    'width' => 200,
    'flex-height' => false,
    'flex-width' => false,
    'header-text' => array('site-title', 'site-description')
));

// -- MENU 
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// -- Image et Bandeau

$args = array (
    'width' => 1600,
    'height' => 359,
    'default-image' => get_template_directory_uri() . 
    '/assets/img/bandeau-saint-marc.jpg',
    'uploads' => true
);

add_theme_support('custom-header', $args);

register_default_headers( array(
    'BandeauDuHaut' => array (
        'url' => '%s/assets/img/bandeauDuHaut.jpg',
        'thumbnail_url' => '%s/assets/img/bandeauDuHaut.jpg',
        'description' => __('Proposition 1', 'isen')
    ),
    'BandeauCsm' => array (
        'url' => '%s/assets/img/bandeau-saint-marc.jpg',
        'thumbnail_url' => '%s/assets/img/bandeau-saint-marc.jpg',
        'description' => __('Proposition 2', 'csm')
    ),
));

add_theme_support('custom-background');

// -- Post Type

add_action('init', 'create_post_type');
add_theme_support( 'post-thumbnails' );
add_image_size( 'accueil-size', 500, 311.89, true );

function create_post_type() {
    register_post_type( 'accueil-news', array (
        'labels' => array(
            'name'         => __( 'Accueil News' ),
            'singular_name' => __( 'Accueil News' )
        ),
        'public'      => true,
        'has_archive' => false,
        'supports'    => array( 'title', 'editor','thumbnail') 
    ));
}

// -- Widget 

/**
 * Register our sidebars and widgetized areas.
 *
 */
add_action( 'widgets_init', 'arphabet_widgets_init' ); 
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Contact',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
            'name'          => 'formations',
            'id'            => 'formations',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ) );

}

    
 

?>
