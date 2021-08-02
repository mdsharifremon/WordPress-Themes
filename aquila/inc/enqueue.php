<?php

/**
 * Enqueue Aquilla Style And Scripts
 * @package Aquilla WordPress Theme
 */


function aquilla_add_scripts()
{

    // Register Aquilla  styles
    wp_register_style('Main Style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');


    // Register Aquilla Scripts
    wp_register_script('Main Script', get_template_directory_uri() . '/assets/src/js/main.js', [], filemtime(get_template_directory() . '/assets/src/js/main.js'), true);

    // Enqueue Styles
    wp_enqueue_style('Main Style');

    // Enqueue Scripts
    wp_enqueue_script('Main Script');
}


add_action('wp_enqueue_scripts', 'aquilla_add_scripts');