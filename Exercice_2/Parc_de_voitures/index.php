<?php
include 'voiture_helper.php';

$car1 = new Voiture('BE1234','2005-01-07',153265,'2004','BMW','gray',2.3);
$car1->office();
echo "<br />";
$car1->useFor();
echo "<br />";
$car1->country();
echo "<br />";
$car1->getMileage();
echo "<br />";
$car1->years();
echo "<br />";
$car1->rouler(50000);
$car1->getMileage();
echo "<br />";