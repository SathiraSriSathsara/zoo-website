<?php
require('./app/connection.php');

try {
  $conn = connection::getConnection();

  $stmt = $conn->prepare("SELECT * FROM event");
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
      <img src="<?php echo './images/event-images/' . $event['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($event['name']); ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($event['name']); ?></h5>
        <p class="card-text"><?php echo htmlspecialchars($event['short_description']); ?></p>
        <a href="evt.php?id=<?php echo $event['id']; ?>"><button type="button" class="btn btn-outline-success">See more</button></a>
      </div>
    </div>           
    </div>
  <?php endforeach; ?>
</div>