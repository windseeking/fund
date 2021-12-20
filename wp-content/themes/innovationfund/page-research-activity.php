<?php
/* Template Name: Научная деятельность */
get_header() ?>

    <section class="section_narrow">
        <div class="container">
            <div class="cat-title"><?php the_field('research-department_title'); ?></div>
            <div class="border-block_btw border-block_bottom-md row mb-md-5">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="fs-lg fw-max c-blue mb-3">11</div>
                    <div><?php the_field('research-department_centres'); ?></div>
                </div>

                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="fs-lg fw-max c-blue mb-3">16</div>
                    <div><?php the_field('research-department_labs'); ?></div>
                </div>

                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="fs-lg fw-max c-blue mb-3">22</div>
                    <div><?php the_field('research-department_schools'); ?></div>
                </div>
            </div>

            <div class="border-block_bottom row pb-5">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="fs-lg fw-max c-blue mb-3">2</div>
                    <div><?php the_field('research-department_institutes'); ?></div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="mb-3">
                        <p class="fs-lg mb-0"><?php echo get_field('observatory')['name']; ?></p>
                        <p><?php echo get_field('observatory')['description']; ?></p>
                    </div>
                    <div>
                        <p class="fs-lg mb-0"><?php echo get_field('combustion')['name']; ?></p>
                        <p><?php echo get_field('combustion')['description']; ?></p>
                    </div>
                </div>
            </div>

            <div class="cat-title"><?php the_field('bases_title'); ?></div>
            <ul>
                <li><b><?php echo get_field('bases_library')['name']; ?></b>, <?php echo get_field('bases_library')['description']; ?><a
                            href="http://lib.onu.edu.ua/ru" target="_blank" class="link_arrow"></a></li>
                <li><b><?php echo get_field('bases_garden')['name']; ?></b>, <?php echo get_field('bases_garden')['description']; ?> <a href="http://onu.edu.ua/ru/science/botanicgarden"
                                                                       target="_blank" class="link_arrow"></a></li>
                <li><b><?php echo get_field('bases_hydro')['name']; ?></b>, <?php echo get_field('bases_hydro')['description']; ?> <a
                            href="http://onu.edu.ua/ru/structure/faculty/bio/bio-station" target="_blank"
                            class="link_arrow"></a></li>
                <li><b><?php echo get_field('bases_mineral')['name']; ?></b>, <?php echo get_field('bases_mineral')['description']; ?> <a
                            href="http://onu.edu.ua/ru/culture/museums/geology_mineral" target="_blank"
                            class="link_arrow"></a></li>
                <li><b><?php echo get_field('bases_zoo')['name']; ?></b>, <?php echo get_field('bases_zoo')['description']; ?> <a
                            href="http://onu.edu.ua/ru/culture/museums/zoological" target="_blank"
                            class="link_arrow"></a>
                </li>
                <li><b><?php echo get_field('bases_paleo')['name']; ?></b>, <?php echo get_field('bases_paleo')['description']; ?> <a
                            href="http://onu.edu.ua/ru/culture/museums/paleontalogical" target="_blank"
                            class="link_arrow"></a></li>
            </ul>

            <div class="cat-title"><?php the_field('publications_title'); ?></div>
            <ul>
                <li><?php the_field('publications_onu-bulletin'); ?> <a
                            href="http://lib.onu.edu.ua/periodicheskie-izdaniya-onu-arhiv/" target="_blank"
                            class="link_arrow"></a></li>
            </ul>
        </div>
    </section>

<?php get_footer() ?>