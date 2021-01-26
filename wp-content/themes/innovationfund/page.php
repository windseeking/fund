<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innovationfund
 */

require_once('init.php');

get_header();
?>

	<section class="bg-white" style="min-height: 100vh; position: relative">
    <div class="container-slider">
        <div data-am-fadeshow="next-prev-navigation">

            <!-- Radio -->
            <input type="radio" name="css-fadeshow" id="slide-1">
            <input type="radio" name="css-fadeshow" id="slide-2">
            <input type="radio" name="css-fadeshow" id="slide-3">
            <input type="radio" name="css-fadeshow" id="slide-4">

            <!-- Slides -->
            <div class="fs-slides">
                <div class="fs-slide" id="slider-bg-1">
                    <div class="slider-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/<?php the_field('logo'); ?>" width="100" height="100" alt="">
                        <h1 class="xs-hide sm-hide display-3 font-weight-bold"><?php the_field('slider_1_header'); ?></h1>
                        <h2 class="md-hide lg-hide xl-hide font-weight-bold"><?php the_field('slider_1_header'); ?></h2>
                        <hr class="yellow short-center">
                        <p class="lead"><?php the_field('slider_1_par'); ?></p>
                    </div>
                </div>

                <div class="fs-slide" id="slider-bg-2">
                    <div class="slider-bg">
                        <img src="img/onu.png" width="100" height="100" alt="">
                        <h1 class="xs-hide sm-hide font-weight-bold"><?= $slider_header_2; ?></h1>
                        <h2 class="md-hide lg-hide xl-hide font-weight-bold"><?= $slider_header_2; ?></h2>
                        <hr class="yellow short-center">
                        <p class="lead"><?= $slider_paragraph_2; ?></p>
                    </div>
                </div>

                <div class="fs-slide" id="slider-bg-3">
                    <div class="slider-bg">
                        <h1 class="xs-hide sm-hide font-weight-bold"><?= $slider_header_3; ?></h1>
                        <h2 class="md-hide lg-hide xl-hide font-weight-bold"><?= $slider_header_3; ?></h2>
                        <hr class="yellow short-center">
                        <p class="lead"><?= $slider_paragraph_3; ?></p>
                    </div>
                </div>

                <div class="fs-slide" id="slider-bg-4">
                    <div class="slider-bg">
                        <h1 class="xs-hide sm-hide font-weight-bold"><?= $slider_header_4; ?></h1>
                        <h2 class="md-hide lg-hide xl-hide font-weight-bold"><?= $slider_header_4; ?></h2>
                        <hr class="yellow short-center">
                        <p class="lead"><?= $slider_paragraph_4; ?></p>
                    </div>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="fs-quick-nav">
                <label class="fs-quick-btn" for="slide-1"></label>
                <label class="fs-quick-btn" for="slide-2"></label>
                <label class="fs-quick-btn" for="slide-3"></label>
                <label class="fs-quick-btn" for="slide-4"></label>
            </div>

            <!-- Prev Navigation -->
            <div class="fs-prev-nav">
                <label class="fs-prev-btn" for="slide-1"></label>
                <label class="fs-prev-btn" for="slide-2"></label>
                <label class="fs-prev-btn" for="slide-3"></label>
                <label class="fs-prev-btn" for="slide-4"></label>
            </div>

            <!-- Next Navigation -->
            <div class="fs-next-nav">
                <label class="fs-next-btn" for="slide-1"></label>
                <label class="fs-next-btn" for="slide-2"></label>
                <label class="fs-next-btn" for="slide-3"></label>
                <label class="fs-next-btn" for="slide-4"></label>
            </div>
        </div>
    </div>
</section><!--End Sliders -->

