<!DOCTYPE html>
<html lang="en">
<?php $page = 'Events'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/main.css">
    <title><?php echo $page; ?></title>
</head>

<body>
    <!-- side nav  -->
    <?php
    include '../../../components/sideNav.php';
    $user = 'Admin';
    getNav($user, $page);
    ?>

    <!-- content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">

            <!-- content -->
            <div class="d-flex justify-content-start"><h4>Welcome to admin panel Sam</h4></div>
            <div class="d-flex flex-row-reverse">
                <div class="p-2"> <a href="./event-add.php"><button type="button" class="btn btn-primary">Add new event</button></a></div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

        </div>
    </main>

    </div>
    </div>
</body>

</html>