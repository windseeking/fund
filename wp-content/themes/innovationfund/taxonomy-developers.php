<?php get_header(); ?>

    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-8 order-2 order-lg-1">
                    <div class="row">
                        <?php

                        $taxonomy = get_queried_object();
                        $posts = query_posts(array(
                            'developer' => $taxonomy->slug,
                            'post_type' => 'innovations',
                            'posts_per_page' => -1,
                            'post_status' => 'publish'
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

                                    <a href="<?php the_permalink() ?>" class="card__button"><?php pll_e('Подробнее') ?></a>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

                <div class="col-12 col-lg-3 order-1 order-lg-2 mb-5 mb-lg-0">
                    <?php /*get_sidebar('innovations_sidebar') */ ?>
                    <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'developers'
                    ));
                    ?>

                    <div class="dropdown mobile">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="categories-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Фильтр по разработчикам
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categories-dropdown">
                            <li>
                                <a class="dropdown-item" href="/<?php echo pll_current_language() ?>/innovations/"><?php pll_e('Все') ?></a>
                            </li>
                            <?php foreach ($terms as $term): ?>
                                <li <?php echo $term->name == $taxonomy->name ? 'class="current"' : '' ?>>
                                    <a class="dropdown-item" href="<?php echo get_category_link($term->term_id) ?>">
                                        <?php echo $term->name ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="frame-block mt-0 desktop">
                        <h3>Фильтр по разработчикам</h3>

                        <ul class="frame-block__categories">
                            <li>
                                <a href="/<?php echo pll_current_language() ?>/innovations/"><?php pll_e('Все') ?></a>
                            </li>
                        <?php foreach ($terms as $term): ?>
                            <li <?php echo $term->name == $taxonomy->name ? 'class="current"' : '' ?>>
                                <a href="<?php echo get_category_link($term->term_id) ?>">
                                    <?php echo $term->name ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>