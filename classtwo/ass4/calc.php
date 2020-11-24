<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $x = $_REQUEST["x_value"];
    $x = test_input($x);
    $y = $_REQUEST["y_value"];
    $y = test_input($y);

    if(empty($x)||empty($y)){
        echo "the input are empty";
    }else {
        echo "The total sum of $x and $y is " . sumEven($x, $y);
    }
}


#Function for the sum of even numbers
function sumEven($a, $b){
    $x = $a;
for ($i=0; $i <= $b; $i++) { 
    # code...
    
    #$x = $x + $i;
    if ($i%2==0) {
        # code...
        $x += $i;
    }
};
return $x-$a;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


#Algebraic equation
#addition
function sum($x, $y){
    $add = $x + $y;
    return $add;
}
#subtraction
function dif($x, $y){
    $z = $x - $y;
    return $z;
}
#division
function div($x, $y){
    $z = $x / $y;
    return $z;
}
#exponential
function expo($x, $y){
    $z = $x ** $y;
    return $z;
}
#multiplication
function mul($x, $y){
    $z = $x * $y;
    return  $z ;
}
#the function for positive part of the equation
/*function x1($a, $b, $c){
    $z =  div(sum(-$b, expo(dif(expo($b, 2), mul(4, mul($a, $c))), 0.5)), mul(2, $a));
    return $z;
}

#the function for negative part of the equation
function x2($a, $b, $c){
    $z =  div(dif(-$b, expo(dif(expo($b, 2), mul(4, mul($a, $c))), 0.5)), mul(2, $a));
    return $z;
}*/


?>
