<?php 
require('./app/connection.php');

try{
  $conn = connection::getConnection();

  $stmt = $conn->prepare("SELECT * FROM user");
  $stmt->execute();

  $user = $stmt->fetch(PDO::FETCH_ASSOC);
}catch(Exception $ex) {
  echo "Error: " . $ex->getMessage();
}


?>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>