<?php get_header() ?>

    <section>
        <div class="container">
            <div class="row justify-content-between">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="card card_two-columns col-12 col-lg-6">
                            <div class="card__image card__image_rounded mb-3">
                                <img src="<?php the_field('img') ?>" alt="<?php the_title() ?>">
                            </div>

                            <div class="card__content">
                                <h2 class="card__title">
                                    <?php the_title() ?>
                                </h2>

                                <div class="card__text">
                                    <?php the_content() ?>
                                </div>

                                <?php if (get_field('link')): ?>
                                    <a href="<?php the_field('link'); ?>" class="card__button" target="_blank">
                                        <?php echo get_translation('На сайт', pll_current_language()); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

<?php get_footer() ?>