<!DOCTYPE html>
<html lang="en-EN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php $description; ?>">
  <meta name="keywords"
        content="инновации, фонд, студенты, практика, стажтровка, бизнес, инвестиции, образование, университет, кооперация, партнерство">

  <title><?= $title; ?> • FIS</title>

  <!-- ===== Объявление общих настроек для иконок ===== -->
  <link rel="icon" href="img/logo.png" sizes="32x32">
  <link rel="icon" href="img/logo.png" sizes="192x192">
  <link rel="shortcut icon" href="img/logo.png" type="image/png">

  <!-- ===== Объявление внешнего вида иконок для iOS ===== -->
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">

  <!-- ===== Объявление внешенего вида плитки для Windows 8.0 ===== -->
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">

  <link rel="stylesheet" type="text/css" href="../public/css/style.css">

  <!--  Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!--Font Awesome icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
<header>
  <!--Показывается на экранах 768px и больше-->
  <div class="xs-hide sm-hide">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container p-0">
        <a class="navbar-brand" href="//innovationfund.in">
          <img src="../../img/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
      </div>
      <div class="container">
        <a class="nav-item nav-link" href="/innovations">Innovations</a>
        <a class="nav-item nav-link" href="/projects">Projects</a>
        <a class="nav-item nav-link" href="/activities">Activities</a>
        <a class="nav-item nav-link" href="/partners">Partners</a>
        <a class="nav-item nav-link" href="/hr">HR</a>
        <a class="nav-item nav-link" href="/news">News</a>
      </div>
      <div class="container justify-content-end p-0">
          <?php if (isset($_SESSION['user'])): ?>
            <a class="nav-item nav-link p-0" href="/admin/news">
              <span style="font-size: 1em; color: #457677;"><i class="far fa-user-circle"></i></span>
            </a>
          <?php endif; ?>
      </div>
    </nav>
  </div>

  <!--Показывается на экранах от 0 до 767px-->
  <div class="pos-f-t md-hide lg-hide xl-hide">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-white text-right p-4">
          <?php foreach ($menu as $value): ?>
            <a class="nav-item nav-link <?php echo ($title == $value['title']) ? 'active' : ''; ?>"
               href="<?= $value['link']; ?>"><?= $value['title']; ?></a>
          <?php endforeach; ?>
          <?php if (isset($_SESSION['user'])): ?>
              <a class="nav-item nav-link" href="/admin/news">
                  <span style="font-size: 1em; color: #457677;"><i class="far fa-user-circle"></i></span>
              </a>
          <?php endif; ?>
<!--        <div class="mb-3">-->
<!--          <form method="get" class="form-inline justify-content-end">-->
<!--            <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-info ml-2 xs-hide sm-hide" type="submit">Search</button>-->
<!--          </form>-->
<!--        </div>-->
      </div>
    </div>
    <nav class="navbar navbar-light bg-white">
      <a class="navbar-brand text-dark" href="//innovationfund.in">
        <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Fund of Innovation Support
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
              aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
</header>

<main>
  <div class="container-fluid p-3">
    <section>
      <div class="container-fluid py-3 p-md-5">
        <div class="row justify-content-between">
          <div class="col-6">
            <p><span style="font-size: 1em; color: #457677;"><i class="far fa-user-circle"></i></span>
              Welcome, <b><?= $user['name']; ?></b>
            </p>
          </div>
          <div class="col-6 text-right">
            <a href="/logout" class="btn btn-outline-danger btn-sm text-danger">Log out</a>
          </div>
        </div>

        <ul class="nav nav-tabs">
            <?php if (!empty($tabs)): ?>
                <?php foreach ($tabs as $tab): ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo ($title == $tab['name']) ? 'active' : ''; ?>"
                     href="<?= $tab['link']; ?>"><?= $tab['title']; ?></a>
                </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>

        <div class="tab-content py-3 col-12 col-md-10 mx-auto" id="myTabContent">
          <div class="tab-pane fade show active" id="news" role="tabpanel"
               aria-labelledby="news-tab">
              <?= $content; ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<footer class="bg-dark">
  <div class="container-fluid p-3">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="mb-3 text-right text-md-left">
          <button class="btn-custom btn-custom-outline-blue">support</button>
          <button class="btn-custom btn-custom-outline-blue">contact</button>
        </div>
        <div class="text-muted">
          <p>Украина, Одесса<br>
            © 2019 ГРОМАДСЬКА ОРГАНІЗАЦІЯ «ФОНД ПІДТРИМКИ ІННОВАЦІЙ»<br>
            Код: 42397930<br>
            Діяльність: 94.12 Діяльність професійних громадських організацій<br>
            Стан: зареєстровано<br>
            Дата реєстрації: 16.08.2018</p>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <ul class="nav justify-content-center justify-content-md-end mb-3">
            <?php if (!empty($menu)): ?>
                <?php foreach ($menu as $value): ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo ($title == $value['title']) ? 'active' : ''; ?>"
                     href="<?= $value['link']; ?>"><?= $value['title']; ?></a>
                </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <div class="mb-3 xs-hide sm-hide">
          <form method="get" class="form-inline justify-content-center justify-content-md-end">
            <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn-custom btn-custom-outline-blue btn-sm m-0 ml-2 xs-hide sm-hide" type="submit">Search</button>
          </form>
        </div>
        <ul class="nav justify-content-around justify-content-md-end">
          <li class="nav-item">
            <a class="icon icon-linkedin" href="https://www.linkedin.com/company/fund-of-innovation"
               target="_blank"></a>
          </li>
          <li class="nav-item">
            <a class="icon icon-twitter" href="https://www.twitter.com/company/fund-of-innovation"
               target="_blank"></a>
          </li>
          <li class="nav-item">
            <a class="icon icon-facebook" href="https://www.facebook.com/company/fund-of-innovation"
               target="_blank"></a>
          </li>
          <li class="nav-item">
            <a class="icon icon-instagram" href="https://www.instagram.com/innovationfund.in/" target="_blank"></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
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

<script src="js/script.js"></script>
</body>
</html>