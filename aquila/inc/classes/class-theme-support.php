<?php 

/**
 * Class Theme Support
 * 
 * This is responsible for theme support
 * 
 * @package Aquila WordPress Theme
 */

namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;


class Theme_Support{
    use Singleton;

    public function __construct(){
        add_action('after_setup_theme', array($this, 'setup_theme'));
    }

    public function setup_theme()
    {
        /** automatic feed link*/
        add_theme_support('automatic-feed-links');

        /** tag-title **/
        add_theme_support('title-tag');

        /** post thumbnail **/
        add_theme_support('post-thumbnails');

        /** Custom Thumbnail Size **/
        add_image_size('aquila-thumbnail-lg', 768, 450, false);
        add_image_size('aquila-thumbnail-md', 550, 350, false);
        add_image_size('aquila-thumbnail-sm', 350, 233, false);

        /** refresh widgest **/
        add_theme_support('customize-selective-refresh-widgets');

        /** HTML5 support **/
        add_theme_support('html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'script',
            'style'
        ));
        /** post formats */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'gallery',
            'video',
            'audio',
            'link',
            'quote',
            'status'
        ));

        /** Editor Support */
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_theme_support('editor-styles');
        add_editor_style('assets/build/css/editor.css');

        /** Remove Core Block Pattern */
        // remove_theme_support('core-block-patterns');

        /** custom background **/
        $bg_defaults = array(
            'default-image'          => '',
            'default-preset'         => 'default',
            'default-size'           => 'cover',
            'default-repeat'         => 'no-repeat',
            'default-attachment'     => 'scroll',
        );
        add_theme_support('custom-background', $bg_defaults);

        /** custom header **/
        $header_defaults = array(
            'default-image'          => '',
            'width'                  => 300,
            'height'                 => 60,
            'flex-height'            => true,
            'flex-width'             => true,
            'default-text-color'     => '#000',
            'header-text'            => true,
            'uploads'                => true,
        );
        add_theme_support('custom-header', $header_defaults);

        /** custom log **/
        add_theme_support('custom-logo', array(
            'height'      => 80,
            'width'       => 220,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        ));

        /** Set Max Content Width */
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1240;
        }
    }

}