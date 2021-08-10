<?php 

/** 
* Enqueue Style and Scripts 
* 
* @package Aquila WordPress Theme
*/

namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;

class Assets{ 
    use Singleton;

    protected function __construct()
    {
        // All actions && filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);

        /** 
         * Remove Gutenberg Block Styles 
            function aquila_remove_block_styles(){
                wp_dequeue_style('wp-block-library');
                wp_dequeue_style('wp-block-library-theme');
                wp_dequeue_style('wp-block-style'); // Remove WooCommerce Block Css
            }
            add_action('wp_enqueue_scripts', 'aquila_remove_block_styles', 100);
         */
    }

    public function register_styles()
    {
        // Main Stylesheet
        wp_register_style("Main Style", AQUILA_BUILD_CSS_URI . '/main.css', [], filemtime(AQUILA_BUILD_CSS_PATH . '/main.css'), 'all');

        // Custom StyleSheet
        wp_register_style('Custom Style', get_stylesheet_uri(), [], filemtime(get_template_directory() . './style.css'), 'all');

        // Enqueue Styles
        wp_enqueue_style('Main Style');
        wp_enqueue_style('Custom Style');
    }

    public function register_scripts()
    {
        // Main Script
        wp_register_script('Main Script', AQUILA_BUILD_JS_URI . '/main.js', ['jquery'], filemtime(AQUILA_BUILD_JS_PATH . '/main.js'), true);

        // Enqueue Scripts
        wp_enqueue_script('Main Script');
    }
}