<?php get_header() ?>

<section>
    <div class="row">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>

                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="card">
                            <div class="card__image">
                                <img src="<?php the_field('img'); ?>" alt="<?php the_title(); ?>" width="250px">
                            </div>

                            <div class="card__content">
                                <h2 class="card__title">
                                    <?php the_title(); ?>
                                </h2>

                                <div class="card__text">
                                    <?php the_content(); ?>
                                </div>

                                <?php if (get_field('link')): ?>
                                    <a href="<?php the_field('link'); ?>" class="card__button"><?php pll_e('Подробнее') ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>

    </div>
</section>

<?php get_footer() ?>
