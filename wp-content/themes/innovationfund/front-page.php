<?php
/* Template Name: Главная */
get_header() ;?>

<!-- о фонде -->
<section class="section_narrow" id="about">
    <div class="container">
        <h1 class="section-title section-title_accent"><?php the_field('about_title'); ?></h1>
        <div class="fs-lg fw-max mb-2"><?php echo get_translation('Фонд Поддержки Инноваций', pll_current_language()); ?></div>
        <div class="fs-md">– <?php the_field('about_startup'); ?>:</div>
        <div class="row justify-content-between mt-5">
            <div class="col-12 col-md-3">
                <div class="fs-lg fw-max c-blue mb-3">01</div>
                <div><?php echo get_field('about_aims')['first']; ?></div>
            </div>
            <div class="col-12 col-md-3">
                <div class="fs-lg fw-max c-blue mb-3">02</div>
                <div><?php echo get_field('about_aims')['second']; ?></div>
            </div>
            <div class="col-12 col-md-3">
                <div class="fs-lg fw-max c-blue mb-3">03</div>
                <div><?php echo get_field('about_aims')['third']; ?></div>
            </div>
        </div>
    </div>
</section>
<!-- / о фонде -->

<!-- миссия и принципы -->
<section class="section_narrow section_border_top section_border_btw">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section__item col-12 col-lg-5">
                <div class="fs-xl fw-max mb-3"><?php the_field('mission_title'); ?></div>
                <p><?php the_field('mission_text'); ?></p>
            </div>
            <div class="section__item col-12 col-lg-5">
                <div class="fs-xl fw-max mb-3"><?php the_field('principles_title'); ?></div>
                <ul>
                    <li><?php echo get_field('principles_text')['transparency']; ?></li>
                    <li><?php echo get_field('principles_text')['openness']; ?></li>
                    <li><?php echo get_field('principles_text')['officiality']; ?></li>
                    <li><?php echo get_field('principles_text')['big_aims']; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / миссия и принципы -->

<!-- как мы работаем -->
<section class="roadmap section_narrow">
    <div class="container">
        <h1 class="section-title section-title_accent"><?php the_field('work_title'); ?></h1>
        <table>
            <tbody>
            <tr class="roadmap__step_1">
                <th>01</th>
                <td>
                    <div class="roadmap__title">
                        <?php echo get_field('work_first')['title']; ?>
                    </div>
                    <div class="roadmap__text">
                        <?php echo get_field('work_first')['text']; ?>
                    </div>
                </td>
            </tr>
            <tr class="roadmap__step_2">
                <th>02</th>
                <td>
                    <div class="roadmap__title">
                        <?php echo get_field('work_second')['title']; ?>
                    </div>
                    <div class="roadmap__text">
                        <?php echo get_field('work_second')['text']; ?>
                    </div>
                </td>
            </tr>
            <tr class="roadmap__step_3">
                <th>03</th>
                <td>
                    <div class="roadmap__title">
                        <?php echo get_field('work_third')['title']; ?>
                    </div>
                    <div class="roadmap__text">
                        <?php echo get_field('work_third')['text']; ?>
                    </div>
                </td>
            </tr>
            <tr class="roadmap__step_4">
                <th>04</th>
                <td>
                    <div class="roadmap__title">
                        <?php echo get_field('work_fourth')['title']; ?>
                    </div>
                    <div class="roadmap__text">
                        <?php echo get_field('work_fourth')['text']; ?>
                    </div>
                </td>
            </tr>
            <tr class="roadmap__step_5">
                <th>05</th>
                <td>
                    <div class="roadmap__title">
                        <?php echo get_field('work_fifth')['title']; ?>
                    </div>
                    <div class="roadmap__text">
                        <?php echo get_field('work_fifth')['text']; ?>
                    </div>
                </td>
            </tr>
            <tr class="roadmap__step_6">
                <th>06</th>
                <td>
                    <div class="roadmap__title">
                        <?php echo get_field('work_sixth')['title']; ?>
                    </div>
                    <div class="roadmap__text">
                        <?php echo get_field('work_sixth')['text']; ?>
                    </div>
                </td>
            </tr>
            <tr class="roadmap__step_7">
                <th>07</th>
                <td>
                    <div class="roadmap__title">
                        <?php echo get_field('work_seventh')['title']; ?>
                    </div>
                    <div class="roadmap__text">
                        <?php echo get_field('work_seventh')['text']; ?>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- / как мы работаем -->

