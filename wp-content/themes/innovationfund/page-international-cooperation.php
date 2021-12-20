<?php
/* Template Name: Международное сотрудничество */
get_header() ?>

    <section class="section_narrow">
        <div class="cat-title"><?php the_field('activity_title'); ?></div>

        <div class="accordion accordion-flush" id="international-accordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <?php the_field('analysis'); ?>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <?php echo get_field('import-escort')['title'] ?>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#international-accordion">
                    <div class="accordion-body">
                        <?php echo get_field('import-escort')['description'] ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        <?php echo get_field('export-escort')['title'] ?>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                     data-bs-parent="#international-accordion">
                    <div class="accordion-body">
                        <?php echo get_field('export-escort')['description'] ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                        <?php echo get_field('humanitarian-cooperation')['title'] ?>
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                     data-bs-parent="#international-accordion">
                    <div class="accordion-body">
                        <?php echo get_field('humanitarian-cooperation')['description'] ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <?php the_field('services') ?>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                        <?php echo get_field('advert')['title'] ?>
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                     data-bs-parent="#international-accordion">
                    <div class="accordion-body">
                        <?php echo get_field('advert')['description'] ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSix" aria-expanded="false"
                            aria-controls="flush-collapseSix">
                        <?php echo get_field('universities_cooperation')['title'] ?>
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                     data-bs-parent="#international-accordion">
                    <div class="accordion-body">
                        <?php echo get_field('universities_cooperation')['description'] ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headineSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSeven" aria-expanded="false"
                            aria-controls="flush-collapseSeven">
                        <?php echo get_field('other')['title'] ?>
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                     data-bs-parent="#international-accordion">
                    <div class="accordion-body">
                        <?php echo get_field('other')['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>