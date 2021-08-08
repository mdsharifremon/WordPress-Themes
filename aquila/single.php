<?php

/**
 * Single Post Page
 * 
 * @package Aquilla WordPress Theme 
 */
?>

<?php get_header(); ?>

<div class="primary">
    <main id="main" class="site-main mt-5" role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content/single-post'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 px-3 shadow-sm rounded">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>