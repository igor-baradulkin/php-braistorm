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

    $num = 81;
    
    if (prime($num)){
        echo "Число простое";
    }
    else {
        echo "Число составное";
    }
?>