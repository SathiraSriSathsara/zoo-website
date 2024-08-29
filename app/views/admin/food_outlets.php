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

            <h3 class="mb-4">
                <a href="./food_outlets.php">
                    <img src="../../../images/icons/back.png" alt="" width="22px">
                </a> Food Items
            </h3>

            <div class="d-flex flex-row-reverse mb-3">
                <a href="./food-add.php">
                    <button type="button" class="btn btn-primary">
                        <img src="../../../images/icons/add.png" alt="" width="22px"> Add new food item
                    </button>
                </a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($foodItems as $index => $item): ?>
                        <tr>
                            <th scope="row"><?php echo $index + 1; ?></th>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td>LKR <?php echo htmlspecialchars($item['price']); ?></td>
                            <td>
                                <a href="food-update.php?id=<?php echo $item['id']; ?>" class="btn btn-dark">
                                    <img src="../../../images/icons/edit.png" alt="" width="22px"> 
                                </a>
                                <a href="food-delete.php?id=<?php echo $item['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <img src="../../../images/icons/delete.png" alt="" width="22px"> 
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>
</body>

</html>
