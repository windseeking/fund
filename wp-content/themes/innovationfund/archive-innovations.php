<?php

/*
Template Name: Страница инноваций
Template Post Type: page
*/

?>

<?php get_header() ?>

    <section>
        <div class="row justify-content-between">
            <div class="col-12 col-lg-9 order-2 order-lg-1">
                <div class="row">
                    <?php

                    $posts = get_posts(array(
                        'numberposts' => 0,
                        'post_type' => 'innovations',
                        'suppress_filters' => true,
                    ));

                    foreach ($posts as $post) {
                        setup_postdata($post); ?>

                            <div class="card">
                                <div class="col-12">
                                    <h2 class="card__title">
                                        <?php the_title() ?>
                                    </h2>

                                    <div class="card__text">
                                        <?php the_excerpt() ?>

                                        <?php if (!empty(get_field('stage'))): ?>
                                            <p><b>Стадия:</b> <?php the_field('stage') ?></p>
                                        <?php endif ?>

                                        <?php if (!empty(get_field('money'))): ?>
                                            <p><b>Инвестиции:</b> <?php the_field('money') ?></p>
                                        <?php endif ?>
                                    </div>

                                    <a href="<?php the_permalink() ?>" class="card__button">Подробнее</a>
                                </div>
                            </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

            <div class="col-12 col-lg-3 order-1 order-lg-2">
                <?php /*get_sidebar('innovations_sidebar') */ ?>
            </div>
        </div>
    </section>

<?php get_footer() ?>