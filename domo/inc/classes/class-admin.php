<?php

/**
 * Aquila Admin Setting 
 * 
 * @package Admin WordPress Theme
 */

 namespace AQUILA_THEME\Inc;
 use AQUILA_THEME\Inc\Traits\Singleton;

 class Admin{ 

    use Singleton;
    public function __construct(){
        /* Actions */
        add_action('admin-init', [$this, 'admin_settings']);
    }

    public function admin_settings(){
        $args = array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => NULL,
        );
        register_setting('my_options_group', 'my_option_name', $args);
        add_settings_section(
            'eg_setting_section',
            'Example settings section in reading',
            'eg_setting_section_callback_function',
            'reading'
        );
        function eg_setting_section_callback_function($arg)
        {

            echo '<p>id: ' . $arg['id'] . '</p>';
            echo '<p>title: ' . $arg['title'] . '</p>';
            echo '<p>callback: ' . $arg['callback'] . '</p>';
        }
    }
 }






?>