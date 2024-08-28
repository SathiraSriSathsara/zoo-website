<!DOCTYPE html>
<html lang="en">

<?php $page = 'Volunteer'; ?>

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
    <div class="container p-5 m-5">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Profile image</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-success">Register</button>
        </form>
    </div>

    <!-- footer -->
    <?php
    include './components/footer.php'
    ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>