<!-- команда -->
<section class="team section_narrow">
    <div class="container">
        <h1 class="section-title section-title_accent"><?php the_field('team_title'); ?></h1>
        <div class="row justify-content-around">
            <div class="col-12 col-md-4 mb-5 mb-lg-0">
                <div class="team__item">
                    <div class="team__img">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/koyen.jpg" alt="">
                    </div>

                    <div class="team__text">
                        <div class="team__name"><?php echo get_field('koyen')['name']; ?></div>
                        <div class="team__position"><?php echo get_field('koyen')['role']; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-5 mb-lg-0">
                <div class="team__item">
                    <div class="team__img">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/chernetsky.jpg" alt="">
                    </div>

                    <div class="team__text">
                        <div class="team__name"><?php echo get_field('chernetsky')['name']; ?></div>
                        <div class="team__position"><?php echo get_field('chernetsky')['role']; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="team__item">
                    <div class="team__img">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/dolzhenko.jpg" alt="">
                    </div>

                    <div class="team__text">
                        <div class="team__name"><?php echo get_field('dolzhenko')['name']; ?></div>
                        <div class="team__position"><?php echo get_field('dolzhenko')['role']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / команда -->

<!-- контакты -->
<section class="contact section_narrow section_bg section_bg_light section_border_btw" id="contact">
    <div class="container">
        <h1 class="section-title section-title_accent"><?php the_field('feedback_title'); ?></h1>
        <div class="row justify-content-center mb-3 mb-lg-0">
            <div class="section__item col-12 col-lg-7 mb-5 mb-lg-0 order-2 order-lg-1">
                <?php require 'template-parts/contact.php'; ?>
            </div>

            <div class="section__item col-12 col-lg-5 order-1 order-lg-2 mb-3 mb-lg-0">
                <div class="contact__title"><?php echo get_translation('Фонд Поддержки Инноваций', pll_current_language()) ?></div>
                <p><?php echo get_translation('Одесса, Украина', pll_current_language()) ?></p>
                <a class="contact__link" href="tel:+380995250511">+380 99 525 05 11</a>
                <a class="contact__link" href="mailto:innovationfund@onu.edu.ua">innovationfund@onu.edu.ua</a>

                <div class="contact-messengers">
                    <a href="https://t.me/pavelkoyen" target="_blank" class="contact-messengers__item">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0"
                             viewBox="0 0 512.00011 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                             class=""><g>
                                <path xmlns="http://www.w3.org/2000/svg"
                                      d="m504.09375 11.859375c-6.253906-7.648437-15.621094-11.859375-26.378906-11.859375-5.847656 0-12.042969 1.230469-18.410156 3.664062l-433.398438 165.441407c-23 8.777343-26.097656 21.949219-25.8984375 29.019531s4.0390625 20.046875 27.4999995 27.511719c.140626.042969.28125.085937.421876.125l89.898437 25.726562 48.617187 139.023438c6.628907 18.953125 21.507813 30.726562 38.835938 30.726562 10.925781 0 21.671875-4.578125 31.078125-13.234375l55.605469-51.199218 80.652344 64.941406c.007812.007812.019531.011718.027343.019531l.765625.617187c.070313.054688.144532.113282.214844.167969 8.964844 6.953125 18.75 10.625 28.308594 10.628907h.003906c18.675781 0 33.546875-13.824219 37.878906-35.214844l71.011719-350.640625c2.851563-14.074219.460937-26.667969-6.734375-35.464844zm-356.191406 234.742187 173.441406-88.605468-107.996094 114.753906c-1.769531 1.878906-3.023437 4.179688-3.640625 6.683594l-20.824219 84.351562zm68.132812 139.332032c-.71875.660156-1.441406 1.25-2.164062 1.792968l19.320312-78.25 35.144532 28.300782zm265.390625-344.566406-71.011719 350.644531c-.683593 3.355469-2.867187 11.164062-8.480468 11.164062-2.773438 0-6.257813-1.511719-9.824219-4.257812l-91.390625-73.585938c-.011719-.011719-.027344-.023437-.042969-.03125l-54.378906-43.789062 156.175781-165.949219c5-5.3125 5.453125-13.449219 1.074219-19.285156-4.382813-5.835938-12.324219-7.671875-18.820313-4.351563l-256.867187 131.226563-91.121094-26.070313 433.265625-165.390625c3.660156-1.398437 6.214844-1.691406 7.710938-1.691406.917968 0 2.550781.109375 3.15625.855469.796875.972656 1.8125 4.289062.554687 10.511719zm0 0"
                                      fill="#858585" data-original="#000000" style=""></path>
                            </g></svg>
                    </a>

                    <a href="https://www.messenger.com/t/pavelkoyen" target="_blank"
                       class="contact-messengers__item">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                             class=""><g>
                                <path xmlns="http://www.w3.org/2000/svg"
                                      d="m349.148438 253.738281c-5.859376-5.859375-15.355469-5.859375-21.214844-.003906l-23.476563 23.476563-69.675781-69.671876 23.476562-23.476562c5.859376-5.855469 5.859376-15.355469 0-21.210938l-56.800781-56.804687c-2.8125-2.816406-6.628906-4.394531-10.605469-4.394531-3.976562 0-7.792968 1.578125-10.605468 4.394531l-62.492188 62.484375c-21.5 21.507812-21.5 56.503906.007813 78.015625l147.6875 147.691406c10.390625 10.390625 24.242187 16.109375 39.007812 16.109375s28.617188-5.71875 39.007813-16.109375l62.488281-62.484375c2.8125-2.8125 4.394531-6.625 4.394531-10.605468 0-3.980469-1.582031-7.792969-4.394531-10.605469zm-26.894532 119.285157c-4.722656 4.722656-11.042968 7.324218-17.796875 7.324218-6.753906 0-13.074219-2.601562-17.796875-7.320312l-147.683594-147.691406c-9.8125-9.8125-9.816406-25.78125-.007812-35.59375l51.882812-51.878907 35.585938 35.59375-23.472656 23.476563c-2.816406 2.8125-4.394532 6.628906-4.394532 10.605468 0 3.980469 1.578126 7.792969 4.394532 10.605469l90.886718 90.882813c5.855469 5.859375 15.351563 5.859375 21.210938.003906l23.476562-23.476562 35.59375 35.59375zm0 0"
                                      fill="#858585" data-original="#000000" style="" class=""></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                      d="m437.015625 74.980469c-48.351563-48.347657-112.636719-74.97656275-181.015625-74.980469-68.378906.00390625-132.667969 26.632812-181.019531 74.980469-48.351563 48.355469-74.98437525 112.640625-74.980469 181.015625 0 49.875 14.269531 97.953125 41.328125 139.496094l-20.816406 80.988281c-1.320313 5.136719.171875 10.589843 3.921875 14.339843s9.207031 5.242188 14.339844 3.921876l82.320312-21.15625c40.480469 25.152343 86.972656 38.414062 134.902344 38.414062 68.378906 0 132.667968-26.628906 181.019531-74.980469 48.355469-48.355469 74.984375-112.640625 74.984375-181.023437-.003906-68.378906-26.632812-132.664063-74.984375-181.015625zm-181.019531 407.019531c-44.300782 0-87.203125-12.828125-124.070313-37.09375-2.472656-1.628906-5.34375-2.472656-8.25-2.472656-1.246093 0-2.5.15625-3.730469.472656l-64.058593 16.464844 16.171875-62.917969c1.082031-4.207031.285156-8.679687-2.183594-12.253906-26.085938-37.792969-39.875-82.125-39.875-128.203125-.003906-60.363282 23.507812-117.113282 66.191406-159.800782 42.6875-42.683593 99.441406-66.195312 159.808594-66.195312 124.613281.003906 225.996094 101.386719 226 225.996094 0 124.617187-101.386719 226.003906-226.003906 226.003906zm0 0"
                                      fill="#858585" data-original="#000000" style="" class=""></path>
                            </g></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / контакты -->

<?php get_footer() ?>
