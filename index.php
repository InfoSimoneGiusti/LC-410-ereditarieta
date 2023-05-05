<?php

require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/PremiumUser.php';
require_once __DIR__ . '/Models/Membership.php';

$mario = new User("Mario", "Rossi");
//$mario->name = "Mario";
//$mario->lastname = "Rossi";

$mario->setAge(70);
$mario->setDiscount();
//echo $mario->getDiscount();
var_dump($mario);



$membership = new Membership('Prime', 50, '5/5/2023');

$francesca = new PremiumUser("Francesca", "Neri", $membership);
$francesca->setAge(20);
$francesca->setDiscount();
//$francesca->membership = $membership;
var_dump($francesca);