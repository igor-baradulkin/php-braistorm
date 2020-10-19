<?php
    function numsAmount($num){
        $amount = 0;

        while ($num != 0){
            $num = (int)($num / 10);
            $amount++;
        }

        return $amount;
    }    

    $num = 4321;
    $reverseNum = 0;

    $amount = numsAmount($num);

    while ($num != 0){
        $numRem = $num % 10;

        $reverseNum += ($numRem * (10 ** ($amount - 1)));
        $amount--;

        $num = (int)($num / 10);
    }

    echo $reverseNum;

?>