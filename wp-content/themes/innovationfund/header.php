<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innovationfund
 */

require_once('init.php');

$fund_name = 'Фонд Підтримки Iнновацій';
$abbr = 'ФПI';
$title = $fund_name . $abbr;
$preview_img = 'http://innovationfund.in/img/logo.png';

$menu = [
    [
        'title' => 'Інновацiї',
        'link' => '/innovations'
    ],
    [
        'title' => 'Проекти',
        'link' => '/projects'
    ],
    [
        'title' => 'R&D',
        'link' => '/university-products'
    ],
    [
        'title' => 'Партнеры',
        'link' => '/partners'
    ],
    [
        'title' => 'HR',
        'link' => '/hr'
    ],
    [
        'title' => 'Новини',
        'link' => '/news'
    ]
];

?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>

    <!-- TODO: УБРАТЬ НА ПРОДЕ-->
    <meta http-equiv="Cache-Control" content="no-cache">

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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $description; ?>">
    <meta name="keywords"
          content="фпи, фпi, fis, фпи Одесса, фпi Одеса, fis Odesa, фонд підтримки інновацій, фонд поддержки инноваций,
          fund of innovation support, innovationfund Одесса, фонд поддержки инноваций Одесса, фонд підтримки інновацій Одеса,
          fund of innovation support Odesa, стартапы Одесса, стартапи Одеса, Odesa startups, павел коен фонд, <?php $keywords; ?>">

    <meta property="og:title" content="<?= $title; ?> <?= !empty($subtitle) ? '» ' . $subtitle : ''; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://innovationfund.in">
    <meta property="og:image" content="<?= $preview_img; ?>">
    <meta property="og:site_name" content="<?= $fund_name; ?>">

    <link rel="canonical" href="http://innovationfund.in">

    <title><?= $title; ?> <?= !empty($subtitle) ? '» ' . $subtitle : ''; ?> | <?= $abbr; ?></title>

    <!-- Общие настройки иконок -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png" type="image/png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <!-- Плитки Windows -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/logo.png">

    <!-- Закладка Yandex.Browser -->
    <meta name="yandex-tableau-widget" content="logo=http://innovationfund.in/img/yandex-tab.png,color=#ffffff">

    <?php wp_head(); ?>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js?render=6LdLFq8UAAAAAODmNIvDXVFf36LwBDqKpKqCeqom'></script>
</head>

<body>
<header>

    <!--Показывается на экранах 1200px и больше-->
    <div class="xs-hide sm-hide md-hide lg-hide main-menu">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
            <div class="col-1 p-0">
                <a class="navbar-brand" href="//innovationfund.in">
                    <img src="<?php echo get_template_directory_uri(); ?>/<?php the_field('logo'); ?>" width="50" height="50" class="d-inline-block align-top" alt=""
                         title="Main page">
                </a>
                <span class="font-size-s"><? $fund_name; ?></span>
            </div>

                <?php if (isset($_SESSION['user'])): ?>
                    <a class="nav-item nav-link p-0" href="/add-innovation">
                        <span style="font-size: 1em; color: #222224;"><i class="far fa-user-circle"></i></span>
                    </a>
                <?php endif; ?>

            <div class="container col-9 mx-auto">

                <?php wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => null,
                    'menu_class' => null,
                    'menu_id' => null,
                )) ?>

                <?php /*if (!empty($menu)): */?><!--
                    <?php /*foreach ($menu as $value): */?>
                        <a class="nav-item nav-link text-nowrap <?php /*echo ($title == $value['title']) ? 'active' : ''; */?>"
                           href="<?/*= $value['link']; */?>"><?/*= $value['title']; */?></a>
                    <?php /*endforeach; */?>
                    <a class="nav-item nav-link text-nowrap" href="http://space.innovationfund.in/">
                        <span class="text-blue">in</span><span class="text-yellow">.</span><span
                                class="text-blue">space</span>
                    </a>
                --><?php /*endif; */?>
            </div>
        </nav>
    </div>

    <!--Показывается на экранах от 0 до 1200px-->
    <div class="pos-f-t xl-hide fixed-top">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-white text-right p-4 mt-5">
                <?php foreach ($menu as $value): ?>
                    <a class="nav-item nav-link <?php echo ($title == $value['title']) ? 'active' : ''; ?>"
                       href="<?= $value['link']; ?>"><?= $value['title']; ?></a>
                <?php endforeach; ?>

                <a class="nav-item nav-link text-nowrap" href="http://space.innovationfund.in/" target="_blank">
                    <span class="text-blue">in</span><span class="text-yellow">.</span><span
                            class="text-blue">space</span>
                </a>

                <?php if (isset($_SESSION['user'])): ?>
                    <a class="nav-item nav-link" href="/admin/news">
                        <span style="font-size: 1em; color: #222224;"><i class="far fa-user-circle"></i></span>
                    </a>
                <?php endif; ?>

                <div class="mt-3 mt-xl-0 mr-3 mr-xl-0">
                    <a class="icon icon-lang icon-en  <?php echo ($_COOKIE['language'] == 'en') ? 'icon-en-active' : ''; ?>"
                       href="?lang=en"></a>
                    <a class="icon icon-lang icon-uk <?php echo ($_COOKIE['language'] == 'uk') ? 'icon-uk-active' : ''; ?>"
                       href="?lang=uk"></a>
                    <a class="icon icon-lang icon-ru <?php echo ($_COOKIE['language'] == 'ru') ? 'icon-ru-active' : ''; ?>"
                       href="?lang=ru"></a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light fixed-top bg-white">
            <a class="navbar-brand" href="//innovationfund.in">
                <img src="<?php echo get_template_directory_uri(); ?>/<?php the_field('logo'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            </a><span class="font-size-s"><?= $fund_name; ?></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>

<main>
    <?php if (isset($header)): ?>
        <hr class="yellow short-center">
        <h1 class="text-center mb-5"><?= $header; ?></h1>
    <?php endif; ?>
	