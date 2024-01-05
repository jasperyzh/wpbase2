<div class="container">
  <div class="list-group list-group__default">
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <small class=" flex-grow-1">3 days ago</small>
        <div class="list-group-item__content">
          <h5 class="mb-1">List group item heading</h5>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small>And some small print.</small>
        </div>
      </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <small class=" flex-grow-1">3 days ago</small>
        <div class="list-group-item__content">
          <h5 class="mb-1">List group item heading</h5>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small>And some muted small print.</small>
        </div>
      </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <small class=" flex-grow-1">3 days ago</small>
        <div class="list-group-item__content">
          <h5 class="mb-1">List group item heading</h5>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small>And some muted small print.</small>
        </div>
      </div>
    </a>
  </div>
</div>

<hr class="separator" />

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card card--lg">
        <div class="card-body">
          <i class="bi bi-dot"></i>
          <p class="card-text">This is some text within a card body.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card--lg">
        <div class="card-body">
          <i class="bi bi-dot"></i>
          <p class="card-text">This is some text within a card body.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card--lg">
        <div class="card-body">
          <i class="bi bi-dot"></i>
          <p class="card-text">This is some text within a card body.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<hr class="separator" />

<div class="container">
  <div class="row mb-3">
    <div class="col-md-6 d-flex flex-column align-items-start gap-2">
      <p class="pb-2 text-muted mb-0 h6">Features with title</p>
      <h2 class="fw-bold text-body-emphasis">
        Left-aligned title explaining these awesome features
      </h2>
      <p>
        Paragraph of text beneath the heading to explain the heading. We'll add
        onto it with another sentence and probably just keep going until we run
        out of words.
      </p>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-sm-3 g-4">

    <?php for ($i = 0; $i <= 5; $i++) : ?>
      <div class="col d-flex flex-column gap-2">
        <i class="bi bi-airplane-fill"></i>
        <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
        <p>
          Paragraph of text beneath the heading to explain the heading.
        </p>
      </div>
    <?php endfor; ?>

  </div>
</div>

<div class="jumbotron bg-body-tertiary my-5 py-5 position-relative overflow-hidden">
  <div class="container py-5 position-relative z-3">
    <h1 class="text-body-emphasis">Full-width jumbotron</h1>
    <p class="col-lg-8 lead">
      This takes the basic jumbotron above and makes its background edge-to-edge
      with a <code>.container</code> inside to align content. Similar to above,
      it's been recreated with built-in grid and utility classes.
    </p>
  </div>
  <img class="jumbotron__img" src="/assets/images/Sorang Sorang (Ticket)-ZH_01350.jpg" alt="" />
</div>

<div class="container">
  <div class="row mb-3">
    <div class="col-md-6 d-flex flex-column align-items-start gap-2">
      <p class="pb-2 text-muted mb-0 h6">Useful Information</p>
      <h2 class="fw-bold text-body-emphasis">Upcoming events</h2>
      <p>
        Paragraph of text beneath the heading to explain the heading. We'll add
        onto it with another sentence and probably just keep going until we run
        out of words.
      </p>
    </div>
  </div>

  <div class="row">
    <?php for ($i = 0; $i <= 2; $i++) : ?>
      <ul class="list-group list-group-horizontal-md list-group-horizontal--even">
        <li class="list-group-item">
          <div class="list-group-item__content">
            <h5 class="mb-0">Sunday, 24 September 2023</h5>
            <small class="me-1">12:00 AM</small>
          </div>
        </li>
        <li class="list-group-item">
          <div class="list-group-item__content">
            <h5 class="mb-0">Sunday, 24 September 2023</h5>
            <small class="me-1">12:00 AM</small>
          </div>
        </li>
      </ul>
    <?php endfor; ?>

  </div>
</div>

<hr class="separator" />

<!-- team -->
<div class="container">
  <div class="row mb-3">
    <div class="col-md-6 d-flex flex-column align-items-start gap-2">
      <p class="pb-2 text-muted mb-0 h6">Human Beans</p>
      <h2 class="fw-bold text-body-emphasis">Our awesome team</h2>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-2 g-3">
    <?php for ($i = 0; $i <= 5; $i++) : ?>
      <div class="col">
        <div class="card">
          <div class="row g-0">
            <div class="col-4">
              <img src="/assets/images/placeholder.jpg" class="rounded" />
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="card-body">
                <h5 class="card-title">Isabella Clark</h5>
                <p class="card-text">Chief Technology Officer</p>
                <p class="card-text">
                  <a href="#" target="_blank">
                    <i class="bi bi-facebook"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="bi bi-facebook"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="bi bi-facebook"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>

