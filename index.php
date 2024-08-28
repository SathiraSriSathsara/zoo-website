<!DOCTYPE html>
<html lang="en">

<?php $page = 'Home'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <title><?php echo $page ?></title>
</head>

<body>
  <!-- header  -->
  <?php
  include './components/header.php'
  ?>
  <!-- Carousel  -->
  <div id="myCarousel" class="carousel slide mb-6 py-0" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner p-0">
      <div class="carousel-item active">
        <img src="./images/carousel/carousel-1.png" width="100%" class="bd-placeholder-img" alt="Carousel Image">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Welcome to the Zoo Parc.</h1>
            <p class="opacity-75">Where wild wonders comes to life !</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/carousel/carousel-5.png" width="100%" class="bd-placeholder-img" alt="Carousel Image">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/carousel/carousel-3.png" width="100%" class="bd-placeholder-img" alt="Carousel Image">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </header>
  </div>
  <!-- services -->
  <?php
  include './components/services.php'
  ?>
  <!-- Volunteer Program  -->
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Volunteer program</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
          popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive
          prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-outline-success btn-lg px-4">Apply now</button>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="./images/thumb/tumb-1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
          height="500" loading="lazy">
      </div>
    </div>
  </div>
  <!-- events -->
  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">latest Informations</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                  class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#geo-fill" />
                </svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#calendar3" />
                </svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                  class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#geo-fill" />
                </svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#calendar3" />
                </svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
          style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                  class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#geo-fill" />
                </svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#calendar3" />
                </svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container home-tumb my-5">
    <img src="./images/carousel/carousel-4.png" class=" img-thumbnail rounded" alt="">
    <div class="centered">
      <h3 class="pt-0 mt-0 mb-0 display-6 lh-1 fw-bold text-shadow-bg-black ">Where wild wonders comes to life !</h3>
    </div>
  </div>


  <!-- footer -->
  <?php include './components/footer.php' ?>

  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>