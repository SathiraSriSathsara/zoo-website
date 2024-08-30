<?php


try {
  $conn = connection::getConnection();

  $stmt = $conn->prepare("SELECT * FROM food_outlet");
  $stmt->execute();

  $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $ex) {
  echo "Error: " . $ex->getMessage();
}

?>


<div class="row">
  <?php foreach ($events as $event): ?>
    <div class="col">
    <div class="card" style="width: 18rem; margin: 10px;">
      <img src="<?php echo './images/food-images/' . $event['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($event['name']); ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($event['name']); ?></h5>
        <p class="card-text">LKR <?php echo htmlspecialchars($event['price']); ?></p>
      </div>
    </div>           
    </div>
  <?php endforeach; ?>
</div>


