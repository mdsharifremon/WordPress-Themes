<?php

/**
 * Index file
 * @package Aquila WordPress Theme 
 */

?>
<?php get_header(); ?>

<main id="main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template_parts/content/blog-post', get_post_format());
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>