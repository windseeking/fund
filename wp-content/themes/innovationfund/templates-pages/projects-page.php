<?php

/*
Template Name: Страница проектов
Template Post Type: page
*/

?>

<?php get_header() ?>

<div class="full-width block-submenu">
    <div class="inner">
        <div class="page-title show-mobile">Проекты</div>
    </div>
</div>

<div class="full-width block-category-title ">
    <div class="inner">
        <div class="title">Проекты</div>
    </div>
</div>

<div class="full-width block-two-column page-projects">
    <div class="inner">
        <div class="row">

            <?php

            $posts = get_posts(array(
                'numberposts' => 0,
                'category' => 5,
                'post_type' => 'post',
                'suppress_filters' => true,
            ));

            foreach ($posts as $post) {
                setup_postdata($post); ?>

                <div class="col col-12 mb-5">
                    <div class="row">
                        <div class="col-3 pr-3">
                            <img src="<?php the_field('img'); ?>" alt="<?php the_title(); ?>" width="250px">
                        </div>

                        <div class="col-9">
                            <h3>
                                <?php the_title(); ?>
                            </h3>

                            <div class="text">
                                <?php the_content(); ?>
                            </div>

                            <?php if (get_field('link')): ?>
                                <a href="<?php the_field('link'); ?>" class="link"><?php pll_e('Подробнее') ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</div>

<footer class="full-width" data-gtm-vis-recent-on-screen-1364594_18="190878"
        data-gtm-vis-first-on-screen-1364594_18="190879"
        data-gtm-vis-total-visible-time-1364594_18="100"
        data-gtm-vis-has-fired-1364594_18="1">
    <div class="inner">
        <div class="footer-top">
            <div class="column-left">
                <div class="footer-nav">
                    <div class="footer-nav-col">
                        <div class="title">
                            <a href="/innovations">Инновации</a>
                        </div>
                        <div class="title">
                            <a href="/projects">Проекты</a>
                        </div>
                        <div class="title">
                            <a href="/university-products">R&D</a>
                        </div>
                        <div class="title">
                            <a href="/partners">Партнеры</a>
                        </div>
                        <div class="title">
                            <a href="/hr">HR</a>
                        </div>
                        <div class="title">
                            <a href="/news">Новости</a>
                        </div>


                        <div class="footer-social-icons">
                            <ul class="links">
                                <li>
                                    <a href="https://www.facebook.com/innovationfund.in/"
                                       target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                             width="20"
                                             height="20" x="0" y="0" viewBox="0 0 512 512"
                                             style="enable-background:new 0 0 512 512"
                                             xml:space="preserve"
                                             class=""><g>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                      d="m284.925781 126.402344c8.285157 0 15-6.71875 15-15v-96.402344c0-8.285156-6.714843-15-15-15h-112.472656c-52.566406 0-95.332031 42.765625-95.332031 95.332031v97.46875h-62.121094c-8.285156 0-15 6.714844-15 15v96.398438c0 8.285156 6.714844 15 15 15h62.121094v177.800781c0 8.285156 6.714844 15 15 15h96.402344c8.285156 0 15-6.714844 15-15v-177.800781h62.121093c7.152344 0 13.308594-5.046875 14.710938-12.058594l19.277343-96.398437c.882813-4.40625-.257812-8.976563-3.109374-12.453126-2.847657-3.472656-7.105469-5.488281-11.597657-5.488281h-81.402343v-66.398437zm-96.402343 96.398437h78.105468l-13.28125 66.398438h-64.824218c-8.285157 0-15 6.714843-15 15v177.800781h-66.402344v-177.800781c0-8.285157-6.714844-15-15-15h-62.121094v-66.398438h62.121094c8.285156 0 15-6.714843 15-15v-112.46875c0-36.023437 29.308594-65.332031 65.332031-65.332031h97.472656v66.402344h-81.402343c-8.285157 0-15 6.714844-15 15v96.398437c0 8.285157 6.714843 15 15 15zm0 0"
                                                      fill="#e5e5e5" data-original="#000000"
                                                      style="" class=""/>
                                            </g></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/fund-of-innovation"
                                       target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                             width="20"
                                             height="20" x="0" y="0" viewBox="0 0 511 512"
                                             style="enable-background:new 0 0 512 512"
                                             xml:space="preserve"
                                             class=""><g>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                      d="m111.898438 160.664062h-96.398438c-8.285156 0-15 6.71875-15 15v321.335938c0 8.285156 6.714844 15 15 15h96.398438c8.285156 0 15-6.714844 15-15v-321.335938c0-8.28125-6.714844-15-15-15zm-15 321.335938h-66.398438v-291.335938h66.398438zm0 0"
                                                      fill="#e5e5e5" data-original="#000000"
                                                      style="" class=""/>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                      d="m63.703125 0c-34.851563 0-63.203125 28.351562-63.203125 63.195312 0 34.851563 28.351562 63.199219 63.203125 63.199219 34.847656 0 63.195313-28.351562 63.195313-63.199219 0-34.84375-28.347657-63.195312-63.195313-63.195312zm0 96.394531c-18.308594 0-33.203125-14.890625-33.203125-33.199219 0-18.304687 14.894531-33.195312 33.203125-33.195312 18.304687 0 33.195313 14.890625 33.195313 33.195312 0 18.308594-14.890626 33.199219-33.195313 33.199219zm0 0"
                                                      fill="#e5e5e5" data-original="#000000"
                                                      style="" class=""/>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                      d="m352.910156 158.542969c-22.800781 0-45.273437 5.496093-65.398437 15.777343-.683594-7.652343-7.109375-13.65625-14.941407-13.65625h-96.40625c-8.28125 0-15 6.71875-15 15v321.335938c0 8.285156 6.71875 15 15 15h96.40625c8.285157 0 15-6.714844 15-15v-176.734375c0-22.734375 18.5-41.230469 41.234376-41.230469 22.734374 0 41.226562 18.496094 41.226562 41.230469v176.734375c0 8.285156 6.71875 15 15 15h96.402344c8.285156 0 15-6.714844 15-15v-194.933594c0-79.140625-64.382813-143.523437-143.523438-143.523437zm113.523438 323.457031h-66.398438v-161.734375c0-39.277344-31.953125-71.230469-71.226562-71.230469-39.28125 0-71.238282 31.953125-71.238282 71.230469v161.734375h-66.402343v-291.335938h66.402343v11.082032c0 5.769531 3.308594 11.027344 8.511719 13.523437 5.199219 2.496094 11.371094 1.785157 15.875-1.820312 20.3125-16.292969 44.851563-24.90625 70.953125-24.90625 62.597656 0 113.523438 50.925781 113.523438 113.523437zm0 0"
                                                      fill="#e5e5e5" data-original="#000000"
                                                      style="" class=""/>
                                            </g></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/innovationfund.in/"
                                       target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                             width="20"
                                             height="20" x="0" y="0" viewBox="0 0 512 512"
                                             style="enable-background:new 0 0 512 512"
                                             xml:space="preserve"
                                             class=""><g>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                      d="m256 120.5c-74.714844 0-135.5 60.785156-135.5 135.5s60.785156 135.5 135.5 135.5 135.5-60.785156 135.5-135.5-60.785156-135.5-135.5-135.5zm0 241c-58.171875 0-105.5-47.328125-105.5-105.5s47.328125-105.5 105.5-105.5c58.175781 0 105.5 47.328125 105.5 105.5s-47.324219 105.5-105.5 105.5zm0 0"
                                                      fill="#e5e5e5" data-original="#000000"
                                                      style="" class=""/>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                      d="m460.410156 51.589844c-33.265625-33.269532-77.332031-51.589844-124.074218-51.589844h-160.671876c-46.742187 0-90.808593 18.320312-124.074218 51.589844-33.269532 33.265625-51.589844 77.332031-51.589844 124.074218v160.667969c0 46.746094 18.320312 90.8125 51.589844 124.078125 33.265625 33.269532 77.332031 51.589844 124.074218 51.589844h160.671876c46.742187 0 90.808593-18.320312 124.074218-51.589844 33.269532-33.265625 51.589844-77.332031 51.589844-124.078125v-160.667969c0-46.742187-18.320312-90.808593-51.589844-124.074218zm21.589844 284.742187c0 80.320313-65.347656 145.667969-145.664062 145.667969h-160.671876c-80.316406 0-145.664062-65.347656-145.664062-145.667969v-160.667969c0-80.316406 65.347656-145.664062 145.664062-145.664062h160.671876c80.316406 0 145.664062 65.347656 145.664062 145.664062zm0 0"
                                                      fill="#e5e5e5" data-original="#000000"
                                                      style="" class=""/>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                      d="m395.511719 101.488281c-3.953125 0-7.820313 1.609375-10.613281 4.402344-2.789063 2.789063-4.386719 6.660156-4.386719 10.597656 0 3.949219 1.597656 7.820313 4.386719 10.609375 2.792968 2.792969 6.660156 4.390625 10.613281 4.390625 3.9375 0 7.808593-1.597656 10.597656-4.390625 2.789063-2.789062 4.402344-6.660156 4.402344-10.609375 0-3.9375-1.613281-7.808593-4.402344-10.597656s-6.660156-4.402344-10.597656-4.402344zm0 0"
                                                      fill="#e5e5e5" data-original="#000000"
                                                      style="" class=""/>
                                            </g></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/company/fund-of-innovation"
                                       target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                             width="20"
                                             height="20" x="0" y="0" viewBox="0 0 512 512"
                                             style="enable-background:new 0 0 512 512"
                                             xml:space="preserve"><g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M507.413,93.394c-3.709-2.51-8.607-2.383-12.174,0.327c-3.612,2.735-9.474,5.087-16.138,7.016    c18.245-21.301,18.623-35.541,18.408-38.893c-0.245-3.801-2.541-7.168-5.985-8.791c-3.459-1.612-7.51-1.23-10.587,1.005    c-21.893,15.908-43.689,19.373-56.791,19.76c-20.337-19.342-46.704-29.944-74.74-29.944c-60.271,0-109.307,49.684-109.307,110.751    c0,4.944,0.327,9.878,0.969,14.771C138.176,167.645,54.665,69.155,53.803,68.119c-2.184-2.617-5.5-4.041-8.929-3.714    c-3.398,0.296-6.444,2.235-8.148,5.189c-29.005,50.322-11.286,94.725,6.505,121.327c-1.837-1.092-3.342-2.097-4.372-2.857    c-3.143-2.337-7.337-2.725-10.852-0.995c-3.521,1.735-5.771,5.286-5.837,9.209c-0.786,48.255,21.764,76.49,43.674,92.49    c-2.372,0.327-4.597,1.459-6.266,3.276c-2.51,2.724-3.393,6.576-2.311,10.122c15.194,49.735,52.041,67.352,76.373,73.587    c-49.22,37.138-120.557,25.016-121.348,24.867c-4.73-0.831-9.464,1.663-11.408,6.082c-1.939,4.413-0.612,9.587,3.225,12.51    c52.464,40.041,115.21,48.913,160.53,48.913c34.272,0,58.573-5.077,60.91-5.582c228.617-54.179,235.864-263.063,235.394-298.66    c42.888-39.929,49.633-55.255,50.684-59.067C512.811,100.502,511.117,95.91,507.413,93.394z M443.283,151.752    c-2.33,2.143-3.56,5.235-3.346,8.398c0.036,0.561,3.536,57.179-21.694,120.266c-33.709,84.291-100.164,138.725-197.307,161.746    c-1.041,0.219-90.905,18.831-169.792-18.689c33.725-1.414,80.429-10.913,113.292-47.806c2.745-3.077,3.398-7.833,1.709-11.593    c-1.689-3.75-5.439-6.51-9.551-6.51c-0.02,0-0.041,0-0.071,0c-2.76,0-50.337-0.357-73.133-46.306    c9.219,0.398,20.24-0.145,29.122-4.237c4.092-1.888,6.51-6.1,6.005-10.574c-0.505-4.475-3.821-8.079-8.23-9.008    c-2.556-0.541-57.649-12.836-66.143-72.693c8.464,3.526,19.015,6.257,29.51,4.685c4.031-0.602,7.332-3.5,8.474-7.413    c1.138-3.908-0.107-8.13-3.184-10.809c-2.383-2.07-54.327-48.273-30.541-107.973c28.158,29.332,108.46,102.368,205.833,96.786    c3.107-0.179,5.975-1.74,7.82-4.25c1.843-2.51,2.471-5.709,1.71-8.728c-1.837-7.316-2.77-14.857-2.77-22.418    c0-49.546,39.658-89.853,88.409-89.853c23.842,0,46.203,9.515,62.97,26.796c1.923,1.985,4.556,3.122,7.322,3.174    c9.658,0.092,25.561-0.949,43.531-7.633c-5.359,6.275-12.852,13.622-23.332,21.852c-3.622,2.847-4.954,7.735-3.276,12.026    c1.684,4.301,6.056,7.02,10.566,6.607c2.112-0.168,12.352-1.071,24.352-3.505C464.662,131.4,455.494,140.523,443.283,151.752z"
                                                              fill="#e5e5e5" data-original="#000000"
                                                              style=""/>
                                                    </g>
                                                </g>
                                            </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-nav-col">
                        <div class="title">
                            <a href="/university-products">R&D</a>
                        </div>
                        <ul>
                            <li><a href="/university-products">Продукты университета</a></li>
                            <li><a href="/research-activity">Научные направления</a></li>
                            <li><a href="/international-cooperation">Международное
                                    сотрудничество</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="column-right">
                <div class="contacts">
                    <a href="tel:+380995250511">
                        +380 99 525 05 11
                    </a>
                    <a href="mailto:innovationfund@onu.edu.ua">
                        innovationfund@onu.edu.ua
                    </a>
                </div>
                <div class="controls">
                    <a href="" class="btn btn-short">Поддержать Фонд</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="links">
                <ul>
                    <li><a href="<?php get_template_directory_uri() ?>/documents/ONU_profile.pdf">Ознайомлювальний
                            профіль Одеського національного
                            університету</a></li>
                    <li>
                        <a href="<?php get_template_directory_uri() ?>/documents/FIS_presentation.pdf">Презентація
                            Фонду Пiдтримки Iнновацiй</a></li>
                    <li><a href="<?php get_template_directory_uri() ?>/documents/Statut_ONU.pdf">Статут
                            Одеського
                            національного університету</a></li>
                    <li><a href="<?php get_template_directory_uri() ?>/documents/Statut_FIS.docx">Статут
                            Фонду
                            Підтримки Iнновацій</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            Украина, Одесса<br>
            © 2019 ОБЩЕСТВЕННАЯ ОРГАНИЗАЦИЯ «ФОНД ПОДДЕРЖКИ ИННОВАЦИЙ»<br>
            Код: 42397930 Деятельность: 94.12 Деятельность профессиональных организаций Дата
            регистрации: 16.08.2018
        </div>

        <div class="footer-bottom">
            <div class="links">
                <ul>
                    <li>&copy; 2018–<?php echo date('Y'); ?> Все права защищены</li>
                    <li><a href="#">Политика конфиденциальности</a></li>
                    <li><a href="#">Пользовательское соглашение</a></li>
                    <li>Разработка <a href="mailto:inna.klementjeva@gmail.com"
                                      style="color: #457677">windseeking</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</footer>

</div>

<div class="popup-wr popup-search" id="search"></div>
<script>
    var CURRENT_LANG = 'ua';
    var CURRENCY_RATES_URL = '/api/api/GetCurrencyRates';
    var SEARCH_URL = '/search/list';
    var SEARCH_LOCALIZATION = {
        searchPlaceholderText: 'Пошук по сайту',
        searchDescription: 'По запиту «searchKey» знайдено searchCount результатів'
    };
</script>

<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/manifest.js?v=637467676175771041"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor.js?v=637467676175122769"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js?v=637467676175781010"></script>

<script id="mobileMenu" type="text/template">
    <ul class="mobile-nav-list">
        <li class="bottom-nav-item"><a href="#about">Про Фонд</a></li>
        <li class="bottom-nav-item"><a href="#contact">Обратная связь</a></li>
    </ul>
    <a href="tel:0800307010" class="phone-wrapper">
        0 800 30 70 10
    </a>
    <a href="tel:+380443937010" class="phone-wrapper">
        +38 044 393 70 10
    </a>
    <div class="link-wrapper">
        <div class="title">онлайн-банк</div>
        <div class="link-wrapper-btn">
            <a href="https://my.bankvostok.com.ua" target="_blank" class="btn">
                Приватним особам
            </a>
            <a href="https://ubank.bankvostok.com.ua/web/" target="_blank" class="btn">
                Бізнесу
            </a>
        </div>
    </div>
    <div class="language-link-wrapper">
        <a href="/ru/private/own-account" class="">РУС</a>
        <a href="/private/own-account" class="active">Укр</a>
        <a href="/en/private/own-account" class="">En</a>
    </div>
</script>
</body>
</html>
