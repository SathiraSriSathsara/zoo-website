<?php
require("../admin/event.php");

$event = new Event();
$events = $event->get();
?>



<!DOCTYPE html>
<html lang="en">
<?php $page = 'Events'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/main.css">
    <link rel="icon" type="image/x-icon" href="./images/icons/zooparc-favicon-green.png">
    <title><?php echo $page; ?> - Admin Panel</title>
</head>

<body>
    <!-- side nav  -->
    <?php
    include '../../../components/sideNav.php';
    $user = 'User';
    getNav($user, $page);
    ?>

    <!-- content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">

            <!-- content -->
            <div class="d-flex justify-content-start">
                <h4>Scheduled Events</h4>
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="p-2"> <a href="./event-add.php"><button type="button" class="btn btn-primary"><a href="../../../index.php"><img src="../../../images/icons/home-white-50.png" alt="" width="22px"></a></button></a></div>
            </div>
            
            <form action="./event-update.php" method="post">
            <div class="container p-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
                foreach ($events as $event) {
                    echo '
                    <div class="col">
                        <div class="card">
                        <img src="../../../images/event-images/'. $event->getImage() .'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $event->getName() . '</h5>
                            <p class="card-text">' . $event->getShortDescription() . '</p>
                        </div>
                        </div>
                    </div>
                ';
                }
                ?>

                </div>
            </div>
            </form>

        </div>
    </main>

    </div>
    </div>
</body>

</html>