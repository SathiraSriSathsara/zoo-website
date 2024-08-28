<!DOCTYPE html>
<html lang="en">

<?php $page = 'Contact'; ?>

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
    $page = 'Contact';
    include './components/header.php'

    ?>
    <!-- Breadcrumb  -->
    <?php
    include './components/Breadcrumb.php'
    ?>
    <!-- page content -->
    <div class="container p-5 m-5">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Message" class="form-label">Message</label>
                <textarea name="" id="" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <!-- footer -->
    <?php
    include './components/footer.php'
    ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>