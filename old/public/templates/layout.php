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
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <!-- Плитки Windows -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/logo.png">

    <!-- Закладка Yandex.Browser -->
    <meta name="yandex-tableau-widget" content="logo=http://innovationfund.in/img/yandex-tab.png,color=#ffffff">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/slider.css">

    <!-- Vesperr Template Styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/owl.carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">

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
            <div class="col p-0">
                <a class="navbar-brand" href="//innovationfund.in">
                    <img src="../img/logo.png" width="50" height="50" class="d-inline-block align-top" alt=""
                         title="Main page">
                </a>
                <span class="font-size-s"><? $fund_name; ?></span>
            </div>

                <?php if (isset($_SESSION['user'])): ?>
                    <a class="nav-item nav-link p-0" href="/add-innovation">
                        <span style="font-size: 1em; color: #222224;"><i class="far fa-user-circle"></i></span>
                    </a>
                <?php endif; ?>

            <div class="container col">
                <?php if (!empty($menu)): ?>
                    <?php foreach ($menu as $value): ?>
                        <a class="nav-item nav-link text-nowrap <?php echo ($title == $value['title']) ? 'active' : ''; ?>"
                           href="<?= $value['link']; ?>"><?= $value['title']; ?></a>
                    <?php endforeach; ?>
                    <a class="nav-item nav-link text-nowrap" href="http://space.innovationfund.in/">
                        <span class="text-blue">in</span><span class="text-yellow">.</span><span
                                class="text-blue">space</span>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col text-right text-nowrap p-0">

                <a href="?lang=en" title="English"
                   class="icon icon-lang icon-en <?php echo ($_COOKIE['language'] == 'en') ? 'icon-en-active' : ''; ?>"></a>

                <a href="?lang=uk" title="Ukrainian"
                   class="icon icon-lang icon-uk <?php echo ($_COOKIE['language'] == 'uk') ? 'icon-uk-active' : ''; ?>"></a>

                <a href="?lang=ru" title="Russian"
                   class="icon icon-lang icon-ru <?php echo ($_COOKIE['language'] == 'ru') ? 'icon-ru-active' : ''; ?>"></a>

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
                <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
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

    <?= $content; ?>

</main>

<footer class="bg-dark" style="position: relative">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3 text-right text-md-left">
                    <a class="btn-custom btn-custom-outline-blue" href="#support" data-toggle="modal"
                       data-target="#support"><?= $btn_support; ?></a>
                    <a class="btn-custom btn-custom-outline-blue" href="/index.php#contact"><?= $btn_contact; ?></a>
                </div>

                <div class="modal fade" id="support" tabindex="-1" role="dialog"
                     aria-labelledby="ModalLabelSupport" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><?= $btn_support; ?></h3>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <p class="card-text">
                                        You can support our Fund <a href="https://send.monobank.com.ua/39XXQvurt"
                                                                    target="_blank">here</a>.
                                        These finances will be invested in social projects and operating expenses.</p>
                                    <p>All information of our spending will be presented according to our principle of
                                        transparency.</p>
                                    <a href="https://send.monobank.com.ua/39XXQvurt" target="_blank"
                                       class="btn-custom btn-custom-outline-yellow btn-block"><?= $btn_support; ?></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-muted">
                    <p><?= $copyright; ?></p>
                </div>
            </div> <!-- END left part -->

            <div class="col-12 col-md-6">
                <ul class="nav footer-menu justify-content-center justify-content-md-end mb-3">
                    <?php if (!empty($menu)): ?>
                        <?php foreach ($menu as $value): ?>
                            <li class="nav-item">
                                <a class="nav-link text-nowrap <?php echo ($title == $value['title']) ? 'active' : ''; ?>"
                                   href="<?= $value['link']; ?>"><?= $value['title']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <ul class="nav justify-content-around justify-content-md-end mb-5 mb-md-0">
                    <li class="nav-item">
                        <a class="icon icon-social icon-linkedin"
                           href="https://www.linkedin.com/company/fund-of-innovation"
                           target="_blank" title="LinkedIn"></a>
                    </li>
                    <li class="nav-item">
                        <a class="icon icon-social icon-facebook" href="https://www.facebook.com/innovationfund.in/"
                           target="_blank" title="Facebook"></a>
                    </li>
                    <li class="nav-item">
                        <a class="icon icon-social icon-twitter"
                           href="https://www.twitter.com/company/fund-of-innovation"
                           target="_blank" title="Twitter"></a>
                    </li>
                    <li class="nav-item">
                        <a class="icon icon-social icon-instagram mr-3"
                           href="https://www.instagram.com/innovationfund.in/"
                           target="_blank" title="Instagram"></a>
                    </li>
                </ul>

                <div class="text-center text-md-right font-size-xl mt-3 mb-5">
                    <a href="http://space.innovationfund.in/" target="_blank"><span class="text-blue">in</span><span
                                class="text-yellow">.</span><span
                                class="text-blue">space</span></a>
                </div>
            </div> <!-- END right part -->
        </div>
    </div>
    <p id="windseeking">made with ♥ by <a href="https:/instagram.com/windseeking" target="_blank">windseeking</a></p>
</footer>

<!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

<!-- Vesperr Template JS -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="vendor/counterup/counterup.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>

<script>
    let captcha_action = 'send_message';
    grecaptcha.ready(function () {
        grecaptcha.execute('6LdLFq8UAAAAAODmNIvDXVFf36LwBDqKpKqCeqom', {action: captcha_action})
            .then(function (token) {
                if (token) {
                    document.getElementById('token').value = token;
                    document.getElementById('action').value = captcha_action;
                }
            });
    });
</script>
</html>
