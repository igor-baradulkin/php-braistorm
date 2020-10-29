<?php
    function sumNumDividers($num){
        $sum = 0;

        for ($i = 1; $i <= $num; $i++){
            if ($num % $i == 0){
                $sum += $i;
            }
        }

        return $sum;
    }

    $maxSumDividers = 1;
    $maxSumDividersNum = 1;
    $n = 1500;
    $m = 15000;

    for($i = $n; $i <= $m; $i++){
        $dividersSum = sumNumDividers($i);

        if ($dividersSum > $maxSumDividers){
            $maxSumDividers = $dividersSum;
            $maxSumDividersNum = $i;
        }
    }

    echo $maxSumDividersNum . "<br>Сумма делителей числа - " . $maxSumDividers;
?>