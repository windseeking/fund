<?php get_header() ?>

    <section class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-lg-8 order-2 order-lg-1">
                    <div class="cat-title cat-title_accent">Описание</div>
                    <?php the_content(); ?>
                </div>

                <div class="col-12 col-lg-4 order-1 order-lg-2">
                    <div class="frame-block">
                        <?php if (!empty(get_field('author'))): ?>
                            <p><strong>Автор:</strong> <?php the_field('author'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty(get_field('markets'))): ?>
                            <p><strong>Рынки:</strong> <?php the_field('markets'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty(get_field('stage'))): ?>
                            <p><strong>Стадия:</strong> <?php the_field('stage'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty(get_field('money'))): ?>
                            <p><strong>Инвестиции:</strong> <?php the_field('money'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php if (!empty(get_field('appliance'))
                        || !empty(get_field('competitive_ability'))
                        || !empty(get_field('partnership'))
                        || !empty(get_field('roadmap'))
                        || !empty(get_field('links'))): ?>
            <div class="border-block_btw border-block_top row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <?php if (!empty(get_field('appliance'))): ?>
                        <div>
                            <div class="cat-title cat-title_accent">Применение</div>
                            <?php the_field('appliance'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty(get_field('competitive_ability'))): ?>
                        <div>
                            <div class="cat-title cat-title_accent">Конкурентоспособность</div>
                            <?php the_field('competitive_ability'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty(get_field('partnership'))): ?>
                        <div>
                            <div class="cat-title cat-title_accent">Партнерство</div>
                            <?php the_field('partnership'); ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    $links = get_field('links');
                    if (!empty($links)): ?>
                        <div class="links-block">
                            <?php foreach ($links as $link): ?>
                                <a href="<?php echo $link['url'] ?>" target="_blank"><?php echo $link['text'] ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <?php
                    $roadmap = get_field('roadmap');
                    if (!empty($roadmap)): ?>
                        <div class="cat-title cat-title_accent">План развития</div>
                        <div class="roadmap">
                            <table>
                                <tbody>
                                <?php foreach ($roadmap as $step): ?>
                                    <tr class="roadmap__step <?php echo $step['roadmap_stage']['stage_state'] ?>">
                                        <th class="roadmap__text">
                                            <?php echo $step['roadmap_stage']['stage_text'] ?>
                                        </th>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer() ?>