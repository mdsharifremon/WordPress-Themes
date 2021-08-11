<?php 

/**
 * Class Block Pattern
 * 
 * This class is responsible for Gutenberg block pattern
 * 
 * @package Aquila WordPress Theme
 */

 namespace AQUILA_THEME\Inc;
 use AQUILA_THEME\Inc\Traits\Singleton;

 class Block_Pattern{

    use Singleton;

    public function __construct(){
         /**  Actions  */
         add_action('init', [$this, 'aquila_register_block_pattern']);
         add_action('init', [$this, 'aquila_register_block_pattern_categories']);
    }

    /* Register block pattern */
    public function aquila_register_block_pattern(){
       if(function_exists('register_block_pattern')){
          $content = "
          <!-- wp:cover {'url':'https://localhost/themedev/blog/wp-content/uploads/2021/08/pexels-freestocksorg-291762.jpg','id':55,'dimRatio':20,'gradient':'vivid-cyan-blue-to-vivid-purple'} -->
          <div class='wp-block-cover has-background-dim-20 has-background-dim has-background-gradient'>
              <span aria-hidden='true' class='wp-block-cover__gradient-background has-vivid-cyan-blue-to-vivid-purple-gradient-background'></span>
             <img class='wp-block-cover__image-background wp-image-55' alt='' src='https://localhost/themedev/blog/wp-content/uploads/2021/08/pexels-freestocksorg-291762.jpg' data-object-fit='cover' />";
      

       $content .="<div class='wp-block-cover__inner-container'>
          <!-- wp:paragraph {'align':'center','placeholder':'Write title…','fontSize':'large'} -->
             <p class='has-text-align-center has-large-font-size'>This is our heading</p>
          <!-- /wp:paragraph -->
         <!-- wp:paragraph {'align':'center'} -->
            <p class='has-text-align-center'>This is the main content This is the main content This is the main content </p>
        <!-- /wp:paragraph -->";


         $content .= "<!-- wp:buttons {'contentJustification':'center','align':'full'} -->
        <div class='wp-block-buttons alignfull is-content-justification-center'>
            <!-- wp:button {'textColor':'vivid-green-cyan','className':'is-style-outline'} -->
            <div class='wp-block-button is-style-outline'><a class='wp-block-button__link has-vivid-green-cyan-color has-text-color' href='https://localhost/themedev/blog/?page_id=16'>Blogs</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
         </div>
      </div>";

         register_block_pattern(
             'aquila/cover',
             [
                'title' => __('Aquila Cover', TEXT_DOMAIN),
                'description' => __('Aquila cover block with image and text', TEXT_DOMAIN),
                'categories' => ['cover'],
                'content' => __($content, TEXT_DOMAIN)

             ]
          );
       }
         
    }
    /* Register the block pattern Categories */
    public function aquila_register_block_pattern_categories(){
      
          $pattern_categories = [
                        'cover' => __('Cover', TEXT_DOMAIN),
                        'carousel' => __('Carousel', TEXT_DOMAIN)
          ];

          if(!empty($pattern_categories) && is_array($pattern_categories)){
               foreach($pattern_categories as $pattern_cat => $pattern_cat_label){
                  register_block_pattern_category(
                     $pattern_cat,
                     ['label' => $pattern_cat_label]
                  );
               } 
         }

    }
    
 }