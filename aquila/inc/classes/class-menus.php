<?php
/** 
 * Register Menus
 * 
 * @package Aquila WordPress Theme
 */

namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;
 class Menus{ 
     use Singleton;
     public function __construct(){
        /**  Actions */
        add_action('init', [$this, 'register_menu']);
     }

     /* Register Menu */
     public function register_menu(){
         register_nav_menus(
             array(
                 "aquila-header-menu" => esc_html__('Header Menu', 'Aquila'),
                 "aquila-footer-menu" => esc_html__('Footer Menu', 'Aquila')
             )
          );
     }
 
     /* Get Menu id */
     public function get_menu_id($location){ 
         // Get Menu Locations
         $locations = get_nav_menu_locations();

         // Get Menu id by location
         $menu_id = $locations[$location];

         return ! empty($menu_id) ? $menu_id : '';
     }

     /* Get Child Menu */
     public function get_child_menu_items($menu_array, $parent_id){ 
         $child_menu = [];

         /** 
         * Loop through the whole menu
         * Find the child menu items
         * Where the parent id same as $parent_id
         */
         if(!empty($menu_array) && is_array($menu_array)){
             foreach($menu_array as $menu){ 
                if(intval($menu->menu_item_parent) === $parent_id){ 
                    $child_menu[] = $menu;
                }
             }
         }
        return $child_menu;

     }


 }

 ?>