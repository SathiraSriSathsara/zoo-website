<?php
// Include the connection class file
require_once 'connection.php';

try {
    // Attempt to establish a connection to the database
    $conn = connection::getConnection();
    
    // If the connection is successful, output a success message
    echo "Connected to the database successfully!";
} catch (Exception $ex) {
    // If the connection fails, output the error message
    echo "Failed to connect to the database: " . $ex->getMessage();
}
?>
