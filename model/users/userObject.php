<?php

class UserObject {
    private $id;
    private $name;
    private $email;
    private $password;
    private $admin;

    public function __construct($row) {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->email = $row['email'];
        $this->password = $row['pass'];
        $this->admin = $row['admin'];
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function isAdmin() {
        return $this->admin;
    }
    public function setAdmin($admin) {
        $this->admin = $admin;
    }


}