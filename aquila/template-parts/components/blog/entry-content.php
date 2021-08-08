<?php

/**
 * Template for entry content
 * 
 * To be used in wordpress loop
 * 
 * @package Aquila WordPress Theme
 */
?>

<?php

    if(is_single()){
        the_content(
            sprintf(
                wp_kses(
                        __('Continue reading %s <span class="meta-nav">&rarr;</span>', TEXT_DOMAIN),
                        [
                            'span' => [ 'class' => []]
                        ]
                        ),
                    the_title('<span class="screen-reader">"', '"</span>', false)
            )
        );
        wp_link_pages( [ 
                'before' => '<div class="page-links">' . esc_html('Pages:', TEXT_DOMAIN),
                'after' => '</div>',
        ] );
    }else{
      
        aquila_the_excerpt(150);
    }

   echo aquila_excerpt_more();
?>
