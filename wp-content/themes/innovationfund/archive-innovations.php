<?php

/*
Template Name: Страница инноваций
Template Post Type: page
*/

?>

<?php get_header() ?>

    <div class="full-width block-submenu">
        <div class="inner">
            <div class="page-title show-mobile">Инновации</div>
        </div>
    </div>

    <div class="full-width block-category-title ">
        <div class="inner">
            <div class="title">Инновации</div>
        </div>
    </div>

    </div>

    <div class="full-width block-two-column page-innovations">
        <div class="inner">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-9 order-2 order-lg-1">
                    <div class="row">
                        <?php

                        $posts = get_posts( array(
                            'numberposts' => 0,
                            'post_type'   => 'innovations',
                            'suppress_filters' => true,
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post); ?>

                            <div class="col-12 mb-5">
                                <h2>
                                    <?php the_title() ?>
                                </h2>

                                <div class="text">
                                    <p><?php the_excerpt() ?></p>

                                    <p><b>Стадия:</b> <?php the_field('stage') ?></p>
                                    <p><b>Инвестиции:</b> <?php the_field('money') ?></p>
                                </div>

                                <a href="<?php the_permalink() ?>" class="link">Подробнее</a>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

                <div class="col-12 col-lg-3 order-1 order-lg-2">
                    <?php /*get_sidebar('innovations_sidebar') */?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>