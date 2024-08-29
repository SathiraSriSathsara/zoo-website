<?php
require_once './user.php'; 

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    try {
        $user = new User();
        $user->setId($userId);

        if ($user->delete()) {
            header("Location: ./members.php?message=User deleted successfully");
            exit();
        } else {
            echo "Failed to delete the user.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
?>
