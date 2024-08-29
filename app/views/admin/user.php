<?php

require("../../connection.php");

class User {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $role;
    private $image;

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

    // Get all users with role 'user'
    public function get() {
        try {
            $conn = connection::getConnection();
            $query = "SELECT * FROM `user` WHERE `role` = 'user'";
            $result = $conn->query($query);
            $users = array();
            foreach ($result as $item) {
                $user = new User();
                $user->setId($item['id']);
                $user->setFirstName($item['first_name']);
                $user->setLastName($item['last_name']);
                $user->setEmail($item['email']);
                $user->setRole($item['role']);
                $user->setImage($item['image']);
                array_push($users, $user);
            }
            return $users;
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Get a single user by ID
    public function getById($id) {
        try {
            $conn = connection::getConnection();
            $stmt = $conn->prepare("SELECT * FROM `user` WHERE `id` = :id AND `role` = 'user'");
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
                return $this;
            } else {
                return null;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Update user details
    public function update() {
        try {
            $conn = connection::getConnection();
            $sql = "UPDATE `user` SET `first_name` = :firstName, `last_name` = :lastName, `email` = :email";

            if (!empty($this->image)) {
                $sql .= ", `image` = :image";
            }
            $sql .= " WHERE `id` = :id AND `role` = 'user'";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':firstName', $this->firstName);
            $stmt->bindParam(':lastName', $this->lastName);
            $stmt->bindParam(':email', $this->email);
            if (!empty($this->image)) {
                $stmt->bindParam(':image', $this->image);
            }
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    // Delete user by ID
    public function delete() {
        try {
            $conn = connection::getConnection();
            $query = "DELETE FROM `user` WHERE `id` = ? AND `role` = 'user'";
            $st = $conn->prepare($query);
            $st->bindParam(1, $this->id, PDO::PARAM_INT);
            return $st->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
?>
