<?php
/* Template Name: HR */
get_header() ?>

    <section class="section_narrow">
        <div class="section-title"><?php echo get_field('students')['title'] ?></div>
        <?php echo get_field('students')['list'] ?>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 mb-3 mb-md-0">
                <?php echo get_field('students')['text'] ?>
            </div>
            <div class="col-12 col-md-3">
                <a href="https://europass.cedefop.europa.eu/editors/en/cv/compose" class="btn btn_outline_blue"
                   target="_blank"><?php echo get_field('students')['button'] ?></a>
            </div>
        </div>
    </section>


    <section class="section_narrow">
        <div class="section-title"><?php echo get_field('companies')['title'] ?></div>
        <?php echo get_field('companies')['list'] ?>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 mb-3 mb-md-0">
                <?php echo get_field('companies')['text'] ?>
            </div>
            <div class="col-12 col-md-3">
                <a href="mailto:innovationfund@onu.edu.ua" class="btn btn_outline_blue"
                   target="_blank"><?php echo get_field('companies')['button'] ?></a>
            </div>
        </div>
    </section>

<?php get_footer() ?>