<?php 

/**
 * Custom Template Tags
 * 
 * @package Aquila WordPress Theme
 */

 function get_custom_post_thumbnail($post_id, $size = 'aquila-thumbnail-sm', $additional_attr = []){ 

    if(null == $post_id){ 
        $post_id = get_the_ID();
    }

    if(has_post_thumbnail($post_id)){ 
        $default_attributes = [
            'loading' => 'lazy',  
        ];
        $attributes = array_merge($additional_attr, $default_attributes);

        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id($post_id ),
            $size,
            $attributes
        );
    }

    return $custom_thumbnail;
 }

 function the_custom_post_thumbnail($post_id, $size = 'aquila-thumbnail-sm', $additional_attr = []){
     echo get_custom_post_thumbnail($post_id, $size, $additional_attr);
 }