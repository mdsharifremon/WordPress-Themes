<?php

/**
 * Post Entry Header
 * 
 * @package Aquila WordPress Theme
 */

$the_post_id   = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
$hide_title = get_post_meta($the_post_id, '_hide_page_title', true);
$heading_class = !(empty($hide_title)) && 'yes' === $hide_title ? 'hide' : '';
?>

<header class="entry-header">
    <?php
    // Featured image
    if ($has_post_thumbnail) :
    ?>
        <div class="entry-image">
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php
                the_custom_post_thumbnail(
                    $the_post_id,
                    'aquila-thumbnail-sm',
                    [
                        'sizes' => '(max-width: 350px) 350px, 350px',
                        'class' => 'attachment-featured-large size-featured-image img-fluid'
                    ]
                )
                ?>
            </a>
        </div>
    <?php endif; ?>
    <div class='heading'>
        <?php if (is_single() || is_page()) :
            printf(
                "<h1 class='entry-title mt-3 px-3 %s'>%s</h1>",
                esc_attr($heading_class),
                wp_kses_post(get_the_title())
            ); 
        else:
            printf(
                "<h3 class='entry-title mt-3 px-3'><a class='link text-dark' href='%s'>%s</a></h3>",
                esc_url(get_the_permalink()),
                wp_kses_post(get_the_title())
            );
         endif; ?>
    </div>
</header>