<!DOCTYPE html>
<html lang="en">

<?php $page = 'Events'; ?>

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
    <!-- Breadcrumb  -->
    <?php
    include './components/Breadcrumb.php'
    ?>
    <!-- page content -->
    <div class="container px-4 py-5" id="custom-cards">
        <div class="container p-5">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt tenetur officia esse accusantium nulla ut, aliquam quae! Aliquid rerum accusamus ullam corporis cupiditate et enim officia autem, esse numquam!</p>
        </div>
        <?php
        include './components/eventCard.php'
        ?>
    </div>



    <!-- footer -->
    <?php
    include './components/footer.php'
    ?>


</body>

</html>