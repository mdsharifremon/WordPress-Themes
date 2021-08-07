<?php

/**
 * Post Entry Header
 * 
 * @package Aquila WordPress Theme
 */

$the_post_id   = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
$hide_title = get_post_meta($the_post_id, '_hide_page_title', true);
?>

<header class="entry-header">
    <?php
    // Featured image
    if ($has_post_thumbnail):
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
    <h4 class="mt-3 px-3">
        <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php echo esc_html(the_title()); ?>
        </a>
    </h4>
</header>