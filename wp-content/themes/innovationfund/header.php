<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ru-RU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Официальный сайт Фонда Поддержки Инноваций">
    <meta name="keywords"
          content="фпи, фпi, fis, фпи Одесса, фпi Одеса, fis Odesa, фонд підтримки інновацій, фонд поддержки инноваций,
          fund of innovation support, innovationfund Одесса, фонд поддержки инноваций Одесса, фонд підтримки інновацій Одеса,
          fund of innovation support Odesa, стартапы Одесса, стартапи Одеса, Odesa startups, павел коен фонд>">

    <meta property="og:title" content="Фонд Поддержки Инноваций">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://new.innovationfund.in">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/dist/img/bg.jpg">
    <meta property="og:site_name" content="Фонд Поддержки Инноваций">

    <link rel="canonical" href="http://new.innovationfund.in">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#457677">
    <meta name="msapplication-TileColor" content="#fac05e">
    <meta name="theme-color" content="#ffffff">

    <title>Фонд Поддержки Инноваций</title>

    <?php wp_head(); ?>
</head>

<body <?php echo (is_front_page()) ? 'class="home"' : ''; ?>>

<div style="padding: 10px; text-align: center; background-color: #FAC05E85">
    Cайт находится в разработке. <a href="http://innovationfund.in" target="_blank">Перейти</a> на прежнюю версию сайта.
</div>
<header>
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
                            Про фонд
                        </a>
                    </li>
                    <li class="header-nav__item">
                        <a class="header-nav__link js-scroll-trigger" data-scroll="#contact">
                            Обратная связь
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-top__right">
            <div class="header-lang"></div>
        </div>
    </div>


    <?php if (is_front_page()): ?>
        <div class="header-banner">
            <div class="header-cover">
                <img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/dist/img/bg.JPG" alt="">
            </div>

            <div class="header-text">
                <div class="header-text__title">Фонд Поддержки Инноваций</div>
                <div class="header-text__paragraph">
                    Организация, которая объединяет бизнес, науку и образование для развития этих направлений
                </div>
            </div>
        </div>
    <?php endif ?>

    <div class="header-bottom header-bottom<?php echo (is_front_page()) ? '_home' : '_inner' ?>">
        <a class="header-logo" href="<?php echo home_url(); ?>">
            <img class="header-logo__img" src="<?php echo get_template_directory_uri() ?>/dist/img/<?php echo (is_front_page()) ? 'logo-text-w.png' : 'logo-text.png' ?>"
                 alt="Fund of Innovation Support logo">
        </a>

        <?php
        wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'nav',
            'container_class' => 'header-menu',
            'menu_class' => 'header-list',
            'echo' => true,
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'fallback_cb'   => false,
            'add_li_class'  => 'your-class-name1 your-class-name-2'
        ]);
        ?>

        <div class="header-btn">
            <a class="btn btn_filled_blue" href="https://send.monobank.com.ua/39XXQvurt" target="_blank">Поддержать фонд</a>
        </div>
    </div>
</header>

<?php if (!is_front_page()) : ?>
    <div class="page-header">
        <h1 class="page-header__title"><?php wp_title('') ?></h1>
        <?php if (!empty(get_field('subtitle'))): ?>
            <div class="page-header__subtitle"><?php the_field('subtitle') ?></div>
        <?php endif ?>
    </div>
<?php endif ?>
