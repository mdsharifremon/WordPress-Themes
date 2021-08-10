<?php 
/**
 * Aquila Theme Class
 * 
 * @package Aquila WordPress Theme
 */

namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;

 class AQUILA_THEME
 {
   use Singleton;

   protected function __construct(){ 
       // Load Classes 
        Assets::get_instance();
        Menus::get_instance();
        Admin::get_instance();
        Meta_Boxes::get_instance();
        Clock_Widgets::get_instance();
        Sidebars::get_instance();
        Block_Pattern::get_instance();
        Theme_Support::get_instance();

   }
 }