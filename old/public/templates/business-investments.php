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

<div class="row">
  <div class="col-12 col-md-11 mx-auto">
    <div class="row">
      <div class="col-12 col-md-6 mb-3 mb-md-0">
        <div class="accordion" id="accordion">
          <h2>For business</h2>
          <div class="card">
            <div class="card-header bg-white" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-bus-one"
                        aria-expanded="false" aria-controls="collapse-bus-one">B2C
                </button>
              </h5>
            </div>
            <div id="collapse-bus-one" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Advertising, implementation and promotion of goods and services of the company. By using discounts for
                students 19,000+ people will know about the company, you can get feedback on the product or simply
                increase
                sales.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapse-bus-two"
                        aria-expanded="false" aria-controls="collapse-bus-two">
                  CSR and Corporate culture
                </button>
              </h5>
            </div>
            <div id="collapse-bus-two" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Develop your CSR through practical training and seminars at the University.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapse-bus-three"
                        aria-expanded="false" aria-controls="collapse-bus-three">
                  Skill development
                </button>
              </h5>
            </div>
            <div id="collapse-bus-three" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Raising the qualification of the company's employees by participation in scientific events.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapse-bus-four"
                        aria-expanded="false" aria-controls="collapse-bus-four">
                  Human Resources
                </button>
              </h5>
            </div>
            <div id="collapse-bus-four" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                Involve students and University specialists in practice, internships or permanent employment.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingFive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                        data-target="#collapse-bus-five"
                        aria-expanded="false" aria-controls="collapse-bus-five">
                  Innovations. Analysis. Tests. Calculations
                </button>
              </h5>
            </div>
            <div id="collapse-bus-five" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                In cooperation with University it's possible to do more.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="accordion" id="accordion">
          <h2>For investments</h2>
          <div class="card">
            <div class="card-header bg-white" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapse-inv-one"
                        aria-expanded="false" aria-controls="collapse-inv-one">
                  Venture capital investments
                </button>
              </h5>
            </div>
            <div id="collapse-inv-one" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                All the time at University students create new start-ups and projects
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                        data-target="#collapse-inv-two"
                        aria-expanded="false" aria-controls="collapse-inv-two">
                  Investments into technologies and innovations
                </button>
              </h5>
            </div>
            <div id="collapse-inv-two" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                University contains many different developments, which can be realized in cooperation with business and investments
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapse-inv-three"
                        aria-expanded="false" aria-controls="collapse-inv-three">
                  Projects generation
                </button>
              </h5>
            </div>
            <div id="collapse-inv-three" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                The most important values are people and climate, that will be comfortable for creating new projects interesting for investments
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapse-inv-four"
                        aria-expanded="false" aria-controls="collapse-inv-four">
                  Investments protection
                </button>
              </h5>
            </div>
            <div id="collapse-inv-four" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                Different banks and experts will be engaged for partnership for sorting out the best projects and the best combinations of risks/profit
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingFive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapse-inv-five"
                        aria-expanded="false" aria-controls="collapse-inv-five">
                  Cooperation with business
                </button>
              </h5>
            </div>
            <div id="collapse-inv-five" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                In cooperation with business a large number of new ideas and projects requiring investment are expected
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>