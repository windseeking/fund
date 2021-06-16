<div class="container-fluid px-3 px-md-5 mb-5">
  <ul>
    <li><?= $item_1 ;?></li>
    <li><?= $item_2 ;?></li>
    <li><?= $item_3 ;?></li>
    <li><?= $item_4 ;?></li>
  </ul>

  <h2><?= $why_title ;?></h2>
  <ul>
    <li><?= $why_item_1 ;?></li>
    <li><?= $why_item_2 ;?></li>
    <li><?= $why_item_3 ;?></li>
    <li><?= $why_item_4 ;?></li>
  </ul>
  <div class="row">
    <div class="col-12 col-md-6 card-group">
      <div class="card shadowed border-light">
        <div class="card-body">
          <h2 class="card-title"><?= $st_title ;?></h2>
          <p class="card-text"><?= $st_text ;?></p>
        </div>
        <div class="card-footer border-light bg-white">
          <a class="btn-custom btn-custom-outline-blue btn-block"
             href="https://europass.cedefop.europa.eu/editors/en/cv/compose"
             target="_blank"><?= $create ;?></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 card-group">
      <div class="card shadowed border-light">
        <div class="card-body">
          <h2 class="card-title"><?= $co_title ;?></h2>
          <p class="card-text"><?= $co_text ;?></p>
        </div>
        <div class="card-footer border-light bg-white">
          <a class="btn-custom btn-custom-outline-blue btn-block" href="mailto:innovationfund@onu.edu.ua"
             target="_blank"><?= $request ;?></a>
        </div>
      </div>
    </div>
  </div>
</div>
