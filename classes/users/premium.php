<?php

require_once (  './classes/user.php');

class PremiumUser extends User {
  
    public $premiumLevels;


    function __construct($name, $lastname, $email, $premiumLevels) {
        parent::__construct($name, $lastname, $email);
        $this->setLevel($premiumLevels);
        $this->setDiscount($premiumLevels);
    }
    public function setLevel($value) {
        $this->premiumLevels = $value;
    }

  
  public function setDiscount($value) {
      $this->discount = $value * 20;
    }
    
    public function getLevel() {
      return $this->premiumLevels;
    }

    public function getDiscount() {
        return $this->discount;
    }
}

?>