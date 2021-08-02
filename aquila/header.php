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
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
    <header id="header">
        Header
    </header>