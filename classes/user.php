<?php

class User {

  public $name;
  public $lastname;
  public $email;
  public $id_user;
  public $discount = 0;
  

  function __construct($name, $lastname, $email) {
    $this->setName($name);
    $this->setLastName($lastname);
    $this->setEmail($email);
    $this->id_user = rand(0, 9999999);
  }
  
  public function setName($value) {
    $this->name = $value;
  }
  
  public function setLastName($value) {
    $this->lastname = $value;
}

  public function setEmail($value) {
      $this->email = $value;
    }

    public function getName() {
      return $this->name;
    }
    
    public function getLastName() {
      return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

}

?>