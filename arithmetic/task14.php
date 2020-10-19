<?php
    function prime($num){
        $prime = true;

        for ($i = 2; $i <= $num ** 0.5; $i++){
            if ($num % $i == 0){
                $prime = false;

                return $prime;
            }
        }

        return $prime;
    }

    $pairs = 0;

    $num = 2;
    while ($pairs != 10){
        if (prime($num) && prime($num + 2)){
            $pair = $num + 2;
            $pairs++;
            echo "$num $pair" . "<br>";
        }

        $num++;
    }
?>