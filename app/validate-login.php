<?php
require_once 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $conn = connection::getConnection();


        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();


        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if ($password === $user['password']) {
                if($user['role'] === 'admin'){
                    header("Location: ./views/admin/index.php");
                    exit;
                }elseif($user['role'] === 'user'){
                    header("Location: ./views/user/index.php");
                    exit;                    
                }else{
                    echo "Unknown user role.";
                }
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email or password.";
        }
    } catch (Exception $ex) {
        echo "Error: " . $ex->getMessage();
    }
}
?>
