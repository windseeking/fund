<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ru-RU">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142992307-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-142992307-2', {'optimize_id': 'GTM-T3PMB68'});
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Официпльный сайт Фонда Поддержки Инноваций">
    <meta name="keywords"
          content="фпи, фпi, fis, фпи Одесса, фпi Одеса, fis Odesa, фонд підтримки інновацій, фонд поддержки инноваций,
          fund of innovation support, innovationfund Одесса, фонд поддержки инноваций Одесса, фонд підтримки інновацій Одеса,
          fund of innovation support Odesa, стартапы Одесса, стартапи Одеса, Odesa startups, павел коен фонд, <?php $keywords; ?>">

    <meta property="og:title" content="Фонд Поддержки Инноваций">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://new.innovationfund.in">
    <meta property="og:image" content="<?php get_template_directory_uri() ?>/dist/img/bg.jpg">
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

    <link rel="stylesheet" type="text/css" href="/wp-content/themes/innovationfund/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
</head>

<body>

<div class="mobile-plug-wrapper">
    <div class="mobile-plug-content">
        <div class="mobile-plug-logo">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/logo-text.png" alt="logo">
        </div>
        <div class="mobile-plug-description-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/icons/mobile-plug-img.svg">
            <div class="mobile-plug-description">Будь ласка, переверніть<br>телефон вертикально</div>
        </div>
    </div>
</div>

<div class="full-height">
    <div class="full-height-top">
        <div class="fixed-top show-mobile">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="p-4">
                    <a href="/" class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/logo-text.png" alt="logo">
                    </a>

                    <ul class="phone">
                        <li>
                            <a href="tel:+380995250511">
                                +380 99 525 05 11
                            </a>
                            <a href="mailto:innovationfund@onu.edu.ua">
                                innovationfund@onu.edu.ua
                            </a>
                        </li>
                    </ul>
                    <ul class="top-nav">
                        <li><a class="js-scroll-trigger" data-scroll="#about"><span>Про Фонд</span></a></li>
                        <li><a class="js-scroll-trigger" data-scroll="#contact"><span>Обратная связь</span></a></li>
                    </ul>

                    <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'container' => null,
                            'menu_class' => 'primary-menu mx-auto',
                            'menu_id' => null,
                        )) ?>
                    </nav>

                    <div class="lang-switcher">
                        <ul>
                            <li class="active"><a href="/ru">Рус</a></li>
                            <li class=""><a href="/">Укр</a></li>
                            <li class=""><a href="/en">En</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="navbar">
                <button class="navbar-toggler ml-auto pt-2" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <header class="full-width">
            <div class="inner">
                <div class="header-top">
                    <div class="column-left">
                        <ul class="phone">
                            <li>
                                <a href="tel:+380995250511">
                                    +380 99 525 05 11
                                </a>
                                <br>
                                <br>
                                <a href="mailto:innovationfund@onu.edu.ua">
                                    innovationfund@onu.edu.ua
                                </a>
                            </li>
                        </ul>
                        <ul class="top-nav">
                            <li><a class="js-scroll-trigger" data-scroll="#about"><span>Про Фонд</span></a></li>
                            <li><a class="js-scroll-trigger" data-scroll="#contact"><span>Обратная связь</span></a></li>
                        </ul>
                    </div>
                    <div class="column-right">
                        <div class="lang-switcher">
                            <div class="icon">
                                <svg markup-inline="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                                    <path d="M10.7 17.8L.2 7 3 4.2l7.8 8 8.3-7.9 2.7 2.9z"></path>
                                </svg>
                            </div>
                            <ul>
                                <li class=""><a href="/ru">РУС</a></li>
                                <li class="active"><a href="/">Укр</a></li>
                                <li class=""><a href="/en">En</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header-banner banner-online-bank">
                    <div class="banner-back">
                        <img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/dist/img/bg.JPG"
                             alt="">
                        <img class="show-mobile"
                             src="<?php echo get_template_directory_uri(); ?>/dist/img/bg-mobile.jpg"
                             alt="">
                    </div>
                    <div class="inner">
                        <div class="banner-column">
                            <div class="banner-text">
                                <div class="title">
                                    Фонд Поддержки Инноваций
                                </div>
                                <div class="text">
                                    <p>Организация, которая объединяет бизнес, науку и образование для развития этих
                                        направлений</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-bottom header-bottom-shadow hide-mobile">
                    <a href="/" class="logo">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/logo-text-w.png" alt="logo">
                    </a>
                    <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'container' => null,
                            'menu_class' => 'primary-menu mx-auto',
                            'menu_id' => null,
                        )) ?>
                    </nav>
                    <div class="controls">
                        <a href="" class="btn btn-short">Поддержать Фонд</a>
                    </div>
                </div>
            </div>
        </header>