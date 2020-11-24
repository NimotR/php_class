<?php
$car = array("Volvo", "BMW", "Toyota", "Benz", "Mazda");
sort($car);
foreach ($car as $value){
    echo "$value<br>";
}
echo "<br>";

$age = array("Volvo"=>"35", "BMW"=>"36", "Toyota"=>"37", "Benz"=>"38", "Mazda"=>"39");
echo "<br>". $age["Volvo"];
echo "<br>". $age["Benz"];
echo "<br>";
foreach ($age as $x=>$x_value){
    echo "keys = $x, value = $x_value<br>";
}
?>