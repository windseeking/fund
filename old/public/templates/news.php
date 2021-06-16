<div class="container-fluid px-3 px-md-5 mb-3">
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

    <?php if (isset($news)): ?>
  <div class="row">
    <div class="card-columns p-3">
        <?php foreach ($news as $item): ?>
          <div class="card shadowed border-light my-3">
              <?php if (!empty($item['image_path'])): ?>
                <img src="<?= $item['image_path'] ?>" class="card-img-top" alt="<?= $item['title'] ?>">
              <?php endif; ?>
            <div class="card-body">
              <p class="card-text text-muted">
                                  <span style="font-size: 1em; color: #457677;">
                                    <i class="far fa-calendar-alt"></i>
                                  </span>
                <small><?= date('d.m.Y', strtotime($item['created_at'])) ?></small>
              </p>
              <h5 class="card-title"><?= $item['title'] ?></h5>
              <p class="card-text"><?= $item['description'] ?></p>
              <a href="news#item-<?= $item['id']; ?>" class="btn-custom btn-custom-outline-blue btn-sm"
                 data-toggle="modal" data-target="#item-<?= $item['id']; ?>">
                <?= $btn_more ;?> »
              </a>
              <!--<a href="/news?cat=<?/*= $item['cat']; */?>"
                 class="badge badge-pill badge-primary"><?/*= isset($item['cat']) ? $item['cat'] : ''; */?></a>-->
            </div>
              <?php if (isset($_SESSION['user'])): ?>
                <div class="card-footer bg-white text-right">
                                    <span style="font-size: 1em; color: orangered;"><i
                                        class="far fa-trash-alt delete-item"></i></span>
                  <span style="font-size: 1em; color: forestgreen; margin-left: 10px;"><i
                      class="far fa-edit edit-item"></i></span>
                </div>
              <?php endif; ?>
          </div>

          <div class="modal fade" id="item-<?= $item['id']; ?>" tabindex="-1" role="dialog"
               aria-labelledby="ModalLabel<?= $item['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLabel<?= $item['id']; ?>"><?= $item['title']; ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="card-text text-muted">
                                          <span style="font-size: 1em; color: #457677;">
                                            <i class="far fa-calendar-alt"></i>
                                          </span>
                    <small><?= date('d.m.Y', strtotime($item['created_at'])); ?></small>
                  </p>
                    <?php if (!empty($item['image_path'])): ?>
                      <img class="card-img" src="<?= $item['image_path']; ?>">
                      <hr>
                    <?php endif; ?>
                    <?= $item['text']; ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
        <?php else: ?>
          <div class="col-12 col-md-6 mx-auto p-5">
            <h2 class="display-4 text-center">Nothing found according to you request</h2>
          </div>
        <?php endif; ?>
    </div>
  </div>
</div>
