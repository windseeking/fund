<?php get_header() ?>
    <section class="section_x-narrow">
        <div class="news-single__date">
            <?php echo get_the_date() ?>
        </div>
        <div class="news-single__content">
            <?php the_content() ?>
        </div>
    </section>
<?php get_footer() ?>

