<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#457677">
    <meta name="msapplication-TileColor" content="#fac05e">
    <meta name="theme-color" content="#ffffff">

    <title><?php wp_title() ?></title>

    <?php wp_head(); ?>
</head>

<body <?php echo (is_front_page()) ? 'class="home"' : ''; ?>>

<header class="desktop">
    <div class="header-top">
        <div class="header-top__left">
            <div class="header-contacts">
                <ul class="header-list">
                    <li class="header-contacts__item">
                        <a class="header-contacts__link" href="tel:+380995250511">
                            +380 99 525 05 11
                        </a>
                    </li>
                    <li class="header-contacts__item">
                        <a class="header-contacts__link" href="mailto:innovationfund@onu.edu.ua">
                            innovationfund@onu.edu.ua
                        </a>
                    </li>
                </ul>
            </div>

            <div class="header-nav">
                <ul class="header-list">
                    <li class="header-nav__item">
                        <a class="header-nav__link js-scroll-trigger" data-scroll="#about">
                            <?php echo get_translation('О фонде', pll_current_language()); ?>
                        </a>
                    </li>
                    <li class="header-nav__item">
                        <a class="header-nav__link js-scroll-trigger" data-scroll="#contact">
                            <?php echo get_translation('Обратная связь', pll_current_language()); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-top__right">
            <div class="header-lang">
                <?php dynamic_sidebar('lang_switcher') ?>
            </div>
        </div>
    </div>


    <?php if (is_front_page()): ?>
        <div class="header-banner">
            <div class="header-cover">
                <img class="desktop" src="<?php echo get_template_directory_uri(); ?>/dist/img/bg.JPG" alt="">
            </div>

            <div class="header-text">
                <div class="header-text__title"><?php echo get_translation('Фонд Поддержки Инноваций', pll_current_language()); ?></div>
                <div class="header-text__paragraph">
                    <?php echo get_translation('Организация, которая объединяет бизнес, науку и образование для развития этих направлений', pll_current_language()); ?>
                </div>
            </div>
        </div>
    <?php endif ?>

    <div class="header-bottom header-bottom<?php echo (is_front_page()) ? '_home' : '_inner' ?>">
        <a class="header-logo" href="<?php echo home_url(); ?>">
            <img class="header-logo__img"
                 src="<?php echo get_template_directory_uri() ?>/dist/img/<?php echo (is_front_page()) ? 'logo-text-w.png' : 'logo-text.png' ?>"
                 alt="">
        </a>

        <?php
        wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'nav',
            'container_class' => 'header-menu',
            'menu_class' => 'header-list',
            'echo' => true,
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'fallback_cb' => false,
            'add_li_class' => 'your-class-name1 your-class-name-2'
        ]);
        ?>

        <div class="header-btn">
            <a class="btn btn_filled_blue" data-bs-toggle="modal" data-bs-target="#modal-support">Поддержать
                фонд</a>
        </div>
    </div>
</header>

<header class="mobile">
    <div class="modal-navbar">
        <a class="modal-navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/<?php echo (is_front_page()) ? 'logo-text-w.png' : 'logo-text.png' ?>"
                 alt="">
        </a>
        <button type="button" class="btn modal-navbar-toggler" data-bs-toggle="modal" data-bs-target="#modal-menu">
            <span class="modal-navbar-toggler-icon"></span>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="modal-menu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="header-menu">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'header',
                                'container' => 'nav',
                                'container_class' => 'header-menu',
                                'menu_class' => 'header-list',
                                'echo' => true,
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'fallback_cb' => false,
                                'add_li_class' => 'your-class-name1 your-class-name-2'
                            ]);
                            ?>
                        </div>

                        <div class="header-contacts">
                            <ul class="header-list">
                                <li class="header-contacts__item">
                                    <a class="header-contacts__link" href="tel:+380995250511">
                                        +380 99 525 05 11
                                    </a>
                                </li>
                                <li class="header-contacts__item">
                                    <a class="header-contacts__link" href="mailto:innovationfund@onu.edu.ua">
                                        innovationfund@onu.edu.ua
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (is_front_page()): ?>
        <div class="header-banner">
            <div class="header-cover">
                <img class="mobile" src="<?php echo get_template_directory_uri(); ?>/dist/img/bg-mobile.jpg" alt="">
            </div>

            <div class="header-text">
                <div class="header-text__title"><?php echo get_translation('Фонд Поддержки Инноваций', pll_current_language()); ?></div>
                <div class="header-text__paragraph">
                    <?php echo get_translation('Организация, которая объединяет бизнес, науку и образование для развития этих направлений', pll_current_language()); ?>
                </div>
            </div>
        </div>
    <?php endif ?>
</header>

<?php if (!is_front_page()) : ?>
    <div class="page-header">
        <?php
        global $post;
        $child_pages = get_child_pages($post);
        if ($child_pages): ?>
            <div class="page-header__subpages">
                <ul>
                    <?php foreach ($child_pages as $page): ?>
                        <li class="<?php echo $page['title'] === the_page_title() ? 'active' : '' ?>"><a href="<?php echo $page['permalink'] ?>"><?php echo $page['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif ?>

        <h1 class="page-header__title"><?php echo get_page_title($post) ?></h1>
        <?php if (!empty(get_field('subtitle'))): ?>
            <div class="page-header__subtitle"><?php the_field('subtitle') ?></div>
        <?php endif ?>
    </div>
<?php endif ?>
