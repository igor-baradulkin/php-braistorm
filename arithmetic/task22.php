<?php
    $n = 1404;
    $multipliers = [];

    $multiplier = 2;
    while($n != 1){
        if ($n % $multiplier == 0){
            $n /= $multiplier; 
            $multipliers[] = $multiplier;
        }
        else{
            $multiplier++;
        }
    }

    echo "Множители числа: ";
    for($i = 0; $i < count($multipliers); $i++){
        echo $multipliers[$i]. " ";
    }
?>