<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $x = $_REQUEST['x_value'];
    $y = $_REQUEST['y_value'];
    $z = $_REQUEST['z_value'];

    #Using function
    if (empty($x) && empty($y)) {
        echo "X and Y is empty";
    } else {
        if($z=="Addition"){
            echo sum($x, $y);
        }elseif ($z=="subtraction") {
            # code...
            echo dif($x, $y);
        }elseif ($z=="Division") {
            # code...
            echo div($x, $y);
        }elseif ($z=="Multiplication") {
            # code...
            echo mul($x, $y);
        }elseif ($z=="Modulo") {
            # code...
            echo mod($x, $y);
        }elseif ($z=="Exponential") {
            # code...
            echo expo($x, $y);
        }else {
            echo "math error or some values are not entered";
        }
    }
}


#Functions

function sum($x, $y){
    $add = $x + $y;
    return $add;
}

function dif($x, $y){
    $z = $x - $y;
    return $z;
}

function div($x, $y){
    $z = $x / $y;
    return $z;
}

function expo($x, $y){
    $z = $x ** $y;
    return $z;
}

function mul($x, $y){
    $z = $x * $y;
    return  $z ;
}

function mod($x, $y){
    $c = $x% $y;
    return $c;
}


?>