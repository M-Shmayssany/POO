<?php
include 'voiture_helper.php';

$car1 = new Voiture('BE12345','2013-01-07',153265,'A3','Audi','Red',1.335);
$car1->img = "./assets/img/audi-a3_101_1.jpg";
$car2 = new Voiture('BE34563','2018-05-17',87563,'X2','BMW','Gold',2.735);
$car2->img = "./assets/img/bmw-x2_4156_1.jpg";
$car3 = new Voiture('FR04523','2015-02-14',256745,'Jumper combi','citroen','Red',3.335);
$car3->img = "./assets/img/citroen-jumper-combi_3295_1.jpg";
$car4 = new Voiture('DE45237','2009-12-14',256845,'370zi','nissan','Gray',1.204);
$car4->img = "./assets/img/nissan-370z_1698_1.jpg";
$car5 = new Voiture('FR43437','2016-12-22',356845,'e-Evalia','nissan','Blue',3.504);
$car5->img = "./assets/img/nissan-e-evalia_3474_1.jpg";
$car6 = new Voiture('BE4237','2011-11-23',256845,'Alto','suzuki','Blue',1.204);
$car6->img = "./assets/img/suzuki-alto_2507_1.jpg";
$car7 = new Voiture('BE45237','2016-12-14',256845,'Baleno','suzuki','Gray',1.204);
$car7->img = "./assets/img/suzuki-baleno_4042_1.jpg";
$car8 = new Voiture('FR45237','2009-12-14',256845,'s60','volvo','Gray',1.204);
$car8->img = "./assets/img/volvo-s60_3247_1.jpg";
$car9 = new Voiture('DE45237','2017-12-14',256845,'i10','Hyundai','Red',1.204);
$car9->img = "./assets/img/hyundai-i10_3833_1.jpg";
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parc de voitures</title>
</head>
<body>
    <table>
    <tr>
    <th>Numéro d'immatriculation</th>
    <th>Mise en circulation</th>
    <th>Kilométrage</th>
    <th>Modèle</th>
    <th>Marque</th>
    <th>Couleur</th>
    <th>Poids</th>
    <th>Image</th>
    </tr>
    <tr>
<?php $car1->display(); ?>    
    </tr>
    <tr>
<?php $car2->display(); ?>    
    </tr>
    <tr>
<?php $car3->display(); ?>    
    </tr>
    <tr>
<?php $car4->display(); ?>    
    </tr>
    <tr>
<?php $car5->display(); ?>    
    </tr>
    <tr>
<?php $car6->display(); ?>    
    </tr>
    <tr>
<?php $car7->display(); ?>    
    </tr>
    <tr>
<?php $car8->display(); ?>    
    </tr>
    <tr>
<?php $car9->display(); ?>    
    </tr>

    </table>
</body>
</html>