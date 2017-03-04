<?php
include ('ceo.php');

$exec = new Executive();
$exec->setName("Alexander");
echo $exec->getName();

// CEO class
$ceo = new CEO();
$ceo->setName("Marvin");
$ceo->pillageCompany();
$ceo->getFaceLift();

?>