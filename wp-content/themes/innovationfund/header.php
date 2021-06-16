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
          fund of innovation support Odesa, стартапы Одесса, стартапи Одеса, Odesa startups, павел коен фонд, <?php $keywords; ?>">

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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body>

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
                        <a class="header-nav__link js-scroll-trigger" data-scroll="#abiut">
                            О фонде
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

    <div class="header-bottom header-bottom_home">
        <div class="header-logo">
            <img class="header-logo__img" src="<?php echo get_template_directory_uri() ?>/dist/img/logo-text-w.png"
                 alt="Fund of Innovation Support logo">
        </div>

        <nav class="header-menu">
            <ul class="header-list">
                <li class="header-menu__item"><a class="header-menu__link" href="">Инновации</a></li>
                <li class="header-menu__item"><a class="header-menu__link" href="">Проекты</a></li>
                <li class="header-menu__item"><a class="header-menu__link" href="">R&D</a></li>
                <li class="header-menu__item"><a class="header-menu__link" href="">Партнеры</a></li>
                <li class="header-menu__item"><a class="header-menu__link" href="">HR</a></li>
                <li class="header-menu__item"><a class="header-menu__link" href="">Новости</a></li>
            </ul>
        </nav>

        <div class="header-btn">
            <a class="btn btn_filled_blue" href="" target="_blank">Поддержать фонд</a>
        </div>
    </div>
</header>