<!DOCTYPE html>
<html lang="en">

<?php $page = 'Animals'; ?>

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
    $page = 'Animals';
    include './components/header.php'

    ?>
    <!-- Breadcrumb  -->
    <?php
    include './components/Breadcrumb.php'
    ?>


    <!-- footer -->
    <?php
    include './components/footer.php'
    ?>


</body>

</html>