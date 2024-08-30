<?php
require_once('./app/connection.php');

try {
    $conn = connection::getConnection();
    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

    $stmt = $conn->prepare("SELECT * FROM information WHERE id = :id LIMIT 1");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $info = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$info) {
        echo "Information not found.";
    } else {
        echo "Event found: " . htmlspecialchars($info['name']);
    }
} catch (Exception $ex) {
    echo "Error: " . $ex->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/main.css">
    <title><?php echo htmlspecialchars($info['name']); ?> - Details</title>
</head>
<body>
    <div class="container mt-5">
        <h1><?php echo htmlspecialchars($info['name']); ?></h1>
        <p><strong>Short Description:</strong> <?php echo htmlspecialchars($info['short_description']); ?></p>
        <p><?php echo nl2br(htmlspecialchars($info['description'])); ?></p>
        <img src="<?php echo './images/info-images/' . htmlspecialchars($info['image']); ?>" alt="<?php echo htmlspecialchars($info['name']); ?>" class="img-fluid">
    </div>
</body>
</html>
