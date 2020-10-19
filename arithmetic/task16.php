<?php
    function perfectNum($num){
        $perfect = false;

        $sum = 0;
        for ($i = 1; $i < $num; $i++){
            if ($num % $i == 0){
                $sum += $i;
            }
        }

        if ($num == $sum){
            $perfect = true;
            return $perfect;
        }

        return $perfect;
    }

    $n = 1;
    $m= 1000;

    for ($i = $n; $i < $m; $i++){
        if (perfectNum($i)){
            echo $i . "<br>";
        }
    }
?>