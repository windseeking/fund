<section class="py-5 bg-sepia">
    <div class="container">
        <div class="row justify-content-between align-items-top mb-4">
            <div class="col-12 col-lg-4 order-2 order-lg-1">
                <?php if (!empty($innovation['main_image_path'])): ?>
                    <img src="<?= $innovation['main_image_path']; ?>" class="shadowed rounded-10 img-fluid mb-3"
                         alt="<?= $innovation['name']; ?>">
                <?php endif; ?>

                <?php if (!empty($innovation['author'])): ?><p><b><?= $author; ?>:</b> <?= $innovation['author']; ?>.</p><?php endif; ?>
                <?php if (!empty($innovation['market_types'])): ?><p><b><?= $market; ?>:</b> <?= $innovation['market_types']; ?>.</p><?php endif; ?>
                <?php if (!empty($innovation['current_stage'])): ?><p><b><?= $stage; ?>:</b> <?= $innovation['current_stage']; ?>.</p><?php endif; ?>
                <?php if (!empty($innovation['money_needed'])): ?><p><b><?= $money; ?>:</b> <?= $innovation['money_needed']; ?>.</p><?php endif; ?>

            </div>

            <div class="col-12 col-lg-7 order-1 order-lg-2">
                <h2 class="display-4 font-weight-bold mt-3 mt-md-0 xs-hide sm-hide"><?= $innovation['name']; ?></h2>
                <h2 class="display-6 font-weight-bold mt-3 mt-md-0 md-hide lg-hide xl-hide"><?= $innovation['name']; ?></h2>

                <?php if (!empty($innovation['short_description'])): ?>
                    <p><?= $innovation['short_description']; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-5" id="review">
    <div class="container-fluid">

        <div class="row justify-content-around">
            <?php if (!empty($innovation['description'])):; ?>
                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <h3 class="text-center"><?= $description; ?></h3>
                    <hr class="yellow short-center">
                    <?= $innovation['description']; ?>
                </div>
            <?php endif; ?>

                <div class="col-12 col-lg-5">
                    <?php if (!empty($innovation['roadmap']) or !empty($innovation['competitive_ability']) or !empty($innovation['market_and_appliance']) or !empty($innovation['partnership'])):; ?>
                    <ul class="nav nav-pills nav-fill mb-3" role="tablist">

                        <?php if (!empty($innovation['roadmap'])):; ?>
                            <li class="nav-item">
                                <a class="nav-link active" id="roadmap-tab" data-toggle="tab" href="#roadmap" role="tab"
                                   aria-controls="roadmap" aria-selected="true"><?= $roadmap; ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($innovation['competitive_ability'])):; ?>
                            <li class="nav-item">
                                <a class="nav-link" id="competitive-tab" data-toggle="tab" href="#competitive"
                                   role="tab"
                                   aria-controls="competitive" aria-selected="false"><?= $competitive_ability; ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($innovation['market_and_appliance'])):; ?>
                            <li class="nav-item">
                                <a class="nav-link" id="appliance-tab" data-toggle="tab" href="#appliance" role="tab"
                                   aria-controls="appliance" aria-selected="false"><?= $appliance; ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($innovation['partnership'])):; ?>
                            <li class="nav-item">
                                <a class="nav-link" id="partnership-tab" data-toggle="tab" href="#partnership"
                                   role="tab"
                                   aria-controls="partnership" aria-selected="false"><?= $partnership; ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <div class="tab-content shadowed rounded-10 p-5 mb-5">

                        <?php if (!empty($innovation['roadmap'])): ; ?>
                            <div class="tab-pane fade show active" id="roadmap" role="tabpanel"
                                 aria-labelledby="roadmap-tab">
                                <?= $innovation['roadmap']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($innovation['competitive_ability'])): ; ?>
                            <div class="tab-pane fade" id="competitive" role="tabpanel"
                                 aria-labelledby="competitive-tab">
                                <?= $innovation['competitive_ability']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($innovation['market_and_appliance'])): ; ?>
                            <div class="tab-pane fade" id="appliance" role="tabpanel" aria-labelledby="appliance-tab">
                                <?= $innovation['market_and_appliance']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($innovation['partnership'])): ; ?>
                            <div class="tab-pane fade" id="partnership" role="tabpanel"
                                 aria-labelledby="partnership-tab">
                                <?= $innovation['partnership']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <div class="сol-12 col-lg-5">
                        <?php if (!empty($innovation['poll_link_url'])): ?>
                            <a class="btn-custom btn-custom-outline-blue btn-block"
                               href="<?= $innovation['poll_link_url']; ?>"
                               target="_blank"><?= $btn_poll; ?></a>
                        <?php endif; ?>

                        <?php if (!empty($innovation['presentation_link'])): ?>
                            <a class="btn-custom btn-custom-outline-blue btn-block"
                               href="<?= $innovation['presentation_link']; ?>"
                               target="_blank" download><?= $btn_presentation; ?></a>

                        <?php endif; ?>
                        <?php if (!empty($innovation['tech_offer_link'])): ?>
                            <a class="btn-custom btn-custom-outline-blue btn-block"
                               href="<?= $innovation['tech_offer_link']; ?>"
                               target="_blank"><?= $btn_tech_offer; ?></a>
                        <?php endif; ?>

                        <?php if (!empty($innovation['link_1_url'])): ?>
                            <a class="btn-custom btn-custom-outline-blue btn-block"
                               href="<?= $innovation['link_1_url']; ?>"
                               target="_blank"><?= $innovation['link_1_name']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<section style="min-height: 100vh" class="bg-white py-5" id="contact">
    <div class="container py-3 p-md-5">
        <h2 class="display-5"><?= $contact_title; ?></h2>
        <hr class="red long-left mb-5">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                <?php
                require ("contact.php");
                ?>
            </div>
        </div>
    </div>
</section>
