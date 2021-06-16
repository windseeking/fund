<section class="py-5 bg-blue mt-4" id="review">
  <div class="container">
    <div class="row justify-content-between align-items-center mb-4">
      <div class="col-12 col-md-7 order-2 order-md-1">
        <h2 class="display-4 text-white font-weight-bold mt-3 mt-md-0"><?= $innovation['name']; ?></h2>
        <hr class="yellow long-left">
        <p class="lead text-dark font-weight-bold"><?= $innovation['short_description']; ?></p>
        <p class="text-white"><b><?= $market ;?>:</b> <?= $innovation['market_types']; ?>.</p>
        <p class="text-white"><b><?= $stage ;?>:</b> <?= $innovation['current_stage']; ?>.</p>
        <p class="text-white"><b><?= $money ;?>:</b> <?= $innovation['money_needed']; ?>.</p>
      </div>

      <div class="col-12 col-md-5 order-1 order-md-2">
        <img src="<?= $innovation['image_path']; ?>" class="rounded-circle bd-yellow img-fluid"
             alt="<?= $innovation['name']; ?>">
      </div>
    </div>

    <div class="row justify-content-center">
      <ul class="nav nav-hover-red justify-content-center order-3">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#description"><?= $description ;?></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#roadmap"><?= $roadmap ;?></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#analogues"><?= $competitive_ability ;?></a>
        </li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#appliance"><?= $appliance ;?></a>
        </li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#actuality"><?= $poll_title ;?></a>
        </li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"><?= $contact_menu ;?></a></li>
      </ul>
    </div>
  </div>
</section>

<?php if (!empty($innovation['description'])): ;?>
<section style="min-height: 100vh" class="shadowed bg-white py-5" id="description">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center"><?= $description ;?></h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
          <?= $innovation['description']; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($innovation['road_map'])): ;?>
<section style="min-height: 100vh" class="shadowed bg-light py-5" id="roadmap">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center"><?= $roadmap ;?></h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-6 mx-auto">
          <?= $innovation['road_map']; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($innovation['analogues'])): ;?>
<section style="min-height: 100vh" class="shadowed bg-light py-5" id="analogues">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center"><?= $competitive_ability ;?></h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <p class="lead"><?= $innovation['analogues']; ?></p>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($innovation['appliance'])): ;?>
<section style="min-height: 100vh" class="shadowed bg-blue py-5" id="appliance">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center text-white"><?= $appliance ;?></h2>
    <hr class="yellow short-center mb-5">
    <?= $innovation['appliance'] ;?>
  </div>
</section>
<?php endif; ?>


<?php if (!empty($innovation['link_url'])): ;?>
<section style="min-height: 100vh" class="shadowed bg-light py-5" id="actuality">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center"><?= $poll_title ;?></h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <p class="lead">Нам важна обратная связь от потенциальных пользователей. Просим уделить несколько минут
          Вашего времени,
          ответив на несколько вопросов.</p>
        <div class="text-center">
          <a class="btn-custom btn-custom-outline-blue"
             href="<?= $innovation['link_url'] ;?>"
             target="_blank"><?= $btn_poll ;?> »</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section style="min-height: 100vh" class="shadowed bg-white py-5" id="contact">
  <div class="container py-3 p-md-5">
    <h2 class="display-5"><?= $contact_title ;?></h2>
    <hr class="red long-left mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <form class="custom-form" method="post" action="#contact">
          <div class="form-group">
            <label for="name"><?= $label_name; ?> <sup>*</sup></label>
              <?php $class = isset($errors['name']) ? 'is-invalid' : '';
              $value = isset($contact['name']) ? $contact['name'] : ''; ?>
            <input name="contact[name]" type="text" class="form-control <?= $class; ?>" id="name"
                   value="<?= $value; ?>">
              <?php if (isset($errors['name'])): ; ?>
                <div class="invalid-feedback">
                    <?= $errors['name']; ?>
                </div>
              <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="email"><?= $label_email; ?> <sup>*</sup></label>
              <?php $class = isset($errors['email']) ? 'is-invalid' : '';
              $value = isset($contact['email']) ? $contact['email'] : ''; ?>
            <input name="contact[email]" type="email" class="form-control <?= $class; ?>" id="email"
                   placeholder="name@example.com" value="<?= $value; ?>">
              <?php if (isset($errors['email'])): ; ?>
                <div class="invalid-feedback">
                    <?= $errors['email']; ?>
                </div>
              <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="message"><?= $label_message; ?> <sup>*</sup></label>
              <?php $class = isset($errors['message']) ? 'is-invalid' : '';
              $value = isset($contact['message']) ? $contact['message'] : ''; ?>
            <textarea name="contact[message]" class="form-control <?= $class; ?>" id="message"
                      rows="5"><?= $value; ?></textarea>
              <?php if (isset($errors['message'])): ; ?>
                <div class="invalid-feedback">
                    <?= $errors['message']; ?>
                </div>
              <?php endif; ?>
          </div>
          <button type="submit" class="disabled btn-custom btn-custom-outline-blue btn-block"><?= $btn_send; ?>
          </button>
        </form>
          <?php if (isset($_SESSION['errors'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $_SESSION['errors'];
                unset($_SESSION['errors']); ?>
            </div>
          <?php endif; ?>

          <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success mt-3" role="alert">
                <?= $_SESSION['success'];
                unset($_SESSION['success']); ?>
            </div>
          <?php endif; ?>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <ul class="nav nav-hover-red">
        <li class="nav-item font-weight-bold"><a class="nav-link js-scroll-trigger" href="#review"><?= $return_top ;?></a>
        </li>
      </ul>
    </div>
  </div>
</section>