<hr class="separator" />

<div class="container my-5">
  <div class="row">
    <div class="col-lg-7">
      <img class="object-fit-cover w-100" src="/assets/images/placeholder.jpg" alt="--image" style="aspect-ratio: 16/9" />
    </div>
    <div class="col-lg-4 offset-lg-1 d-flex flex-column justify-content-between">
      <div>
        <p class="pb-2 text-muted mb-0 h6">You Should to See</p>

        <h2 class="fw-bold text-body-emphasis">
          Carefully crafted with love to small things
        </h2>
      </div>
      <div>
        <p>
          Perfect for School Holidays and More. Don't miss out on the
          opportunity to enrich your family's lives with the joy of science. Get
          your tickets now!
        </p>

        <div class="d-flex">
          <a href="#" class="btn btn-secondary">Contact Us</a>
          <a href="#" class="btn btn-secondary">CTA 2</a>
        </div>
      </div>
    </div>
  </div>
</div>

<hr class="separator" />

<div class="container text-bg-primary rounded p-lg-5 text-center">
  <div class="row justify-content-center mb-3">
    <div class="col-md-6 d-flex flex-column align-items-center gap-2">
      <p class="pb-2 mb-0 h6">Reason</p>
      <h2 class="fw-bold" style="text-wrap: balance">
        Why you'd like to join our workshop?
      </h2>
      <p>
        Paragraph of text beneath the heading to explain the heading. We'll add
        onto it with another sentence and probably just keep going until we run
        out of words.
      </p>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-sm-3 g-4">
    <?php for ($i = 0; $i <= 2; $i++) : ?>
      <div class="col d-flex flex-column gap-2">
        <i class="bi bi-airplane-fill h3"></i>
        <h4 class="fw-semibold mb-0">Featured title</h4>
        <p>
          We all are passionate to transform your ideas into reality.
          Collaborate with friends, family and coworkers from anywhere!
        </p>
      </div>
    <?php endfor; ?>
  </div>
</div>

<hr class="separator" />

