<?php
#FOr loop
echo "<h1>The Sum of all even Number between 0 and 20</h1><br>";
$x = 0;
for ($i=0; $i <= 20; $i+=2) { 
    # code...
    $x = $x + $i;
   /* if ($i%2==0) {
        # code...
        $x += $i;
    }*/
};
echo "<br> the sum of all even number btween 0 and 20 is $x";

/*$y = 0;
$j = 0;
while($y<=20){
    
    $j += $y;
    $y +=2;
    echo "<br> ".$y;
}

echo $j;*/






#Algebraic equation
echo "<br><h1>Calculating Algebric Equation</h1><br>";
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
function x1($a, $b, $c){
    $z =  div(sum(-$b, expo(dif(expo($b, 2), mul(4, mul($a, $c))), 0.5)), mul(2, $a));
    return $z;
}

#the function for negative part of the equation
function x2($a, $b, $c){
    $z =  div(dif(-$b, expo(dif(expo($b, 2), mul(4, mul($a, $c))), 0.5)), mul(2, $a));
    return $z;
}

echo "the value of x1 is " . x1(1,3,2);
echo "<br>";
echo "the value of x2 is " . x2(1,3,2);
?>
