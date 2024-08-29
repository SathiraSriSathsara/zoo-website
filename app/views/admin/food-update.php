<?php
include("./foodOutlet.php");

$msg = '';
$foodOutlet = new FoodOutlet();
$id = isset($_GET['id']) ? $_GET['id'] : null; // Make sure $id is defined

if ($id) {
    $foodOutlet->setId($id); // Set ID from GET parameter

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['txtName'];
        $price = $_POST['txtPrice'];
        $image = isset($_FILES['txtImage']['name']) ? $_FILES['txtImage']['name'] : '';

        if ($image) {
            $info = new SplFileInfo($image);
            $imageName = $foodOutlet->getId() . '.' . $info->getExtension();
            $newName = '../../../images/food-images/' . $imageName;
            move_uploaded_file($_FILES['txtImage']['tmp_name'], $newName);
            $foodOutlet->setImage($imageName);
        }

        $foodOutlet->setName($name);
        $foodOutlet->setPrice($price);
        $foodOutlet->update();

        $msg = "Food item updated successfully!";
    }

    // Fetch existing data for editing
    $foodItem = $foodOutlet->getById($id);
    if ($foodItem) {
        $name = htmlspecialchars($foodItem['name']);
        $price = htmlspecialchars($foodItem['price']);
        $image = htmlspecialchars($foodItem['image']);
    } else {
        $msg = "Food item not found.";
        $name = '';
        $price = '';
        $image = '';
    }
} else {
    $msg = "ID not provided.";
    $name = '';
    $price = '';
    $image = '';
}
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
            <div class="container p-3">
                <h3 class="mb-4"><a href="./food_outlets.php"><img src="../../../images/icons/back.png" alt="" width="22px"></a> Update Food Item</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" name="txtId" class="form-control" readonly value="<?php echo $id; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="txtName" class="form-control" value="<?php echo $name; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="text" name="txtPrice" class="form-control" value="<?php echo $price; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name="txtImage" type="file" id="formFile">
                        <br>
                        <?php if ($image): ?>
                            <p><img src="../../../images/food-images/<?php echo $image; ?>" alt="Current Image" class="img-thumbnail" width="100"></p>
                        <?php endif; ?>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update">
                </form>
            </div>
        </div>
    </main>

    <?php
        if ($msg) {
            echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
        }
    ?>
</body>

</html>
