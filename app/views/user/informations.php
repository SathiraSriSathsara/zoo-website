<?php
require("./information.php");

if (isset($_POST['btnAdd'])) {
    $info = new Information();
    $info->setName($_POST['txtName']);
    $info->setShortDescription($_POST['txtShortDesc']);
    $info->setDescription($_POST['txtDesc']);

    if (isset($_FILES['txtImage']) && $_FILES['txtImage']['error'] == 0) {
        $target_dir = "../../../images/info-images/";
        $target_file = $target_dir . basename($_FILES['txtImage']['name']);
        move_uploaded_file($_FILES['txtImage']['tmp_name'], $target_file);
        $info->setImage(basename($_FILES['txtImage']['name']));
    }

    $result = $info->add();
    
    if ($result > 0) {
        echo "<script>alert('Information added successfully!'); window.location.href = './index.php';</script>";
    } else {
        echo "<script>alert('Failed to add information. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php $page = 'Informations'; ?>

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
            <div class="container p-3">
                <h3 class="mb-4">Add Information</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="txtCode" class="form-label">ID</label>
                        <input type="text" name="txtCode" class="form-control" readonly placeholder="Code will be generated automatically">
                    </div>
                    <div class="mb-3">
                        <label for="txtName" class="form-label">Name</label>
                        <input type="text" name="txtName" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtShortDesc" class="form-label">Short description</label>
                        <input type="text" name="txtShortDesc" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtDesc" class="form-label">Description</label>
                        <textarea id="txtDesc" name="txtDesc" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name="txtImage" type="file" id="formFile">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add" name="btnAdd">
                </form>
            </div>

        </div>
    </main>
</body>
</html>
