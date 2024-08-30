<?php
require_once('./app/connection.php');

try {
    $conn = connection::getConnection();
    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

    $stmt = $conn->prepare("SELECT * FROM event WHERE id = :id LIMIT 1");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $event = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$event) {
        echo "Event not found.";
        exit;
    }
} catch (Exception $ex) {
    echo "Error: " . $ex->getMessage();
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/main.css">
    <link rel="icon" type="image/x-icon" href="./images/icons/zooparc-favicon-green.png">
    <title><?php echo htmlspecialchars($event['name']); ?> - Details</title>
</head>
<body>
    <div class="container mt-5">
        <h1><?php echo htmlspecialchars($event['name']); ?></h1>
        <p><strong>Short Description:</strong> <?php echo htmlspecialchars($event['short_description']); ?></p>
        <p><?php echo nl2br(htmlspecialchars($event['description'])); ?></p>
        <img src="<?php echo './images/event-images/'. htmlspecialchars($event['image']); ?>" alt="<?php echo htmlspecialchars($event['name']); ?>" class="img-fluid">
    </div>
</body>
</html>
