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
        // Load Class  
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        // All actions && filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // Bootstrap Style
        wp_register_style("Bootstrap", AQUILA_DIR_URI . "/assets/src/library/css/Bootstrap.css", [], filemtime(AQUILA_DIR_PATH . "/assets/src/library/css/Bootstrap.css"), 'all');

        // Custom Stylesheet
        wp_register_style('Main Style', get_stylesheet_uri(), [], filemtime(get_template_directory() . './style.css'), 'all');

        // Enqueue Styles
        wp_enqueue_style('Bootstrap');
        wp_enqueue_style('Main Style');
    }

    public function register_scripts()
    {
        // Bootstrap Script
        wp_register_script('Bootstrap Script', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

        // Main Script
        wp_register_script('Main Script', AQUILA_DIR_URI . '/assets/src/js/main.js', [], filemtime(AQUILA_DIR_PATH . '/assets/src/js/main.js'), true);


        // Enqueue Scripts
        wp_enqueue_script('Bootstrap Script');
        wp_enqueue_script('Main Script');
    }
}