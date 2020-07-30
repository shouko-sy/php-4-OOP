<?php
require 'animal.php';
require 'Ape.php';
require 'Frog.php';
$sheep = new Animal("shaun");

echo $sheep->get_name(); // "shaun"
echo $sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false


$sungokong = new Ape("kera sakti");
// echo $sungokong->get_name();
// echo $sungokong->get_legs();
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
// echo $kodok->get_name();
// echo $kodok->get_legs();
$kodok->jump() ; // "hop hop"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>