<!-- ======= About ======= -->
<section style="min-height: 100vh;" id="about" class="about bg-light shadowed-inset">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h1><?= $about; ?></h1>
        </div>

        <hr class="yellow short-center mb-5">

        <div class="row">
            <div class="col-10">
                <h3><?= $fund_name ?></h3>
                <?= $fund_definition ?>
            </div>
        </div>

        <div class="row numbered-list justify-content-between mb-5">
            <div class="col-10 col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/number-outline-blue-1.svg" alt="">
                <p><?= $purpose_1 ?></p>
            </div>
            <div class="col-10 col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/number-outline-blue-2.svg" alt="">
                <p><?= $purpose_2 ?></p>
            </div>
            <div class="col-10 col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/number-outline-blue-3.svg" alt="">
                <p><?= $purpose_3 ?></p>
            </div>
        </div>

        <div class="row content justify-content-between">
            <div class="col-10 col-lg-6 mb-5 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <h3 class="mb-5"><?= $mission_header; ?></h3>
                <p class="boxed">
                    <?= $mission_paragraph; ?>
                </p>
            </div>

            <div class="col-10 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                <h3 class="mb-5"><?= $principles_header; ?></h3>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-6 text-center mx-auto mb-5">
                        <div class="icon-principles icon-transparency mx-auto mb-3"></div>
                        <p class="font-weight-bold text-center"><?= $transparency; ?></p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 text-center mx-auto mb-5">
                        <div class="icon-principles icon-openness mx-auto mb-3"></div>
                        <p class="font-weight-bold text-center"><?= $openness; ?></p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 text-center mx-auto mb-5">
                        <div class="icon-principles icon-officiality mx-auto mb-3"></div>
                        <p class="font-weight-bold text-center"><?= $officiality; ?></p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 text-center">
                        <div class="icon-principles icon-goals mx-auto mb-3"></div>
                        <p class="font-weight-bold text-center"><?= $goals; ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About -->

<!-- ======= Work ======= -->
<section class="work" id="work" style="min-height: 100vh">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h1><?= $work_header ?></h1>
        </div>

        <hr class="yellow short-center mb-5">

        <div class="row justify-content-around px-5 mb-5">
            <div id="step-1" class="col-md-5 workstep d-flex align-items-stretch">
                <div class="card" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $step_1_title ?></h5>
                        <p class="card-text"><?= $step_1_paragraph ?></p>
                    </div>
                </div>
            </div>
            <div id="step-2" class="col-md-5 workstep d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><?= $step_2_title ?></h5>
                        <p class="card-text"><?= $step_2_paragraph ?></p>
                    </div>
                </div>

            </div>
            <div id="step-3" class="col-md-5 workstep d-flex align-items-stretch mt-4">
                <div class="card" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $step_3_title ?></h5>
                        <p class="card-text"><?= $step_3_paragraph ?></p>
                    </div>
                </div>
            </div>
            <div id="step-4" class="col-md-5 workstep d-flex align-items-stretch mt-4">
                <div class="card" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><?= $step_4_title ?></h5>
                        <p class="card-text"><?= $step_4_paragraph ?></p>
                    </div>
                </div>
            </div>
            <div id="step-5" class="col-md-5 workstep d-flex align-items-stretch mt-4">
                <div class="card" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><?= $step_5_title ?></h5>
                        <p class="card-text"><?= $step_5_paragraph ?></p>
                    </div>
                </div>
            </div>
            <div id="step-6" class="col-md-5 workstep d-flex align-items-stretch mt-4">
                <div class="card" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><?= $step_6_title ?></h5>
                        <p class="card-text"><?= $step_6_paragraph ?></p>
                    </div>
                </div>
            </div>
            <div id="step-7" class="col-md-11 workstep d-flex align-items-stretch mx-auto mt-4">
                <div class="card" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><?= $step_7_title ?></h5>
                        <p class="card-text"><?= $step_7_paragraph ?></p>
                    </div>
                </div>
            </div>
        </div>


        <!--<div class="row work-border justify-content-around py-3">
            <div class="col-5 work-card pr-3">
                <div class="p-4">
                    <h3>Интерес</h3>
                    <p>Вас заинтересовала та или иная отрасль в университете</p>
                </div>
            </div>

            <div class="col-5 work-card">
                <div class="p-4">
                    <h3>Запрос</h3>
                    <p>Вы рассказываете подробнее, как видите сотрудничество, или же мы предлагаем
                        варианты</p>
                </div>
            </div>
        </div>

        <div class="row work-border justify-content-around py-3">
            <div class="col-5 work-card pr-3">
                <div class="p-4">
                    <h3>План</h3>
                    <p>Вместе с Вами (а в некоторых случаях и с университетом) мы прописываем дорожную
                        карту работы</p>
                </div>
            </div>

            <div class="col-5 work-card">
                <div class="p-4">
                    <h3>Соглашения</h3>
                    <p>Мы подписываем договор с Вами и университетом, к которому прикрепляются ТЗ и
                        дополнительные документы, если таковые имеются</p>
                </div>
            </div>
        </div>

        <div class="row work-border justify-content-around py-3">
            <div class="col-5 work-card pr-3">
                <div class="p-4">
                    <h3>Реализация</h3>
                    <p>Мы начинаем сотрудничество</p>
                </div>
            </div>

            <div class="col-5 work-card">
                <div class="p-4">
                    <h3>Результат</h3>
                    <p>Вы получаете результат, а университет применяет и развивает инновации, делает
                        образование и науку практичнее, чтобы в следующий раз предоставить Вам еще более
                        качественный продукт</p>
                </div>
            </div>
        </div>

        <div class="row work-border justify-content-center py-3">
            <div class="col-5 work-card mx-auto pr-3">
                <div class="p-4">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
        </div>-->

    </div>
