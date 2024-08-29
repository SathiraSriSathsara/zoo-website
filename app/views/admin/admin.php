<?php

require("../../connection.php");

class Admin {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $role;
    private $image;
    private $password;

    // Setters
    public function setId($id) {
        $this->id = $id;
    }
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setRole($role) {
        $this->role = $role;
    }
    public function setImage($image) {
        $this->image = $image;
    }
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_BCRYPT); // Encrypt password
    }

    // Getters
    public function getId() {
        return $this->id;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    public function getLastName() {
        return $this->lastName;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getRole() {
        return $this->role;
    }
    public function getImage() {
        return $this->image;
    }
    public function getPassword() {
        return $this->password;
    }

    // Get all admins
    public function get() {
        try {
            $conn = connection::getConnection();
            $query = "SELECT * FROM `user` WHERE `role` = 'admin'";
            $result = $conn->query($query);
            $admins = array();
            foreach ($result as $item) {
                $admin = new Admin();
                $admin->setId($item['id']);
                $admin->setFirstName($item['first_name']);
                $admin->setLastName($item['last_name']);
                $admin->setEmail($item['email']);
                $admin->setRole($item['role']);
                $admin->setImage($item['image']);
                array_push($admins, $admin);
            }
            return $admins;
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Get a single admin by ID
    public function getById($id) {
        try {
            $conn = connection::getConnection();
            $stmt = $conn->prepare("SELECT * FROM `user` WHERE `id` = :id AND `role` = 'admin'");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data) {
                $this->id = $data['id'];
                $this->firstName = $data['first_name'];
                $this->lastName = $data['last_name'];
                $this->email = $data['email'];
                $this->role = $data['role'];
                $this->image = $data['image'];
                $this->password = $data['password'];
                return $this;
            } else {
                return null;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Add a new admin
    public function add() {
        try {
            $conn = connection::getConnection();
            $sql = "INSERT INTO `user` (`first_name`, `last_name`, `email`, `role`, `image`, `password`) VALUES (:firstName, :lastName, :email, :role, :image, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':firstName', $this->firstName);
            $stmt->bindParam(':lastName', $this->lastName);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':role', $this->role);
            $stmt->bindParam(':image', $this->image);
            $stmt->bindParam(':password', $this->password);
            return $stmt->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Update admin details
    public function update() {
        try {
            $conn = connection::getConnection();
            $sql = "UPDATE `user` SET `first_name` = :firstName, `last_name` = :lastName, `email` = :email";

            if (!empty($this->image)) {
                $sql .= ", `image` = :image";
            }

            if (!empty($this->password)) {
                $sql .= ", `password` = :password";
            }
            
            $sql .= " WHERE `id` = :id AND `role` = 'admin'";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':firstName', $this->firstName);
            $stmt->bindParam(':lastName', $this->lastName);
            $stmt->bindParam(':email', $this->email);
            if (!empty($this->image)) {
                $stmt->bindParam(':image', $this->image);
            }
            if (!empty($this->password)) {
                $stmt->bindParam(':password', $this->password);
            }
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Delete admin by ID
    public function delete() {
        try {
            $conn = connection::getConnection();
            $query = "DELETE FROM `user` WHERE `id` = ? AND `role` = 'admin'";
            $st = $conn->prepare($query);
            $st->bindParam(1, $this->id, PDO::PARAM_INT);
            return $st->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
?>
