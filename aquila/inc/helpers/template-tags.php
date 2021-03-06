<?php 

/**
 * Custom Template Tags
 * 
 * @package Aquila WordPress Theme
 */

 // Custom Post Thumbnail
 function get_custom_post_thumbnail($post_id, $size = 'aquila-thumbnail-sm', $additional_attr = []){ 

    if(null == $post_id){ 
        $post_id = get_the_ID();
    }

    if(has_post_thumbnail($post_id)){ 
        $default_attributes = [
            'loading' => 'lazy',  
        ];
        $attributes = array_merge($additional_attr, $default_attributes);

        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id($post_id ),
            $size,
            $attributes
        );
    }

    return $custom_thumbnail;
 }

 // Print Post Thumbnail
 function the_custom_post_thumbnail($post_id, $size = 'aquila-thumbnail-sm', $additional_attr = []){
     echo get_custom_post_thumbnail($post_id, $size, $additional_attr);
 }

 // Get Custom Date 
 function aquila_post_date_on(){

    // Post Is Published
    $time_string = '<time class="meta-time entry-date published" datetime="%1$s">%2$s</time>';

    // Post Is Modified
    if(get_the_time('U') !== get_the_modified_time('U')){
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="hide updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf(
                        $time_string,
                        esc_attr( get_the_date(DATE_W3C) ),
                        esc_attr( get_the_date() ),
                        esc_attr( get_the_modified_date(DATE_W3C) ),
                        esc_attr( get_the_modified_date() ),

    );

    $posted_on = sprintf(
        esc_html_x('%1$s %2$s', 'post date', TEXT_DOMAIN ),
        '<b class="fw-bold">Posted On : </b>',
        '<a class="link" href="'. esc_url( get_permalink() ).'" rel="bookmark">' . $time_string . '</a>'
    );

    echo "<span class='posted-on text-sm text-secondary'>{$posted_on}</span>";

 }

 // Get post author
 function aquila_posted_by(){ 
     $author_id = get_the_author_meta('ID');
     $author_name = get_the_author();
     $byline = sprintf(
            esc_html_x('%1$s %2$s', 'post author', TEXT_DOMAIN ),
            "<span class='fw-bold'>By : </span>",
            "<span class='author meta-author'><a class='link' href='" . esc_url( get_author_posts_url($author_id) ) . "'>".$author_name."</a></span>"
     );

     echo "<span class='byline text-secondary text-sm'>" . $byline ."</span>";
 }

// Aquila Custom Excerpt
function aquila_the_excerpt(
    $trim_character_count = 0
) {
    if (has_excerpt() || 0 === $trim_character_count
    ) {
        the_excerpt();
        return;
    }

    $excerpt = wp_html_excerpt(get_the_excerpt(get_the_id()), $trim_character_count, '[...]');
    echo $excerpt;
}

// Aquila Read More Button
function aquila_excerpt_more($more = '')
{

    if (!is_single()) {
        $more = sprintf(
            '<a class="aquila-read-more text-white d-block link" href="%1$s"><button class="mt-3 text-light btn btn-sm btn-info">%2$s</button></a>',
            get_permalink(get_the_ID()),
            __('Read more', TEXT_DOMAIN)
        );
    }

    return $more;
}

// // Aquila Pagination 
// function aquila_pagination()
// {

//   $allowed_tags = [ 
//             'span' => [ 
//                 'class' => []
//             ],
//             'a' => [ 
//                 'class' => ['btn btn-outline-secondary'], 
//                 'href' => [] 
//             ],
//   ];
//   $arg = [
//         'before_page_number' => '<span class="btn btn-sm btn-outline-primary mr-2 mb-2">',
//         'before_page_number' => '</span>'

//     ];

//   printf("<nav class='pagination clearfix'>%s</nav>",
//            wp_kses(paginate_links($arg), $allowed_tags),
//    );

// }

/**
 * Aquila Pagination.
 *
 * @return void
 */
function aquila_pagination()
{

    $allowed_tags = [
        'span' => [
            'class' => []
        ],
        'a' => [
            'class' => [],
            'href' => [],
        ]
    ];

    $args = [
        'before_page_number' => '<span class="btn btn-sm btn-outline-secondary mr-2 mb-2">',
        'after_page_number' => '</span>',
    ];

    printf('<nav class="aquila-pagination clearfix">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}
