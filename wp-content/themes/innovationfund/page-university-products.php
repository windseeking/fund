<?php
/* Template Name: Продукты университета */
get_header() ?>

<section class="section_narrow">
    <div class="accordion accordion-flush" id="products-accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <?php the_field('natural_title'); ?> <span><?php the_field('natural_sciences'); ?></span>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#products-accordion">
                <div class="accordion-body">
                    <div class="cat-title"><?php the_field('products_title'); ?></div>
                    <?php the_field('natural_products'); ?>

                    <div class="cat-title"><?php the_field('faculties_title'); ?></div>
                    <?php the_field('natural_faculties'); ?>

                    <div class="cat-title"><?php the_field('research_title'); ?></div>
                    <?php the_field('natural_research'); ?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <?php the_field('social_title'); ?> <span><?php the_field('social_sciences'); ?></span>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#products-accordion">
                <div class="accordion-body">
                    <div class="cat-title"><?php the_field('products_title'); ?></div>
                    <?php the_field('social_products'); ?>

                    <div class="cat-title"><?php the_field('faculties_title'); ?></div>
                    <?php the_field('social_faculties'); ?>

                    <div class="cat-title"><?php the_field('research_title'); ?></div>
                    <?php the_field('social_research'); ?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <?php the_field('humanitarian_title'); ?> <span><?php the_field('humanitarian_sciences'); ?></span>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#products-accordion">
                <div class="accordion-body">
                    <div class="cat-title"><?php the_field('products_title'); ?></div>
                    <?php the_field('humanitarian_products'); ?>

                    <div class="cat-title"><?php the_field('faculties_title'); ?></div>
                    <?php the_field('humanitarian_faculties'); ?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    <?php the_field('mathematical_title'); ?> <span><?php the_field('mathematical_sciences'); ?></span>
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#products-accordion">
                <div class="accordion-body">
                    <div class="cat-title"><?php the_field('products_title'); ?></div>
                    <?php the_field('mathematical_products'); ?>

                    <div class="cat-title"><?php the_field('specialities_title'); ?></div>
                    <?php the_field('mathematical_specialities'); ?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    <?php the_field('other_title'); ?>
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#products-accordion">
                <div class="accordion-body">
                    <?php the_field('other_list'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
