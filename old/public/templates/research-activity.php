<div class="container-fluid p-0">
    <?php if (isset($tabs)): ?>
    <div class="xs-hide sm-hide">
        <ul class="nav nav-tabs justify-content-center mt-3 mb-3">
            <?php if (!empty($tabs)): ?>
                <?php foreach ($tabs as $tab): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($subtitle == $tab['title']) ? 'active' : ''; ?>"
                           href="<?= $tab['link']; ?>"><?= $tab['title']; ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="col-11 mx-auto md-hide lg-hide xl-hide">
        <ul class="nav nav-pills nav-fill md-hide">
            <?php if (!empty($tabs)): ?>
                <?php foreach ($tabs as $tab): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($subtitle == $tab['title']) ? 'active' : ''; ?>"
                           href="<?= $tab['link']; ?>"><?= $tab['title']; ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="tab-content py-3 px-0 col-12" id="myTabContent">
        <div class="tab-pane fade show active" id="news" role="tabpanel"
             aria-labelledby="news-tab">
            <div class="container-fluid px-3 px-md-5 mb-3">
                <?php endif; ?>
                <?php if (isset($tabs)): ?>
            </div>
        </div>
    </div>
<?php endif; ?>
</div>

<div class="container-fluid px-3 px-md-5 mb-5">
    <div class="row">
        <div class="col-12 col-md-11 mx-auto">
            <div class="row mb-5">
                <div class="col-10 mx-auto">
                    <p class="text-center"><?= $ra_research; ?>:
                    </p>
                    <div class="row">
                        <div class="card shadowed col-12 col-md-3 ml-auto mb-3 mb-md-0">
                            <p class="big-num text-center text-red">11</p>
                            <p class="text-center"><?= $ra_centres; ?></p>
                        </div>
                        <div class="card shadowed col-12 col-md-3 mx-md-3 mb-3 mb-md-0">
                            <p class="big-num text-center text-red">16</p>
                            <p class="text-center"><?= $ra_labs; ?></p>
                        </div>
                        <div class="card shadowed col-12 col-md-3 mr-auto">
                            <p class="big-num text-center text-red">22</p>
                            <p class="text-center"><?= $ra_schools; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 col-md-6 mb-3 mb-md-0 text-center">
                    <h3 class="text-blue"><?= $observatory_title; ?></h3>
                    <p><?= $observatory_paragraph; ?></p>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <h3 class="text-blue"><?= $combustion_title; ?></h3>
                    <p><?= $combustion_paragraph; ?></p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 col-md-8 mb-3 mb-md-0">
                    <h4><?= $ra_provided; ?>:</h4>
                    <ul class="bullet-list">
                        <li><?= $sci_lab; ?></li>
                        <li><?= $bot_garden; ?></li>
                        <li><?= $hydro; ?></li>
                        <li><?= $mineral; ?></li>
                        <li><?= $zoo; ?></li>
                        <li><?= $paleo; ?></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 bg-white">
                    <h4><?= $ra_also; ?>:</h4>
                    <a class="btn-custom btn-custom-outline-blue btn-block"
                       href="http://lib.onu.edu.ua/periodicheskie-izdaniya-onu-arhiv/"
                       target="_blank"><?= $btn_publications; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
