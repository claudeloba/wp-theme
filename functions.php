<?php

function register_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.0', 'all');

    // Enqueue your own style.css file
    wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

?>
