<?php

/**
 * Blog Post Content Template
 * 
 * @package Aquila WordPress Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
    <div class="rounded overflow-hidden shadow">
        <div class="p-0">
            <?php get_template_part('template-parts/components/blog/entry-header'); ?>
        </div>
        <div class="post-meta my-2 px-3">
            <?php get_template_part('template-parts/components/blog/entry-meta'); ?>
            <hr class="my-0 mb-1">
            <?php get_template_part('template-parts/components/blog/entry-footer'); ?>
        </div>
        <div class="post-body px-3 mb-3">
            <?php get_template_part('template-parts/components/blog/entry-content'); ?>
        </div>
    </div>
</article>