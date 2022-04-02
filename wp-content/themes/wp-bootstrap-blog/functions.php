<?php

function wp_bootstrap_blog_add_css_js() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0', true);
    wp_enqueue_script('app-js',  get_template_directory_uri() . '/js/app.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wp_bootstrap_blog_add_css_js');

// Navbar Custom
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Agregar sidebar
function wp_bootstrap_blog_widgets() {
    register_sidebar(
        array(
            'id'            => 'widget-right',
            'name'          => __( 'Widget Derecha' ),
            'description'   => __( 'Muestra aqui las pubicidades' ),
            'before_widget' => '<div class="card-body">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4><hr>',
        )
    );
}
add_action('widgets_init', 'wp_bootstrap_blog_widgets');

// Registrar menus
function wp_bootstrap_blog_register_my_menus() {
    register_nav_menus(
      array(
        'menu-principal' => __( 'Menu Superior' )
       )
     );
}
add_action( 'init', 'wp_bootstrap_blog_register_my_menus' );


function wp_bootstrap_blog_setup() {
    // Soporte imagenes destacadas
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
    }

    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wp_bootstrap_blog_setup');