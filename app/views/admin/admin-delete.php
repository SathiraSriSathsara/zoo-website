<?php
require("./admin.php");


if (isset($_GET['id'])) {
    $adminId = $_GET['id'];

    try {
        $admin = new Admin();
        $admin->setId($adminId);

        if ($admin->delete()) {
            header("Location: ./admins.php?message=Admin deleted successfully");
            exit();
        } else {
            echo "Failed to delete the Admin.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}


