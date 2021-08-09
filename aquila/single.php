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
                <?php if (have_posts()) : ?>
                    <div class="col-md-8 ">
                        <div class="rounded overflow-hidden shadow-sm">
                            <?php while (have_posts()) : the_post();  ?>
                                <?php get_template_part('template-parts/content/single-post'); ?>
                            <?php endwhile; ?>
                            <div class="pagination px-3 mb-3 d-flex justify-content-between text-primary">
                                <span class="previous-post">
                                    <?php previous_post_link("&larr; %link &nbsp;"); ?>
                                </span>
                                <span class="next-post">
                                    <?php next_post_link("&nbsp; %link &rarr;"); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="rounded overflow-hidden shadow-sm px-3">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="col-12 py-6">
                        <h2>No content found</h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>