<?php


require('./vehicle.php');

class Car extends Vehicle{


}

$v1 = new Car('Fiat', 'Toro', '2020');

echo $v1-> getDetails();