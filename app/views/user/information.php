<?php

require ("../../connection.php");

class Information {
    private $id;
    private $name;
    private $shortDescription;
    private $description;
    private $image;

    // Setters
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setShortDescription($shortDescription) {
        $this->shortDescription = $shortDescription;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setImage($image) {
        $this->image = $image;
    }

    // Getters
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getShortDescription() {
        return $this->shortDescription;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getImage() {
        return $this->image;
    }

    // Add information method
    public function add() {
        try {
            $conn = connection::getConnection();
            $query = "INSERT INTO `information`(`name`, `short_description`, `description`, `image`) VALUES (?,?,?,?)";
            $st = $conn->prepare($query);
            $st->bindParam(1, $this->name, PDO::PARAM_STR);
            $st->bindParam(2, $this->shortDescription, PDO::PARAM_STR);
            $st->bindParam(3, $this->description, PDO::PARAM_STR);
            $st->bindParam(4, $this->image, PDO::PARAM_STR);
            if ($st->execute()) {
                return $conn->lastInsertId();
            } else {
                return -1;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Update information method
    public function update() {
        $conn = connection::getConnection();
        $sql = "UPDATE information SET name = :name, short_description = :shortDescription, description = :description";

        // Only add image field to the query if it is set
        if (!empty($this->image)) {
            $sql .= ", image = :image";
        }
        $sql .= " WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':shortDescription', $this->shortDescription);
        $stmt->bindParam(':description', $this->description);

        if (!empty($this->image)) {
            $stmt->bindParam(':image', $this->image);
        }
        $stmt->bindParam(':id', $this->id);

        $stmt->execute();
    }

    // Delete information method
    public function delete() {
        try {
            $conn = connection::getConnection();
            $query = "DELETE FROM `information` WHERE `id`=?";
            $st = $conn->prepare($query);
            $st->bindParam(1, $this->id, PDO::PARAM_INT);
            return $st->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Get all information method
    public function getAll() {
        try {
            $conn = connection::getConnection();
            $query = "SELECT `id`, `name`, `short_description`, `description`, `image` FROM `information`";
            $result = $conn->query($query);
            $informationList = array();
            foreach ($result as $item) {
                $info = new Information();
                $info->setId($item['id']);
                $info->setName($item['name']);
                $info->setShortDescription($item['short_description']);
                $info->setDescription($item['description']);
                $info->setImage($item['image']);
                array_push($informationList, $info);
            }
            return $informationList;
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Get information by ID method
    public function getById($id) {
        $conn = connection::getConnection();
        $stmt = $conn->prepare("SELECT * FROM information WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->shortDescription = $data['short_description'];
            $this->description = $data['description'];
            $this->image = $data['image'];
            return $this;
        } else {
            return null;
        }
    }

    // Update image method
    public function updateImage() {
        $conn = connection::getConnection();
        $sql = "UPDATE information SET image = :image WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }
}
?>
