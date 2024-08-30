<!DOCTYPE html>
<html lang="en">

<?php 
$page = 'Plan your visit';
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
  <!-- Breadcrumb  -->
  <?php
  include './components/Breadcrumb.php'
  ?>
  <!-- page content -->

  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Our food outlets</h2>
    <div class="container p-5">
      <p class="text-center">At Zoo Parc, we offer a variety of food outlets to satisfy every palate. Whether you're craving a quick snack or a hearty meal, our outlets provide a range of delicious options, including fresh salads, gourmet burgers, vegan dishes, and kid-friendly meals. Enjoy your food in a scenic setting surrounded by nature, making your visit to the zoo even more memorable. Don’t forget to try our signature treats, inspired by the wildlife you’ll encounter on your adventure!</p>
    </div>
  </div>

  <div class="container">
    <div class="container text-center">
      <div class="row">
        <?php
        include './components/foodOutlets.php';
        ?>
      </div>
    </div>
  </div>


  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Animal Informations</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

      <?php
      include './components/info-card.php'
      ?>

    </div>
  </div>

  <!-- footer -->
  <?php
  include './components/footer.php'
  ?>


</body>

</html>