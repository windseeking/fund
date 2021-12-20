<?php
/* Template Name: R&D */
get_header() ?>

    <div class="page-header__content">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-3 mb-3 mb-md-0">
                    <div class="fs-lg fw-max c-blue mb-3">01</div>
                    <div><?php the_field('rd_first'); ?></div>
                </div>
                <div class="col-12 col-md-3 mb-3 mb-md-0">
                    <div class="fs-lg fw-max c-blue mb-3">02</div>
                    <div><?php the_field('rd_second'); ?></div>
                </div>
                <div class="col-12 col-md-3 mb-3 mb-md-0">
                    <div class="fs-lg fw-max c-blue mb-3">03</div>
                    <div><?php the_field('rd_third'); ?></div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="fs-lg fw-max c-blue mb-3">04</div>
                    <div><?php the_field('rd_fourth'); ?></div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>