<?php

/*
Template Name: Страница партнеров
Template Post Type: page
*/

?>

<?php get_header() ?>

    <div class="full-width block-submenu">
        <div class="inner">
            <div class="page-title show-mobile">Партнеры</div>
        </div>
    </div>

    <div class="full-width block-category-title ">
        <div class="inner">
            <div class="title">Партнеры</div>
        </div>
    </div>

    <div class="full-width block-two-column page-partners">
        <div class="inner">
            <div class="row justify-content-between">

                <?php $posts = get_posts(array(
                    'numberposts' => 0,
                    'category' => 4,
                    'post_type' => 'post',
                    'suppress_filters' => true,
                ));

                foreach ($posts as $post) {
                    setup_postdata($post); ?>

                    <div class="col col-6">
                        <div class="row">
                            <div class="col-3">
                                <img src="<?php the_field('img') ?>" alt="<?php the_title() ?>">
                            </div>

                            <div class="col-9 text">
                                <h3>
                                    <?php the_title() ?>
                                </h3>

                                <p>
                                    <?php the_content() ?>
                                </p>

                                <?php if (get_field('link')): ?>
                                    <a href="<?php the_field('link'); ?>" class="link" target="_blank">На сайт</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>