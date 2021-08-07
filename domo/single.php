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
        <?php if(have_posts()): ?>
            <div class="container">
              <?php the_post(); ?>
                    <h2 class="mb-2">
                    <a class="link" href="<?php echo esc_url(the_permalink());?>">
                            <?php echo esc_html(the_title());?>
                    </a>
                </h2>
                <?php
                    if(has_post_thumbnail()){ 
                        the_post_thumbnail();
                    }
                ?>
                <p class="lead">
                    <?php echo esc_html(the_excerpt());?>
                </p>
            </div>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>