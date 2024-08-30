<?php

try {
    $conn = connection::getConnection();

    $stmt = $conn->prepare("SELECT * FROM information");
    $stmt->execute();

    $informations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
    echo "Error: " . $ex->getMessage();
}
?>

<?php foreach ($informations as $information): ?>
    <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('<?php echo './images/info-images/' . $information['image']; ?>');"
            class="card-img-top"
            alt="<?php echo htmlspecialchars($information['name']); ?>">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?php echo htmlspecialchars($information['name']); ?></h3>
                <p><a class="link-opacity-10-hover" href="info.php?id=<?php echo $information['id']; ?>">learn more..</a></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>


