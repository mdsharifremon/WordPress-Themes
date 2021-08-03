<?php

/**
 * Site Header
 * @package Aquilla WordPress Theme 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes('language') ?>>

<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:author" content="<?php echo bloginfo('author'); ?>">
    <meta name="og:url" content="<?php echo bloginfo('url'); ?>">
    <meta name="og:description" content="<?php echo bloginfo('description'); ?>">
   <?php if(has_site_icon()){get_site_icon_url();} ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    if (function_exists(wp_body_open())) {
        wp_body_open();
    };
    ?>

    <div id="page" class="site">
        <header id="musthead" class="site-header" role="site-banner">
        
        <?php 
           // Load Navigation parts 
           get_template_part('template-parts/header/nav');
        ?>
        </header>
    <div id="content" class="site-content">
 