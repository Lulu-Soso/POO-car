
<?php

require 'car.php';
require 'Bicycle.php';

$bike = new Bicycle("red");

$bike->setvitesse = 21;
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setvitesse . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setvitesse . ' km/h' . '<br>';
echo $bike->brake();

$br = "</br >";
$car = new Car('black', 4,'plein');
var_dump($car);

echo $car->forward();
echo $br;
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $br;
echo $car->brake();
echo $br;
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $br;
echo $car->brake();
echo $br;
