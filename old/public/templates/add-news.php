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
    <form method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-12 px-3 col-md-5">
                <div class="form-group">
                    <label for="title">Заголовок новости<sup> *</sup></label>
                    <?php $class = isset($errors['title']) ? 'is-invalid' : '';
                    $value = isset($news['title']) ? $news['title'] : ''; ?>
                    <input type="text" class="form-control <?= $class; ?>" id="title" name="news[title]"
                           placeholder="Короткий и информативный" value="<?= filter_tags($value); ?>">
                    <?php if (isset($errors['title'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['title']; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="cat">Категория<sup> *</sup></label>
                    <select class="form-control" id="cat" name="cat">
                        <option value="fis">Новость ФПИ</option>
                        <option value="partners">Новость партнёра</option>
                    </select>
                </div>

                <p class="mb-2">Изображение для новости</p>
                <div class="custom-file mb-2 mb-md-0">
                    <?php $class = isset($errors['image_path']) ? 'is-invalid' : ''; ?>
                    <input type="file" class="custom-file-input <?= $class; ?>" id="image_path" name="image_path">
                    <?php if (isset($errors['image_path'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['image_path']; ?>
                        </div>
                    <?php endif; ?>
                    <label class="custom-file-label" for="image_path">Изображение</label>
                </div>
            </div>

            <div class="col-12 px-3 col-md-7 mb-5">
                <div class="form-group">
                    <label for="text">Текст новости<sup> *</sup></label>
                    <?php $class = isset($errors['text']) ? 'is-invalid' : '';
                    $value = isset($news['text']) ? $news['text'] : ''; ?>
                    <textarea class="form-control <?= $class; ?>" name="news[text]" id="text"
                              rows="8"><?= $value; ?></textarea>
                    <?php if (isset($errors['text'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['text']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 px-3">
                <button class="btn btn-outline-success btn-block" type="submit" name="submit">Добавить новость</button>
            </div>
        </div>
    </form>
</div>