</section>

<!-- ======= Innovations ======= -->
<section id="innovations" class="more-services bg-light shadowed-inset">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h1><?= $innovations_header ?></h1>
        </div>

        <hr class="yellow short-center mb-5">

        <div class="row mb-5">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card" style='background-image: url("<?php echo get_template_directory_uri(); ?>/img/greenhouse.jpg");' data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title"><a href="innovations/19">Автоматическая теплица</a></h5>
                        <p class="card-text">Создание полностью автоматических теплиц для более эффективного выращивания
                            растений без участия человека.</p>
                        <div class="read-more"><a href="innovations/19"><i
                                        class="icofont-arrow-right"></i> <?= $btn_more ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card" style='background-image: url("<?php echo get_template_directory_uri(); ?>/img/frenel.jpg");' data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><a href="innovations/2">Концентратор солнечной энергии на основе
                                зеркал Френеля</a>
                        </h5>
                        <p class="card-text">Концентратор солнечной энергии на основе зеркал Френеля позволяет
                            одновременно производить нагрев воды (получение горячей воды для бытовых нужд) и
                            электроэнергию путем установки солнечных панелей.</p>
                        <div class="read-more"><a href="innovations/2"><i
                                        class="icofont-arrow-right"></i> <?= $btn_more ?></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="card" style='background-image: url("<?php echo get_template_directory_uri(); ?>/img/wheat.jpg");' data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title"><a href="innovations/5">Новое комплексное удобрение для выращивания
                                озимой пшеницы</a>
                        </h5>
                        <p class="card-text">Разработка предназначена для повышения устойчивости к неблагоприятным
                            условиям, урожайности и жизнеспособности озимой пшеницы.</p>
                        <div class="read-more"><a href="innovations/5"><i
                                        class="icofont-arrow-right"></i> <?= $btn_more ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="card" style='background-image: url("<?php echo get_template_directory_uri(); ?>/img/burners.png ");' data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><a href="innovations/21">Инновационная горелка для жидких видов
                                топлива</a></h5>
                        <p class="card-text">Инновационная горелка для сжигания мазута или отработанного масла с водой в
                            пропорции 30/70 (70%) воды.</p>
                        <div class="read-more"><a href="innovations/21">
                                <i class="icofont-arrow-right"></i> <?= $btn_more ?></a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-2 mx-auto">
                <a href="/innovations" class="btn-custom btn-custom-outline-yellow btn-block"><?= $btn_all ?></a>
            </div>
        </div>
