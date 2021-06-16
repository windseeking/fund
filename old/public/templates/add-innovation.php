<div class="container p-md-5">
    <div class="row justify-content-between">
        <div class="col-6">
            <p><span style="font-size: 1em; color: #457677;"><i class="far fa-user-circle"></i></span>
                Welcome, <b><?= $user['name']; ?></b>
            </p>
        </div>
        <div class="col-6 text-right">
            <a href="/logout" class="btn-custom btn-custom-outline-red btn-sm">Log out</a>
        </div>
    </div>
</div>

<?php if (isset($tabs)): ?>
    <div class="xs-hide sm-hide">
        <ul class="nav nav-tabs px-5 mt-3 mb-3">
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

<div class="container px-3 px-md-5 mb-5">

    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success" role="alert">
            <?= $_SESSION['success'];
            unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['errors'])): ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['errors'];
            unset($_SESSION['errors']); ?>
        </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data" class="custom-form">
        <div class="form-row mb-3">
            <div class="col-6 pr-3">
                <div class="form-group">
                    <p class="mb-2">Изображение инновации</p>
                    <div class="custom-file mb-2 mb-md-0">
                        <?php $class = isset($errors['main_image_path']) ? 'is-invalid' : ''; ?>
                        <input type="file" class="custom-file-input <?= $class; ?>" id="main_image_path"
                               name="main_image_path">
                        <?php if (isset($errors['main_image_path'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors['main_image_path']; ?>
                            </div>
                        <?php endif; ?>
                        <label class="custom-file-label" for="main_image_path">Изображение PNG или JPEG не более
                            5Мб</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="market_types">Рынки</label>
                    <?php $value = isset($innovation['market_types']) ? $innovation['market_types'] : ''; ?>
                    <input type="text" class="form-control" id="market_types" name="innovation[market_types]"
                           value="<?= $value; ?>" placeholder="B2B, B2G, B2C">
                </div>

                <div class="form-group">
                    <label for="money_needed">Инвестиции</label>
                    <?php $value = isset($innovation['money_needed']) ? $innovation['money_needed'] : ''; ?>
                    <input type="text" class="form-control" id="money_needed" name="innovation[money_needed]"
                           value="<?= $value; ?>" placeholder="5 000 EUR">
                </div>
            </div>

            <div class="col-6 pl-3">

                <div class="form-group">
                    <p class="mb-2">Презентация</p>
                    <div class="custom-file mb-2 mb-md-0">
                        <?php $class = isset($errors['presentation_link']) ? 'is-invalid' : ''; ?>
                        <input type="file" class="custom-file-input <?= $class; ?>" id="presentation_link"
                               name="presentation_link">
                        <?php if (isset($errors['presentation_link'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors['presentation_link']; ?>
                            </div>
                        <?php endif; ?>
                        <label class="custom-file-label" for="presentation_link">PDF, PPT, DOC</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="poll_link_url">Ссылка на опрос об актуальности</label>
                    <?php $value = isset($innovation['poll_link_url']) ? $innovation['poll_link_url'] : ''; ?>
                    <input type="text" class="form-control" id="poll_link_url" name="innovation[poll_link_url]"
                           value="<?= $value; ?>">
                </div>

                <!--<div class="form-group">
                    <label for="presentation_link">Ссылка на презентацию</label>
                    <?php /*$value = isset($innovation['presentation_link']) ? $innovation['presentation_link'] : ''; */?>
                    <input type="text" class="form-control" id="presentation_link" name="innovation[presentation_link]"
                           value="<?/*= $value; */?>">
                </div>-->

                <div class="form-group">
                    <label for="tech_offer_link">Ссылка на техническое предложение</label>
                    <?php $value = isset($innovation['tech_offer_link']) ? $innovation['tech_offer_link'] : ''; ?>
                    <input type="text" class="form-control" id="tech_offer_link" name="innovation[tech_offer_link]"
                           value="<?= $value; ?>">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-4 px-2 mx-0">                                               <!--RUSSIAN-->

                <?php if (isset($_SESSION['success_ru'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['success_ru'];
                        unset($_SESSION['success_ru']); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['errors_ru'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['errors_ru'];
                        unset($_SESSION['errors_ru']); ?>
                    </div>
                <?php endif; ?>

                <img src="../img/russia.svg" alt="" width="50px">

                <div class="form-group">
                    <label for="name">Название инновации<sup> *</sup></label>
                    <?php $class = isset($errors['name']) ? 'is-invalid' : '';
                    $value = isset($innovation_ru['name']) ? $innovation_ru['name'] : ''; ?>
                    <input type="text" class="form-control <?= $class; ?>" id="name" name="innovation_ru[name]"
                           value="<?= $value; ?>">
                    <?php if (isset($errors['name'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['name']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="short_description">Краткое описание инновации<sup> *</sup></label>
                    <?php $class = isset($errors['short_description']) ? 'is-invalid' : '';
                    $value = isset($innovation_ru['short_description']) ? $innovation_ru['short_description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="innovation_ru[short_description]"
                              id="short_description"
                              rows="8"><?= $value; ?></textarea>
                    <?php if (isset($errors['short_description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['short_description']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="author">Автор инновации</label>
                    <?php $value = isset($innovation_ru['author']) ? $innovation_ru['author'] : ''; ?>
                    <input type="text" class="form-control" id="author" name="innovation_ru[author]"
                           value="<?= $value; ?>" placeholder="НИИ физики ОНУ им. И.И. Мечникова">
                </div>

                <div class="form-group">
                    <label for="author">Стадия</label>
                    <?php $value = isset($innovation_ru['current_stage']) ? $innovation_ru['current_stage'] : ''; ?>
                    <input type="text" class="form-control" id="current_stage"
                           name="innovation_ru[current_stage]"
                           value="<?= $value; ?>" placeholder="успешно завершен пилотный проект">
                </div>

                <div class="form-group">
                    <label for="description">Полное описание инновации<sup> *</sup></label>
                    <?php $class = isset($errors['description']) ? 'is-invalid' : '';
                    $value = isset($innovation_ru['description']) ? $innovation_ru['description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="innovation_ru[description]"
                              id="description"
                              rows="20"><?= $value; ?></textarea>
                    <?php if (isset($errors['description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="roadmap">План развития</label>
                    <?php $value = isset($innovation_ru['roadmap']) ? $innovation_ru['roadmap'] : ''; ?>
                    <textarea class="form-control" name="innovation_ru[roadmap]" id="roadmap"
                              rows="15"><?= $value; ?>
<ol class="roadmap">

    <li class="passed">Пройденный этап. Этот текст надо заменить на свой.</li>

    <li class="passed">Пройденный этап. Можно добавить сколько угодно пунктов, просто скопировав нужный пункт.</li>

    <li class="current">Текущий этап. Внешний вид пункта зависит от значение class в теге li.</li>

    <li class="forthcome text-muted">Будущий этап. Если плана развития нет, то просто удали всё, чтобы поле было пустым.</li>

    <li class="forthcome text-muted">Будущий этап</li>

</ol>
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="competitive_ability">Конкурентоспособность</label>
                    <?php $value = isset($innovation_ru['competitive_ability']) ? $innovation_ru['competitive_ability'] : ''; ?>
                    <textarea class="form-control" name="innovation_ru[competitive_ability]" id="competitive_ability"
                              rows="8"><?= $value; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="market_and_appliance">Применение</label>
                    <?php $value = isset($innovation_ru['market_and_appliance']) ? $innovation_ru['market_and_appliance'] : ''; ?>
                    <textarea class="form-control" name="innovation_ru[market_and_appliance]" id="market_and_appliance"
                              rows="8"><?= $value; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="partnership">Партнёрство</label>
                    <?php $value = isset($innovation_ru['partnership']) ? $innovation_ru['partnership'] : ''; ?>
                    <textarea class="form-control" name="innovation_ru[partnership]" id="partnership"
                              rows="8"><?= $value; ?></textarea>
                </div>
            </div>

            <div class="col-4 px-2">                                                <!--ENGLISH-->

                <?php if (isset($_SESSION['success_en'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['success_en'];
                        unset($_SESSION['success_en']); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['errors_en'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['errors_en'];
                        unset($_SESSION['errors_en']); ?>
                    </div>
                <?php endif; ?>

                <img src="../img/britain.svg" alt="" width="50px">

                <div class="form-group">
                    <label for="name">Name<sup> *</sup></label>
                    <?php $class = isset($errors['name']) ? 'is-invalid' : '';
                    $value = isset($innovation_en['name']) ? $innovation_en['name'] : ''; ?>
                    <input type="text" class="form-control <?= $class; ?>" id="name" name="innovation_en[name]"
                           value="<?= $value; ?>">
                    <?php if (isset($errors['name'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['name']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="short_description">Short description<sup> *</sup></label>
                    <?php $class = isset($errors['short_description']) ? 'is-invalid' : '';
                    $value = isset($innovation_en['short_description']) ? $innovation_en['short_description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="innovation_en[short_description]"
                              id="short_description"
                              rows="8"><?= $value; ?></textarea>
                    <?php if (isset($errors['short_description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['short_description']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <?php $value = isset($innovation_en['author']) ? $innovation_en['author'] : ''; ?>
                    <input type="text" class="form-control" id="author" name="innovation_en[author]"
                           value="<?= $value; ?>" placeholder="Odesa National Mechnikov University">
                </div>

                <div class="form-group">
                    <label for="author">Stage</label>
                    <?php $value = isset($innovation_en['current_stage']) ? $innovation_en['current_stage'] : ''; ?>
                    <input type="text" class="form-control" id="current_stage"
                           name="innovation_en[current_stage]"
                           value="<?= $value; ?>" placeholder="pilot project finished successfully">
                </div>

                <div class="form-group">
                    <label for="description">Full description<sup> *</sup></label>
                    <?php $class = isset($errors['description']) ? 'is-invalid' : '';
                    $value = isset($innovation_en['description']) ? $innovation_en['description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="innovation_en[description]"
                              id="description"
                              rows="20"><?= $value; ?></textarea>
                    <?php if (isset($errors['description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="roadmap">Roadmap</label>
                    <?php $value = isset($innovation_en['roadmap']) ? $innovation_en['roadmap'] : ''; ?>
                    <textarea class="form-control" name="innovation_en[roadmap]" id="roadmap" rows="15"> <?= $value; ?>
<ol class="roadmap">

    <li class="passed"></li>

    <li class="passed"></li>

    <li class="current"></li>

    <li class="forthcome text-muted"></li>

    <li class="forthcome text-muted"></li>

</ol>
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="competitive_ability">Competitive ability</label>
                    <?php $value = isset($innovation_en['competitive_ability']) ? $innovation_en['competitive_ability'] : ''; ?>
                    <textarea class="form-control" name="innovation_en[competitive_ability]" id="competitive_ability"
                              rows="8"><?= $value; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="market_and_appliance">Appliance</label>
                    <?php $value = isset($innovation_en['market_and_appliance']) ? $innovation_en['market_and_appliance'] : ''; ?>
                    <textarea class="form-control" name="innovation_en[market_and_appliance]" id="market_and_appliance"
                              rows="8"><?= $value; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="partnership">Partnership</label>
                    <?php $value = isset($innovation_en['partnership']) ? $innovation_en['partnership'] : ''; ?>
                    <textarea class="form-control" name="innovation_en[partnership]" id="partnership"
                              rows="8"><?= $value; ?></textarea>
                </div>
            </div>

            <div class="col-4 px-2"> <!--UKRAINIAN-->

                <?php if (isset($_SESSION['success_uk'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['success_uk'];
                        unset($_SESSION['success_uk']); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['errors_uk'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['errors_uk'];
                        unset($_SESSION['errors_uk']); ?>
                    </div>
                <?php endif; ?>

                <img src="../img/ukraine.svg" alt="" width="50px">

                <div class="form-group">
                    <label for="name">Iм'я інновації<sup> *</sup></label>
                    <?php $class = isset($errors['name']) ? 'is-invalid' : '';
                    $value = isset($innovation_uk['name']) ? $innovation_uk['name'] : ''; ?>
                    <input type="text" class="form-control <?= $class; ?>" id="name" name="innovation_uk[name]"
                           value="<?= $value; ?>">
                    <?php if (isset($errors['name'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['name']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="short_description">Короткий опис<sup> *</sup></label>
                    <?php $class = isset($errors['short_description']) ? 'is-invalid' : '';
                    $value = isset($innovation_uk['short_description']) ? $innovation_uk['short_description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="innovation_uk[short_description]"
                              id="short_description"
                              rows="8"><?= $value; ?></textarea>
                    <?php if (isset($errors['short_description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['short_description']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="author">Автор</label>
                    <?php $value = isset($innovation_uk['author']) ? $innovation_uk['author'] : ''; ?>
                    <input type="text" class="form-control" id="author" name="innovation_uk[author]"
                           value="<?= $value; ?>" placeholder="ОНУ ім. І.І.Мечникова">
                </div>

                <div class="form-group">
                    <label for="author">Стадія</label>
                    <?php $value = isset($innovation_uk['current_stage']) ? $innovation_uk['current_stage'] : ''; ?>
                    <input type="text" class="form-control" id="current_stage"
                           name="innovation_uk[current_stage]"
                           value="<?= $value; ?>" placeholder="компанія виробляє звичайні сонячні панелі з 2008 року">
                </div>

                <div class="form-group">
                    <label for="description">Повний опис<sup> *</sup></label>
                    <?php $class = isset($errors['description']) ? 'is-invalid' : '';
                    $value = isset($innovation_uk['description']) ? $innovation_uk['description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="innovation_uk[description]"
                              id="description"
                              rows="20"><?= $value; ?></textarea>
                    <?php if (isset($errors['description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="roadmap">План розвитку</label>
                    <?php $value = isset($innovation_uk['roadmap']) ? $innovation_uk['roadmap'] : ''; ?>
                    <textarea class="form-control" name="innovation_uk[roadmap]" id="roadmap" rows="15">
<ol class="roadmap">

    <li class="passed"></li>

    <li class="passed"></li>

    <li class="current"></li>

    <li class="forthcome text-muted"></li>

    <li class="forthcome text-muted"></li>

</ol>
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="competitive_ability">Конкурентоспроможність</label>
                    <?php $value = isset($innovation_uk['competitive_ability']) ? $innovation_uk['competitive_ability'] : ''; ?>
                    <textarea class="form-control" name="innovation_uk[competitive_ability]" id="competitive_ability"
                              rows="8"><?= $value; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="market_and_appliance">Застосування</label>
                    <?php $value = isset($innovation_uk['market_and_appliance']) ? $innovation_uk['market_and_appliance'] : ''; ?>
                    <textarea class="form-control" name="innovation_uk[market_and_appliance]" id="market_and_appliance"
                              rows="8"><?= $value; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="partnership">Партнерство</label>
                    <?php $value = isset($innovation_uk['partnership']) ? $innovation_uk['partnership'] : ''; ?>
                    <textarea class="form-control" name="innovation_uk[partnership]" id="partnership"
                              rows="8"><?= $value; ?></textarea>
                </div>
            </div>
        </div>

        <div class="col-7 p-0">
            <button class="btn btn-outline-success btn-block mt-5" type="submit" name="submit">
                Добавить инновацию
            </button>
        </div>
    </form>
</div>
