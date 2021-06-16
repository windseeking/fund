<?php

/*
Template Name: Страница инновации
Template Post Type: innovations

*/

?>

<?php get_header() ?>

    <div class="full-width block-submenu">
        <div class="inner">
            <div class="page-title show-mobile"><?php the_title() ?></div>
        </div>
    </div>

    <div class="full-width block-category-title ">
        <div class="inner">
            <div class="controls">
                <a href="/innovations" class="btn btn-icon">
                    <span class="icon icon-arrow"><svg markup-inline="" xmlns="http://www.w3.org/2000/svg"
                                                       viewBox="0 0 14 9"><path
                                d="M13.5 4H2.3L5.7.9 5 .1.3 4.5 5 8.7l.7-.7-3.4-3h11.2z"></path></svg></span>
                    <span>Все инновации</span>
                </a>
            </div>
            <div class="title"><?php the_title() ?></div>
        </div>
    </div>

    </div>

    <div class="full-width block-two-column post-innovation">
        <div class="inner">
            <div class="row justify-content-between">
                <div class="col-12 order-2 col-md-7 order-md-1">
                    <div class="cat-title">Описание</div>
                    <div class="text"><?php the_content() ?></div>
                </div>

                <div class="col-12 order-1 col-md-5 order-md-2 mb-5 mb-md-0">
                    <div class="sidebar">
                        <?php if (get_field('author')): ?>
                            <p><b>Автор:</b> <?php the_field('author') ?></p>
                        <?php endif ?>

                        <?php if (get_field('markets')): ?>
                            <p><b>Рынки:</b> <?php the_field('markets') ?></p>
                        <?php endif ?>

                        <?php if (get_field('stage')): ?>
                        <p><b>Стадия:</b> <?php the_field('stage') ?>
                            <?php endif ?>
                        </p>

                        <?php if (get_field('money')): ?>
                            <p><b>Инвестиции:</b> <?php the_field('money') ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width block-two-column block-two-column-border-top post-innovation-info">
        <div class="inner">
            <div class="column">
                <div class="two-column-item">
                    <?php if (get_field('appliance')): ?>
                        <div class="cat-title">Применение</div>
                        <div class="text mb-5 mb-md-0">
                            <?php the_field('appliance') ?>
                        </div>
                    <?php endif ?>

                    <?php if (get_field('competitive_ability')): ?>
                        <div class="cat-title">Конкурентоспособность</div>
                        <div class="text">
                            <?php the_field('competitive_ability') ?>
                        </div>
                    <?php endif ?>

                    <?php if (get_field('partnership')): ?>
                        <div class="cat-title">Партнерство</div>
                        <div class="text">
                            <?php the_field('partnership') ?>
                        </div>
                    <?php endif ?>

                    <div class="links">
                        <?php if (get_field('presentation_link')): ?>
                            <a href="<?php the_field('presentation_link') ?>" target="_blank">Презентация</a>
                        <?php endif ?>

                        <?php if (get_field('poll_link')): ?>
                            <a href="<?php the_field('poll_link') ?>" target="_blank">Опрос</a>
                        <?php endif ?>

                        <?php if (get_field('tech_offer_link')): ?>
                            <a href="<?php the_field('tech_offer_link') ?>" target="_blank">Техническое предложение</a>
                        <?php endif ?>

                        <?php if (get_field('een')): ?>
                            <a href="<?php the_field('een') ?>" target="_blank">Профиль EEN</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="two-column-item">
                    <?php if (get_field('roadmap')): ?>
                        <div class="cat-title">План развития</div>
                        <?php
                        $rows = get_field('roadmap');
                        ?>

                        <ol class="roadmap">
                            <?php foreach ($rows as $row): ?>
                                <li class="<?php echo $row['roadmap_stage']['stage_state'] ?>"><?php echo $row['roadmap_stage']['stage_text'] ?></li>
                            <?php endforeach ?>
                        </ol>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>