<?php
    function numSum($num){
        $sum = 0;

        while($num != 0){
            $rem = $num % 10;
            $sum += $rem;

            $num = (int)($num / 10);
        }

        return $sum;
    }

    for($i = 1; $i <= 1000; $i++){
        if ($i % numSum($i) == 0){
            echo $i . "<br>";
        }
    }
?>