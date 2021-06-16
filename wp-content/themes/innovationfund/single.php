<?php

/*
Template Name: Страница новости
Template Post Type: news
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
            <div class="controls">
                <a href="/news" class="btn btn-icon">
                    <span class="icon icon-arrow"><svg markup-inline="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 9"><path d="M13.5 4H2.3L5.7.9 5 .1.3 4.5 5 8.7l.7-.7-3.4-3h11.2z"></path></svg></span>
                    <span>Все новости</span>
                </a>
            </div>
            <div class="title">Новости</div>
        </div>
    </div>

    <div class="full-width news-item">
        <div class="inner">
            <h2><?php the_title() ?></h2>
            <div class="date"><?php the_field('date'); ?></div>
            <?php the_content() ?>
        </div>
    </div>
    </div>

<?php get_footer() ?>