<?php
/**
 * Content None Template
 * This template is to show message no content/post/blog found
 * 
 * @package Aquila WordPress Theme
 */
?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title text-center">
            <?php esc_html_e('No content found', TEXT_DOMAIN); ?>
        </h1>
    </header>
</section>

<div class="page-content">
    <?php
    
    if(is_home() && current_user_can('publish_posts')){ 
        echo "<p class='text-center'>";
        printf(
            wp_kses(
                __("Ready to publish your first post?&nbsp;&nbsp;<a href='%s'>Get Started Here</a>", TEXT_DOMAIN), 
                [
                    'a' => [ 
                        'href' => [], 
                        ] 
                ]
                ),
                esc_url(admin_url('post-new.php'))
        );
        echo "</p>";
    } elseif (is_search()){ 

        echo "<p class='text-center'>";
        esc_html_e("Sorry! Nothing matched found. Please try again with some other keywords.", TEXT_DOMAIN);
        echo "</p>";

        echo "<div class='d-flex flex-column justify-content-center align-items-center'>";
        get_search_form();
        echo "</div>"; 
        
    } else {
        
        echo "<p class='text-center'>";
            esc_html_e("It seems we can't find what you're looking for. Perhaps search can helps.", TEXT_DOMAIN);
        echo "</p>";

        echo "<div class='d-flex flex-column justify-content-center align-items-center'>";
            get_search_form();
        echo "</div>"; 
       
        
    }

    
    ?>
</div>