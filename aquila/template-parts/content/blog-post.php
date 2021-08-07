<?php

/**
 * Blog Post Content Template
 * 
 * @package Aquila WordPress Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
    <div class="rounded border-gray overflow-hidden shadow">
        <div class="p-0">
            <?php get_template_part('template-parts/components/blog/entry-header'); ?>
        </div>
        <div class="post-body px-3 mb-3">
            <?php get_template_part('template-parts/components/blog/entry-meta'); ?>
            <?php get_template_part('template-parts/components/blog/entry-content'); ?>
        </div>
        <div class="post-footer px-3 py-3">
            <?php get_template_part('template-parts/components/blog/entry-footer'); ?>
        </div>
    </div>
</article>