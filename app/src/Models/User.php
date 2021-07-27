<?php
class User {
    
  // Properties
  private $name;
  private $email;
  private $password;
  private $rol;

  public function __construct($name,$email,$password,$rol) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->rol = $rol;
 }

  // Methods
  function setName($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
  function setEmail($email) {
    $this->email = $email;
  }
  function getEmail() {
    return $this->email;
  }
  function setPassword($password) {
    $this->password = $password;
  }
  function getPassword() {
    return $this->password;
  }
  function setRol($rol) {
    $this->rol = $rol;
  }
  function getRol() {
    return $this->rol;
  }
}
?>