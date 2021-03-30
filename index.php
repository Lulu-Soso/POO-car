
<?php

require 'car.php';

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
