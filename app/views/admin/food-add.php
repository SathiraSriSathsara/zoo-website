<?php
include("./foodOutlet.php");
$msg = '';

if (isset($_POST["btnAdd"])) {
    $foodOutlet = new FoodOutlet();
    $foodOutlet->setName($_POST["txtName"]);
    $foodOutlet->setPrice($_POST["txtPrice"]);
    $foodOutlet->setImage("");

    $id = $foodOutlet->add();

    if ($id > 0) {
        if (isset($_FILES["txtImage"]) && $_FILES["txtImage"]["error"] == 0) {
            $info = new SplFileInfo($_FILES["txtImage"]["name"]);
            $imageName = $id . '.' . $info->getExtension();
            $newName = '../../../images/food-images/' . $imageName;
            $foodOutlet->setImage($imageName);
            $foodOutlet->setId($id);
            move_uploaded_file($_FILES["txtImage"]["tmp_name"], $newName);
            $foodOutlet->update();
            $msg = "Food item added successfully!";
        } else {
            $msg = "Food item added, but failed to upload image.";
        }
    } else {
        $msg = "Failed to add food item.";
    }
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
                <h3 class="mb-4"><a href="./food_outlets.php"><img src="../../../images/icons/back.png" alt="" width="22px"></a> Add Food Item</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" name="txtCode" class="form-control" readonly placeholder="Code will be generated automatically">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="txtName" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="text" name="txtPrice" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name="txtImage" type="file" id="formFile" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add" name="btnAdd">
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
