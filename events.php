<!DOCTYPE html>
<html lang="en">

<?php $page = 'Events'; ?>

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
        <div class="container p-5">
            <p class="text-center">Discover exciting happenings at Zoo Parc with our Events page! From educational workshops and special animal encounters to seasonal celebrations and community activities, there's always something thrilling to experience. Check out our upcoming events to plan your visit around unique opportunities to engage with wildlife and connect with fellow animal enthusiasts. Stay tuned for updates and join us for memorable events that make your trip to Zoo Parc even more special!</p>
        </div>
    </div>

    <div class="container">
        <div class="container text-center">
            <div class="row">
                <?php
                include './components/eventCard.php'
                ?>
            </div>
        </div>
    </div>



    <!-- footer -->
    <?php
    include './components/footer.php'
    ?>


</body>

</html>