<?php
function setHeight($minHeight=40){
    # code...
    return "the height is : $minHeight <br>";
}


echo setHeight(350);
print setHeight();
setHeight(135);
setHeight(80);


#unbounded loop
#For loop
echo "<h1>The Sum of all even Number between 0 and 20</h1><br>";

function odd($a, $b){
    $x =0;
    for ($i=$a; $i <= $b; $i++) { 
        # code...
        if ($i % 2 == 1) {
            $x += $i;
            #echo "<br>" . $i;
        }
        
    };
    #$x -= $a;
    return "<br>" . $x;
}

echo odd(1, 10);

/*function aP($a, $b)
{
    # code...
    $x = 0;
    for ($i=$a; $i <= $b; $i+=2) { 
        # code...
        $x = $x + $i;
    };
    echo "<br> the sum of all even number btween $a and $b is $x";
}

echo ap(9, 20);*/
?>