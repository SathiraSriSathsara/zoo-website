<?php
require('./app/connection.php');


$first_name = $last_name = $email = $password = $image_name = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first_name"])) {
        $errors[] = "First name is required.";
    } else {
        $first_name = htmlspecialchars($_POST["first_name"]);
    }

    if (empty($_POST["last_name"])) {
        $errors[] = "Last name is required.";
    } else {
        $last_name = htmlspecialchars($_POST["last_name"]);
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } else {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
    }

    if (empty($_POST["password"])) {
        $errors[] = "Password is required.";
    } else {
        $password = $_POST["password"]; 
    }

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $allowed_types = ["jpg", "jpeg", "png", "gif"];
        $file_info = pathinfo($_FILES["image"]["name"]);
        $extension = strtolower($file_info["extension"]);

        if (in_array($extension, $allowed_types)) {
            $image_name = uniqid() . "." . $extension; 
            move_uploaded_file($_FILES["image"]["tmp_name"], "./images/profile/" . $image_name);
        } else {
            $errors[] = "Invalid image type. Allowed types are jpg, jpeg, png, gif.";
        }
    } else {
        $errors[] = "Image upload failed.";
    }

   
    if (empty($errors)) {
        try {
            $conn = connection::getConnection();

            
            $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, email, password, role, image) VALUES (:first_name, :last_name, :email, :password, :role, :image)");

            
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':image', $image_name);

            
            $role = 'user';

            
            $stmt->execute();

           
            echo "User registered successfully!";
        } catch (Exception $ex) {
            echo "Error: " . $ex->getMessage();
        }
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php $page = 'Volunteer'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/x-icon" href="./images/icons/zooparc-favicon-green.png">
    <title><?php echo $page ?></title>
</head>
<body>
    <!-- header  -->
    <?php include './components/header.php'; ?>
    <!-- Breadcrumb  -->
    <?php include './components/Breadcrumb.php'; ?>
    <!-- page content -->
    <div class="container p-5 m-5">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" required>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Profile image</label>
                <input class="form-control" type="file" id="formFile" name="image" required>
            </div>
            <button type="submit" class="btn btn-success">Register</button>
        </form>
    </div>

    <!-- footer -->
    <?php include './components/footer.php'; ?>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
