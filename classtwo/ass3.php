<?php


function primeNum($a, $b){
    if ($a<=1 || $b<=1){
        echo "1 or 0 is not a prime number start your counting from 2 upwards";
    }else {
        $number = $a ;  #initialization of number
        while ($number < $b){
            $div_count=0;
            for ( $i=1;$i<=$number;$i++){
                if (($number%$i)==0){
                    $div_count++;
                }
            }
            if ($div_count<3){
                echo $number." , ";
            }
            $number=$number+1;
        }
    }
}

primeNum(11, 40)
?>