</section><!-- End Innovations -->

<!-- ======= Team ======= -->
<section style="min-height: 100vh;" id="team" class="team">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h1><?= $team_header ?></h1>
        </div>

        <hr class="yellow short-center mb-5">

        <div class="row mb-5">

            <div class="col-lg-4 col-xs-10 col-md-4 mb-5 d-flex align-items-stretch">
                <div class="member mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/chernetsky.jpg" class="img-fluid" alt="" width="400px">
                        <div class="social">
                            <a href="https://www.facebook.com/o.tchernetsky"><i class="icofont-facebook"></i></a>
                            <a href="https://www.instagram.com/chernetskyalex/"><i class="icofont-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B9-%D1%87%D0%B5%D1%80%D0%BD%D0%B5%D1%86%D0%BA%D0%B8%D0%B9-81b140149/"><i
                                        class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4><?= $alex ?></h4>
                        <span><?= $lawyer ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xs-10 col-md-4 mb-5 d-flex align-items-stretch">
                <div class="member mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/koyen.jpg" class="img-fluid" alt="" width="400px">
                        <div class="social">
                            <a target="_blank" href="https://www.facebook.com/pavelkoyen"><i class="icofont-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/pavelkoyen/"><i class="icofont-instagram"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/in/pavelkoyen/"><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4><?= $pavel ?></h4>
                        <span><?= $founder ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xs-10 col-md-4 mb-5 d-flex align-items-stretch">
                <div class="member mx-auto" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/dolzhenko.jpg" class="img-fluid" alt="" width="400px">
                        <div class="social">
                            <a href="https://www.facebook.com/maksym.dolzhenko"><i class="icofont-facebook"></i></a>
                            <a href="https://www.linkedin.com/in/maksymdolzhenko/"><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4><?= $maksym ?></h4>
                        <span><?= $advisor ?></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-md-6 mx-auto text-center">
                <div class="icon-plus mx-auto mb-3"></div>
                <p class="lead">17.000+ студентов и 3.000+ сотрудников</p>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->

<!-- ======= Docs ======= -->
<section id="docs" class="services bg-light shadowed-inset">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h1><?= $docs_header ?></h1>
        </div>

        <hr class="yellow short-center mb-5">

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="../docs/FIS_presentation.pdf" target="_blank"><?= $university_profile ?></a>
                    </h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="../docs/FIS_presentation.pdf" target="_blank"><?= $our_presentation ?></a>
                    </h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="../docs/Statut_ONU.pdf" target="_blank"><?= $onu_statute ?></a></h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="../docs/Statut_FIS.docx" target="_blank"><?= $fis_statute ?></a></h4>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Docs  -->

<!-- ======= Contact ======= -->
<section style="min-height: 100vh;" id="contact" class="bg-white py-5 px-3" style="min-height: 100vh">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-11 mx-auto">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h1><?= $contact_us; ?></h1>
                        <hr class="red long-left">
                    </div>

                    <div class="col-12 col-md-7 mb-5 mb-md-0 justify-content-between">
                        <?php
                        require ("template-parts/contact.php");
                        ?>
                    </div>

                    <div class="col-12 col-md-4 text-center text-md-left ml-auto">
                        <address>
                            <strong><?= $fund_name; ?></strong>
                            <br><?= $address; ?>
                        </address>
                        <address>
                            <p><?= $label_phone; ?>:
                                <br><a href="tel:+380995250511">+380 99 525 05 11</a>
                            </p>
                            <p>E-mail:
                                <br><a href="mailto:innovationfund@onu.edu.ua">innovationfund@onu.edu.ua</a>
                            </p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!--END Contact -->

<?php
get_footer();
