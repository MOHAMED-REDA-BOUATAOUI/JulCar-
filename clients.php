<?php

class Client {
    private $permis;
    private $firstname;
    private $lastname;
    private $phone;
    private $username;
    private $password;

    public function __construct($permis, $firstname, $lastname, $phone, $username, $password) {
        $this->permis = $permis;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPermis() {
        return $this->permis;
    }

    public function setPermis($permis) {
        $this->permis = $permis;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}



?>
