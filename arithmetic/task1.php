<?php 
    $num = 12345000;

    $amount = 0;
    while ($num != 0){
        $rem = $num % 10;

        if ($rem < 5){
            $amount++;
        }

        $num = (int)($num / 10);
    }

    echo $amount;
?>