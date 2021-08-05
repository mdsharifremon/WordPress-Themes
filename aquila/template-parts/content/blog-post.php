<?php

/**
 * Blog Post Content 
 * 
 * @package Aquila WordPress Theme
 */
?>
<article class="article" id="site_article">
    <?php
    the_title(sprintf('<h2 class="entry-title default-max-width"><a href="%s">', esc_url(get_permalink())), '</a></h2>');
    ?>
    <p><?php the_desc(); ?></p>
</article>