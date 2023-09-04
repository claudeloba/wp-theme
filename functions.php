<?php

function register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.0', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css', array('bootstrap-css'), $version, 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

function register_scripts() {
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array(), '5.2.2', true);
    wp_enqueue_script('main-js', get_template_directory_uri(), '/assets/javascript/bold-and-bright.js', array(), '1', true);
    
}

add_action('wp_enqueue_scripts', 'register_scripts');

?>
