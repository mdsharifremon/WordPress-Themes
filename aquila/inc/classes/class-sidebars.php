<?php 


/**
 * Theme Sidebars
 * 
 * 
 * @package Aquila WordPress Theme
 */

 namespace AQUILA_THEME\Inc;
 use AQUILA_THEME\Inc\Traits\Singleton;

 class Sidebars{
     use Singleton;

     public function __construct(){
         /** Actions */

         add_action('widgets_init', [$this, 'register_sidebars']);
         add_action('widgets_init', [$this, 'register_clock_widget']);
     }

     function register_sidebars(){
         register_sidebar( [ 
                'name'          => __('Sidebar', TEXT_DOMAIN),
                'id'            => 'sidebar-1',
                'description'   => __('Widgets in this area will be shown in post page and single page sidebar', TEXT_DOMAIN),
                'before_widget' => '<div id="%1$s" class="widgets %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widgets-title">',
                'after_title'   => '</h3>'
         ]);

        register_sidebar([
                'name'          => __('Footer Sidebar', TEXT_DOMAIN),
                'id'            => 'sidebar-2',
                'description'   => __('Widgets in this area will be shown in post page and single page footer', TEXT_DOMAIN),
                'before_widget' => '<div id="%1$s" class="widgets %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widgets-title">',
                'after_title'   => '</h3>'
        ]);
     }

     function register_clock_widget(){
        register_widget('AQUILA_THEME\Inc\Clock_Widgets');
     }
 }