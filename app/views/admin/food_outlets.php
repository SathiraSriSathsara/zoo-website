<?php
include("./foodOutlet.php");
session_start();

$foodOutlet = new FoodOutlet();
$foodItems = $foodOutlet->get();
?>

<!DOCTYPE html>
<html lang="en">
<?php $page = 'Food outlets'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/main.css">
    <title><?php echo $page; ?> - Admin Panel</title>
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
            <h3 class="mb-4">
                <a href="./food_outlets.php">
                    <img src="../../../images/icons/back.png" alt="" width="22px">
                </a> Food Items
            </h3>
            <div class="d-flex flex-row-reverse">
                <div class="p-2"> <a href="./food-add.php"><button type="button" class="btn btn-primary"><img src="../../../images/icons/add.png" alt="" width="22px"> Add new food item</button></a></div>
            </div>

            <div class="container p-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($foodItems as $item): ?>
                <div class="card" style="width: 18rem;">
                    <img src="../../../images/food-images/<?php echo htmlspecialchars($item['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($item['name']); ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: LKR <?php echo htmlspecialchars($item['price']); ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="food-update.php?id=<?php echo $item['id']; ?>" class="btn btn-dark"><img src="../../../images/icons/edit.png" alt="" width="22px"> Edit</a>
                        <a href="food-delete.php?id=<?php echo $item['id']; ?>" class="btn btn-danger"><img src="../../../images/icons/delete.png" alt="" width="22px"> Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            </div>

        </div>
    </main>
</body>

</html>
