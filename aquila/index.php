<?php

/**
 * Index file
 * @package Aquila WordPress Theme 
 */

?>
<?php get_header(); ?>

<div class="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php if (have_posts()) : ?>
            <div class="container">
                <div class="row">
                    <?php if (is_home() && !is_front_page()) : ?>
                        <header class="page-header my-5">
                            <h1 class="page-title text-center">
                                <?php single_post_title(); ?>
                            </h1>
                        </header>
                    <?php endif; ?>

                    <?php
                    $index = 0;
                    $num_of_col = 3;

                    $site_url = $_SERVER['PHP_SELF'];
                    $page_slug = '';
                    $page_slug_value = '';


                    if (isset($_GET['page_id'])) {

                        $page_slug = 'page_id';
                        $page_slug_value = $_GET['page_id'];
                    } else if (isset($_GET['tag'])) {

                        $page_slug = 'tag';
                        $page_slug_value = $_GET['tag'];
                    } elseif (isset($_GET['cat'])) {

                        $page_slug = 'cat';
                        $page_slug_value = $_GET['cat'];
                    }

                    $self_url = $site_url . "?" . $page_slug . "=" . $page_slug_value;
                    $view = (isset($_GET['view'])) ? $_GET['view'] : 'grid';
                    ?>
                    <div class="col-12 py-2">
                        <a href="<?php echo esc_url($self_url . '&view=list'); ?>" class="btn btn-sm btn-danger">List</a>
                        <a href="<?php echo esc_url($self_url . '&view=grid'); ?>" class="btn btn-sm btn-success">Grid</a>
                    </div>
                    <?php if ($view == 'list') : ?>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <?php while (have_posts()) : the_post(); ?>
                                        <div class="w-100 shadow-sm mb-4">
                                            <?php get_template_part('template-parts/content/blog-post'); ?>
                                        </div>
                                    <?php endwhile; ?>
                                    <div class="col-12 d-flex justify-content-center">
                                        <?php aquila_pagination();  ?>
                                    </div>
                                </div>
                                <div class="col-md-4 shadow-sm rounded">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if (0 === $index % $num_of_col) : ?>
                                <div class="col-lg-4 col-md-6 col-12">
                                <?php endif;  ?>
                                <?php get_template_part('template-parts/content/blog-post'); ?>
                                <?php
                                $index++;
                                if (0 != $index && 0 === $index % $num_of_col) :
                                ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <div class="col-12 d-flex justify-content-center">
                            <?php aquila_pagination();  ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        <?php
        else :
            get_template_part('template-parts/content/content-none');
        endif;
        ?>

    </main>
</div>

<?php get_footer(); ?>