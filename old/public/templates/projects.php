<div class="container-fluid px-3 px-md-5 mb-5">
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

    <?php if ($projects): ?>
      <div class="row">
          <?php foreach ($projects as $project) : ?>
            <div class="col-12 col-md-6 col-lg-4 card-group mb-4">
              <div class="card shadowed border-light">
                  <?php (!empty($project['image_path']) ? $project['image_path'] : $project['image_path'] = 'https://www.woodfordoil.com/wp-content/uploads/2018/02/placeholder.jpg'); ?>
                <img src="<?= $project['image_path']; ?>" class="card-img-top" alt="<?= $project['image_path']; ?>">
                <div class="card-body">
                  <h5 class="card-title"><?= $project['name']; ?></h5>
                  <p class="card-text text-left"><?= $project['description']; ?></p>
                </div>
                  <?php if (!empty($project['link_1_url'])): ?>
                    <div class="card-footer bg-white border-light">
                      <a class="btn-custom btn-custom-outline-blue btn-block" target="_blank"
                         href="<?= $project['link_1_url']; ?>"><?= $project['link_1_text']; ?> »</a>
                    </div>
                  <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="col-12 col-md-6 mx-auto p-5">
        <h2 class="display-4 text-center"><?= $nothing_found ;?></h2>
      </div>
    <?php endif; ?>
</div>
