<?php

/*
Template Name: Страница новостей
Template Post Type: page
*/

?>

<?php get_header() ?>

    <div class="full-width block-submenu">
        <div class="inner">
            <div class="page-title show-mobile">Новости</div>
        </div>
    </div>

    <div class="full-width block-category-title ">
        <div class="inner">
            <div class="title">Новости</div>
        </div>
    </div>

    <div class="full-width block-two-column page-news">
        <div class="inner">
            <div class="row justify-content-between">
                <div class="row">
                    <div class="col-8">
                        <div class="row">

                            <?php

                            $posts = get_posts(array(
                                'numberposts' => 0,
                                'category' => 6,
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            ));

                            foreach ($posts as $post) {
                                setup_postdata($post); ?>

                                <article class="col col-6">
                                    <h3>
                                        <?php the_title() ?>
                                    </h3>

                                    <div class="date"><?php the_field('date'); ?></div>

                                    <p>
                                        <?php the_excerpt() ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>" class="link">Читать далее</a>
                                </article>
                                <?php
                            }
                            wp_reset_postdata();
                            ?>

                        </div>
                    </div>

                    <div class="col-3">
                        <?php /*get_sidebar('news_sidebar') */?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php get_footer() ?>