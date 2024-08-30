<?php
require("./admin.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin = new Admin();
    $admin->setFirstName($_POST['firstName']);
    $admin->setLastName($_POST['lastName']);
    $admin->setEmail($_POST['email']);
    $admin->setRole('admin');
    $admin->setImage($_FILES['image']['name']);
    
    // Handle image upload
    if (!empty($admin->getImage())) {
        $info = new SplFileInfo($admin->getImage());
        $imageName = uniqid() . '.' . $info->getExtension();
        $newName = '../../../images/admin-profile/' . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $newName);
        $admin->setImage($imageName);
    }
    
    // Set password
    if (!empty($_POST['password'])) {
        $admin->setPassword($_POST['password']);
    } else {
        echo "Password is required.";
        exit();
    }

    function checkAdded($admin){
        if ($admin->add()) {
            echo '<div class="alert alert-success" role="alert">Admin added!</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">Failed to add admin!</div>';
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<?php $page = 'Admins'; ?>

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
    $user = 'Admin';
    getNav($user, $page);
    ?>
    
    <!-- content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            <h3 class="mb-4"><a href="./admins.php"><img src="../../../images/icons/back.png" alt="" width="22px"></a> Add Admin</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Profile Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            <?php 
                checkAdded($admin);
            ?>
        </div>
    </main>
</body>
</html>
