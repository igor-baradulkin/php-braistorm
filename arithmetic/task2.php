<?php
    function sumOfNums($num){
        $sum = 0;

        while ($num != 0){
            $divRem = $num % 10;

            $sum += $divRem;

            $num = (int)($num / 10);
        }

        return $sum;
    }

    $n = 10;

    for ($i = 1000; $i <= 9999; $i++){
        if (sumOfNums($i) === $n){
            echo $i . "<br>";
        }
    }
?>