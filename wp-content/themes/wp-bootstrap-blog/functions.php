<?php

function add_css_js() {
    // CSS
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    // JS
    // wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js', array('jquery'), '2.9.2', true);
}
add_action('wp_enqueue_scripts', 'add_css_js');