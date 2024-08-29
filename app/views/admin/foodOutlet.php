<?php
require("../../connection.php");

class FoodOutlet {
    private $id;
    private $name;
    private $price;
    private $image;

    // Constructor
    public function __construct($id = null, $name = null, $price = null, $image = null) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    // Get all food items
    public function get() {
        $conn = connection::getConnection();
        $stmt = $conn->prepare("SELECT * FROM food_outlet");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get a specific food item by ID
    public function getById($id) {
        $conn = connection::getConnection();
        $stmt = $conn->prepare("SELECT * FROM food_outlet WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Delete a food item by ID
    public function delete($id) {
        $conn = connection::getConnection();
        $stmt = $conn->prepare("DELETE FROM food_outlet WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Update a food item
    public function update() {
        $conn = connection::getConnection();
        $stmt = $conn->prepare("UPDATE food_outlet SET name = :name, price = :price, image = :image WHERE id = :id");
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $this->price, PDO::PARAM_STR);
        $stmt->bindParam(':image', $this->image, PDO::PARAM_STR);
        return $stmt->execute();
    }

    // Add a new food item
    public function add() {
        $conn = connection::getConnection();
        $stmt = $conn->prepare("INSERT INTO food_outlet (name, price, image) VALUES (:name, :price, :image)");
        $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $this->price, PDO::PARAM_STR);
        $stmt->bindParam(':image', $this->image, PDO::PARAM_STR);
        return $stmt->execute() ? $conn->lastInsertId() : false;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getPrice() { return $this->price; }
    public function getImage() { return $this->image; }

    // Setters
    public function setName($name) { $this->name = $name; }
    public function setPrice($price) { $this->price = $price; }
    public function setImage($image) { $this->image = $image; }
    public function setId($id) { $this->id = $id; }
}
?>
