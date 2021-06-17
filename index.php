<?php

include './classes/user.php';
include './classes/users/premium.php';

$premium_user = new PremiumUser('premium_Andrew', 'premium_Cismasu', 'andre_cism.@mail.com','2');
var_dump($premium_user);


$user = new User('Andrew', 'Cismasu', 'andre_cism.@mail.com');
var_dump($user);

?>

