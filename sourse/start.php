<?php
#create an indexed array

$cars = array('Mercedes', 'Volvo');
$size = count($cars);

for($x = 0; $x < $size; $x++){
    echo $cars[$x] . "\n";
}

//create associative array

$car = array('John' => 'Mercedes', 'Peter'  => 'Volvo');

print_r($car);
foreach($car as $name => $car_name){
    echo $name . "->" . $car_name. "\n";
}
?>