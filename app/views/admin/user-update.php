<?php
require_once './user.php'; 

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $user = new User();
    $user = $user->getById($userId);

    if (!$user) {
        echo "User not found.";
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $image = $user->getImage(); // Default to current image

        // Check if a new image was uploaded
        if (!empty($_FILES['image']['name'])) {
            $target_dir = "../../../images/profile/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = basename($_FILES["image"]["name"]);
            } else {
                echo "Failed to upload new image.";
                exit();
            }
        }

        // Update user information
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setEmail($email);
        $user->setImage($image);

        try {
            if ($user->update()) {
                header("Location: ./members.php?message=User updated successfully");
                exit();
            } else {
                echo "Failed to update the user.";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    echo "Invalid request.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php $page = 'Edit User'; ?>

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
    $userType = 'Admin';
    getNav($userType, $page);
    ?>

    <!-- content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            <h3 class="mb-4"><a href="./index.php"><img src="../../../images/icons/back.png" alt="" width="22px"></a> Edit User</h3>

            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars($user->getFirstName()); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars($user->getLastName()); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user->getEmail()); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Profile Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <br>
                    <?php if ($user->getImage()) : ?>
                        <img src="../../../images/profile/<?php echo $user->getImage(); ?>" alt="User Image" width="100px">
                    <?php endif; ?>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
    </main>

</body>

</html>
