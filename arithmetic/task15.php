<?php
    $num = 7;

    $dividersAmount = 0;

    for($i = 1; $i <= $num; $i++){
        if ($num % $i == 0){
            $dividersAmount++;
        }
    }

    echo $dividersAmount;
?>