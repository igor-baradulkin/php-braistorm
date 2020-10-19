<?php
    function charAmount($num){
        $amount = 0;

        while ($num != 0){
            $num = (int)($num / 10);

            $amount++;
        }

        return $amount;
    }

    $num = 25;
    $numSq = $num ** 2;

    if ($numSq % (10 ** charAmount($num)) == $num){
        echo "Это число автоморфное";
    }
    else{
        echo "Это не автоморфное число";
    }

?>