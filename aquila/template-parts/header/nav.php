<?php

/**
 * Aquila Navigation Bar
 * @package Aquila WordPress Theme
 */

// Get Menu Id
$menu_class = \AQUILA_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('aquila-header-menu');
$footer_menu_id = $menu_class->get_menu_id('aquila-footer-menu');
$header_menu = wp_get_nav_menu_items($header_menu_id);
$footer_menu = wp_get_nav_menu_items($footer_menu_id);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url(bloginfo('url')) ?>">
            <?php
            if (has_custom_logo()):
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id, 'full'); 
            ?>
            <img class="logo" style="width:200px; height:60px;" src="<?php echo $image[0]; ?>">
            <?php else: ?>
                <h3 class='brand-name text-primary'><?php esc_html_e(bloginfo('name')); ?></h3>
            <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (!empty($header_menu) && is_array($header_menu)) :
                    foreach ($header_menu as $menu_item) :
                        if (!$menu_item->menu_item_parent) :
                            $child_menu_items = $menu_class->get_child_menu_items($header_menu, $menu_item->ID);
                            $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                            if (!$has_children) :
                ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php ?>" 
                                    aria-current="page" href="<?php echo esc_url($menu_item->url); ?>">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach($child_menu_items as $child_menu_item): ?>
                                        <li>
                                           <a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>">
                                                <?php echo esc_html($child_menu_item->title);?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>