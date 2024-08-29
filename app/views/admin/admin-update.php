<?php
require("./admin.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $image = '';

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $imagePath = '../../../images/admin-profile/' . $imageName;
        move_uploaded_file($imageTmpName, $imagePath);
        $image = $imageName;
    }

    $admin = new Admin();
    $admin->setId($id);
    $admin->setFirstName($firstName);
    $admin->setLastName($lastName);
    $admin->setEmail($email);
    $admin->setImage($image);

    if ($admin->update()) {
        header("Location: admins.php"); // Redirect to the admin list page
        exit();
    } else {
        $error = "Failed to update admin details.";
    }
} else {
    // Display form for updating admin details
    $id = $_GET['id'];
    $admin = new Admin();
    $admin = $admin->getById($id);
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
                <a href="./admins.php">
                    <img src="../../../images/icons/back.png" alt="" width="22px">
                </a> Update Admin
            </h3>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form action="admin-update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($admin->getId()); ?>">
                
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars($admin->getFirstName()); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars($admin->getLastName()); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($admin->getEmail()); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <br>
                    <?php if ($admin->getImage()): ?>
                        <div>
                            <img src="../../../images/admin-profile/<?php echo htmlspecialchars($admin->getImage()); ?>" alt="Admin Image" width="100px">
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </main>
</body>

</html>