<div class="container">
  <div class="row mb-3">
    <div class="col-md-8">
      <h2 class="fw-bold text-body-emphasis">Contact us</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
        repellat possimus aperiam, excepturi dicta laudantium soluta praesentium
        inventore animi quo.
      </p>
    </div>
  </div>

  <div class="row">
    <div class="col p-2 p-lg-4 glass_only">
      <form class="needs-validation" novalidate="">
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" />
            <div class="invalid-feedback">Valid first name is required.</div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" />
            <div class="invalid-feedback">Valid last name is required.</div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <div class="input-group has-validation">
              <span class="input-group-text">@</span>
              <input type="text" class="form-control" id="username" placeholder="Username" required="" />
              <div class="invalid-feedback">Your username is required.</div>
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email <span>(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" />
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>
        </div>

        <hr class="my-4" />

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="same-address" />
          <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="save-info" />
          <label class="form-check-label" for="save-info">Save this information for next time</label>
        </div>

        <button class="w-100 btn btn-primary btn-lg mt-3" type="submit">Submit</button>
      </form>
    </div>
    <div class="col offset-lg-1 my-lg-5">
      <h3>Welcome</h3>
      <p class="lead">828 Sipes Crescent Suite 914</p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, ipsam
        asperiores, repudiandae voluptate aliquid minima eius ipsa explicabo
        consequatur a possimus similique alias optio veritatis officiis facilis
        laboriosam in culpa!
      </p>

      <div class="d-flex">
        <a href="#" target="_blank" class="btn btn-light btn-sm me-1">
          <i class="bi bi-facebook"></i> Facebook
        </a>
        <a href="#" target="_blank" class="btn btn-light btn-sm me-1">
          <i class="bi bi-facebook"></i> Facebook
        </a>
        <a href="#" target="_blank" class="btn btn-light btn-sm me-1">
          <i class="bi bi-facebook"></i> Facebook
        </a>
      </div>
    </div>
  </div>
</div>

<div class="my-5 py-5 position-relative overflow-hidden">
  <div class="bg__fixed bg--placeholder z-1"></div>
  <div class="container py-5 position-relative z-3 d-flex flex-wrap justify-content-lg-between">
    <h2 class="text-body-emphasis">Join awesome Community</h2>
    <a href="#" class="btn btn-primary btn-lg">Create account</a>
  </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.759831766701!2d101.70940071162063!3d3.157898653083305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d6b5277b89%3A0xe45cf549f47ee0d3!2sPetrosains%2C%20The%20Discovery%20Centre!5e0!3m2!1sen!2sca!4v1697013289439!5m2!1sen!2sca" style="border:0;" class="google-map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<div class="container">
  <div class="row row-cols-1 row-cols-lg-3 g-3 mb-4">
    <?php for ($i = 0; $i <= 5; $i++) : ?>
      <div class="col">
        <div class="card text-bg-primary text-center p-4">
          <div class="card-body">
            <i class="bi bi-airplane-fill h3 mb-2"></i>
            <h3 class="h5">
              <span class="d-block h1 mb-0">33</span>Orders received
            </h3>
            <p class="card-text">
              Leverage agile frameworks to provide a robust synopsis.
            </p>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>

<hr class="separator" />

<div class="container">
  <div class="row mb-3">
    <div class="col-md-8">
      <h2 class="fw-bold text-body-emphasis">Our partners</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
        repellat possimus aperiam, excepturi dicta laudantium soluta praesentium
        inventore animi quo.
      </p>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-lg-3 g-3 mb-4">
    <?php for ($i = 1; $i <= 6; $i++) : ?>
      <div class="col">
        <div class="card text-center shadow">
          <div class="card-body">
            <img src="/assets/images/placeholder.jpg" width="108" alt="" class="mb-2" />
            <h3 class="h6">Partner #<?php echo $i; ?></h3>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>

<hr class="separator" />

<div class="container text-bg-primary rounded px-lg-5">
  <div class="row row-cols-1 row-cols-md-3 gx-5 row-gap-3 py-3 py-lg-5">
    <?php
    for ($i = 0; $i <= 2; $i++) :
      $class = "col";
      if ($i == 1) {
        $class .= " border-left-right-light";
      }
    ?>
      <div class="<?php echo $class; ?>">
        <h3 class="h5">
          <span class="d-block h1 mb-0">75</span>Orders received
        </h3>
        <p class="card-text">
          Organically grow the holistic world view of disruptive innovation
          via workplace diversity and empowerment.
        </p>
      </div>
    <?php endfor; ?>
  </div>
</div>

<hr class="separator" />

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="accordion accordion-flush accordion-rounded d-flex flex-column row-gap-2" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" style="">
            <div class="accordion-body">
              Placeholder content for this accordion, which is intended to
              demonstrate the <code>.accordion-flush</code> class. This is the
              first item's accordion body.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
            <div class="accordion-body">
              Placeholder content for this accordion, which is intended to
              demonstrate the <code>.accordion-flush</code> class. This is the
              second item's accordion body. Let's imagine this being filled with
              some actual content.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
            <div class="accordion-body">
              Placeholder content for this accordion, which is intended to
              demonstrate the <code>.accordion-flush</code> class. This is the
              third item's accordion body. Nothing more exciting happening here
              in terms of content, but just filling up the space to make it
              look, at least at first glance, a bit more representative of how
              this would look in a real-world application.
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr class="separator" />

    <div class="container rounded shadow-sm px-lg-5 glass">
      <div class="row row-cols-1 row-cols-md-3 gx-5 row-gap-3 py-3 py-lg-5">
        <?php
        for ($i = 0; $i <= 2; $i++) :
          $class = "col";
          if ($i == 1) {
            $class .= " border-left-right";
          }
        ?>
          <div class="<?php echo $class; ?>">
            <span class="d-block h1 mb-2"><?php echo $i; ?></span>
            <h3 class="h5">Automated testing and professional support</h3>
            <p class="card-text fs-6">
              Organically grow the holistic world view of disruptive
              innovation via workplace diversity and empowerment
            </p>
            <a href="#">Read more</a>
          </div>
        <?php endfor; ?>
      </div>
    </div>

    <hr class="separator" />

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" style="">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the first item's accordion body.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the second item's accordion body. Let's imagine this being
                  filled with some actual content.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                <div class="accordion-body">
                  Placeholder content for this accordion, which is intended to
                  demonstrate the <code>.accordion-flush</code> class. This is
                  the third item's accordion body. Nothing more exciting
                  happening here in terms of content, but just filling up the
                  space to make it look, at least at first glance, a bit more
                  representative of how this would look in a real-world
                  application.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="my-5 py-5 position-relative overflow-hidden">
  <div class="container py-5 position-relative z-3">
    <h2 class="text-body-emphasis">Discount on all tariff plans</h2>
    <p>Hurry, do not miss your chance!</p>

    <div class="d-flex column-gap-2">
      <a href="#" class="btn btn-secondary">Get started</a>
      <a href="#" class="btn btn-secondary">Contact us</a>
    </div>
  </div>

  <div class="bg__fixed z-1"></div>
</div>