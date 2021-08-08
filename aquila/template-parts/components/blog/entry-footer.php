<?php

/**
 * Template for entry footer 
 * 
 * Used for wordpress taxonomies
 * 
 * @package Aquila WordPress Theme
 */


$post_id = get_the_ID();
$post_terms = wp_get_post_terms($post_id,['category', 'post_tag']);

if(empty($post_terms) || ! is_array($post_terms)){ 
    return;
}

?>

<div class="taxonomies mt-2 mb-3">
    <?php foreach ($post_terms as $taxonomy => $terms): ?>
        <?php echo esc_url(get_the_excerpt($terms)); ?>
        <a  href="<?php echo esc_url(get_term_link($terms)); ?>"class='btn btn-sm btn-outline-secondary mr-1'>
        <?php echo $terms->name; ?>
    </a>
    <?php endforeach; ?>
</div>