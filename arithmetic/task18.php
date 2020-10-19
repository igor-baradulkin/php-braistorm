<?php
    function divSum($num){
        $sum = 1;

        for ($i = 2; $i < $num; $i++){
            if ($num % $i == 0){
                $sum += $i;
            }
        }

        return $sum;
    }

    function friendPair($num1, $num2){
        return $num1 == divSum($num2) && $num2 == divSum($num1);
    }

    $n = 1;
    $m = 300;

    for($i = $n; $i < $m; $i++){
        for ($j = $i + 1; $j < $m; $j++){
            if (friendPair($i, $j)){
                echo $i . " " . $j;
            }
        }
    }
?>