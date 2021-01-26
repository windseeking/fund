<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innovationfund
 */

require_once('init.php');

$btn_send = 'Надіслати';
$address = 'Одеса, Україна';
$label_phone = 'Телефон';
$btn_contact = 'Зв’язатись';
$btn_support = 'Підтримати';
$copyright = 'Украина, Одеса<br>
                   © 2019 ГРОМАДСЬКА ОРГАНІЗАЦІЯ «ФОНД ПІДТРИМКИ ІННОВАЦІЙ»<br>
                   Код: 42397930<br>
                   Діяльність: 94.12 Діяльність професійних громадських організацій<br>
                   Стан: зареєстровано<br>
                   Дата реєстрації: 16.08.2018';

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

<?php wp_footer() ?>
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
