<?php get_header() ?>

    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-9 order-2 order-lg-1">
                    <div class="row">

                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                ?>

                                <div class="card card_two-columns col-12 col-lg-6 p-lg-5">
                                    <h2 class="card__title">
                                        <?php the_title() ?>
                                    </h2>

                                    <div class="card__date">
                                        <?php the_date(); ?>
                                    </div>

                                    <div class="card__text">
                                        <?php the_excerpt() ?>
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="card__button">Читать далее</a>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="col-12 col-lg-3 order-1 order-lg-2">
                    <?php /*get_sidebar('news_sidebar') */ ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>