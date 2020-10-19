<?php
    $num = 12345;

    $lastNum = 10;

    while ($num != 0){
        $remDiv = $num % 10;

        if ($remDiv < $lastNum){
            $lastNum = $remDiv;
            $num = (int)($num / 10);

            if ($num == 0){
                echo "Числа образуют последовательность";
            }
        } 
        else {
            echo "Числа не образуют последовательность";
            break;
        }
    }
?>