<?php
include("./foodOutlet.php");

$msg = '';
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $foodOutlet = new FoodOutlet();
    $foodOutlet->setId($id);

    $foodItem = $foodOutlet->getById($id);
    if ($foodItem) {
        $imageName = $foodItem['image'];
        $foodOutlet->delete($id);

        if ($imageName) {
            $filePath = '../../../images/food-images/' . $imageName;
            if (file_exists($filePath)) {
                unlink($filePath); 
            }
        }

        $msg = "Food item deleted successfully!";
    } else {
        $msg = "Food item not found.";
    }
} else {
    $msg = "No ID provided.";
}

header("Location: ./food_outlets.php?msg=" . urlencode($msg));
exit();
?>
