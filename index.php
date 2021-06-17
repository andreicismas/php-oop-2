<?php

include './classes/user.php';
include './classes/premium.php';
include './classes/creditCard.php';
include ("./classes/products/phone.php");


$premium_user = new PremiumUser('premium_Andrew', 'premium_Cismasu', 'andre_cism.@mail.com','2');
var_dump($premium_user);


$user = new User('Andrew', 'Cismasu', 'andre_cism.@mail.com');
var_dump($user);

$creditCars = new CreditCard($premium_user,  "01/2032");
var_dump($creditCars);

$smartphone = new Smartphone("samsung",60, 1200, "S 20");
var_dump($smartphone);

?>

