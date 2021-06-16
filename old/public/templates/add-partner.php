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
        <div class="form-row">
            <div class="col-4 px-2 mx-0"> <!--RUSSIAN-->

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
                    <label for="name">Имя партнёра<sup> *</sup></label>
                    <?php $class = isset($errors['name']) ? 'is-invalid' : '';
                    $value = isset($partner_ru['name']) ? $partner_ru['name'] : ''; ?>
                    <input type="text" class="form-control <?= $class; ?>" id="name" name="partner_ru[name]"
                           value="<?= filter_tags($value); ?>">
                    <?php if (isset($errors['name'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['name']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="description">Описание партнёра<sup> *</sup></label>
                    <?php $class = isset($errors['description']) ? 'is-invalid' : '';
                    $value = isset($partner_ru['description']) ? $partner_ru['description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="partner_ru[description]"
                              id="description"
                              rows="8"><?= $value; ?></textarea>
                    <?php if (isset($errors['description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-4 px-2"> <!--ENGLISH-->

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
                    $value = isset($partner_en['name']) ? $partner_en['name'] : ''; ?>
                    <input type="text" class="form-control <?= $class; ?>" id="name" name="partner_en[name]"
                           value="<?= filter_tags($value); ?>">
                    <?php if (isset($errors['name'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['name']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="description">Description<sup> *</sup></label>
                    <?php $class = isset($errors['description']) ? 'is-invalid' : '';
                    $value = isset($partner_en['description']) ? $partner_en['description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="partner_en[description]"
                              id="description"
                              rows="8"><?= $value; ?></textarea>
                    <?php if (isset($errors['description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['description']; ?>
                        </div>
                    <?php endif; ?>
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
                    <label for="name">Iм'я партнера<sup> *</sup></label>
                    <?php $class = isset($errors['name']) ? 'is-invalid' : '';
                    $value = isset($partner_uk['name']) ? $partner_uk['name'] : ''; ?>
                    <input type="text" class="form-control <?= $class; ?>" id="name" name="partner_uk[name]"
                           value="<?= filter_tags($value); ?>">
                    <?php if (isset($errors['name'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['name']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="description">Опис партнера<sup> *</sup></label>
                    <?php $class = isset($errors['description']) ? 'is-invalid' : '';
                    $value = isset($partner_uk['description']) ? $partner_uk['description'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="partner_uk[description]"
                              id="description"
                              rows="8"><?= $value; ?></textarea>
                    <?php if (isset($errors['description'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-7 p-0">
            <div class="form-group">
                <label for="link">Ссылка<sup> *</sup></label>
                <?php $class = isset($errors['link']) ? 'is-invalid' : '';
                $value = isset($partner['link']) ? $partner['link'] : ''; ?>
                <input type="text" class="form-control <?= $class; ?>" id="link" name="partner[link]"
                       value="<?= $value; ?>">
                <?php if (isset($errors['link'])): ?>
                    <div class="invalid-feedback">
                        <?= $errors['link']; ?>
                    </div>
                <?php endif; ?>
            </div>

            <p class="mb-2">Изображение партнёра</p>
            <div class="custom-file mb-2 mb-md-0">
                <?php $class = isset($errors['image_path']) ? 'is-invalid' : ''; ?>
                <input type="file" class="custom-file-input <?= $class; ?>" id="image_path" name="image_path">
                <?php if (isset($errors['image_path'])): ?>
                    <div class="invalid-feedback">
                        <?= $errors['image_path']; ?>
                    </div>
                <?php endif; ?>
                <label class="custom-file-label" for="image_path">Изображение PNG или JPEG не более 5Мб</label>
            </div>

            <button class="btn btn-outline-success btn-block mt-5" type="submit" name="submit">
                Добавить партнёра
            </button>
        </div>
    </form>
</div>
