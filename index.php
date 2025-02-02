<!DOCTYPE html>
<html lang="en">

<?php 
$page = 'Home'; 
require('./app/connection.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="icon" type="image/x-icon" href="./images/icons/zooparc-favicon-green.png">
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
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/carousel/carousel-5.png" width="100%" class="bd-placeholder-img" alt="Carousel Image">
        <div class="container">
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/carousel/carousel-3.png" width="100%" class="bd-placeholder-img" alt="Carousel Image">
        <div class="container">
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

  <div class="my-5">
    <div class="p-5 text-center bg-body-tertiary">
      <div class="container py-5">
        <h1 class="text-body-emphasis">Welcome to Zoo Parc</h1>
        <p class="col-lg-8 mx-auto lead">
        Explore Zoo Parc's wild wonders and meet our amazing animals. Every visit is an unforgettable adventure!
        </p>
      </div>
    </div>
  </div>

  <!-- services -->
  <?php
  include './components/services.php'
  ?>
  <!-- Volunteer Program  -->
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Want to help us?</h1>
        <p class="lead">Become an essential part of Zoo Parc's goal to preserve and care for wildlife by enrolling in our volunteer program. As a volunteer, you'll get the exceptional chance to assist with animal care, educate guests, and take part in conservation efforts with our committed staff. Our volunteer program offers a fulfilling experience that draws you closer to nature, whether you're enthusiastic about wildlife, ready to learn, or just want to make a difference. Your time and work will be extremely important in building a better future for the creatures we love.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="./volunteer-form.php"><button type="button" class="btn btn-outline-success btn-lg px-4">Apply now</button></a>
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
    <h2 class="pb-2 border-bottom">Animal Informations</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

      <?php
      include './components/info-card.php'
      ?>

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