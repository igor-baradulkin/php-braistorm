<?php
    function findNOD($firstNum,$secondNum){
        while ($firstNum != 0 && $secondNum != 0){
            if ($firstNum > $secondNum){
                $firstNum = $firstNum % $secondNum;
            }
            else{
                $secondNum = $secondNum % $firstNum;
            }
        }

        return $firstNum + $secondNum;
    }

    $n = 3;
    $m = 5;
    $numsNOD = findNOD($n, $m);

    if ($numsNOD === 1){
        echo "Числа взаимно простые";
    }
    else {
        echo "Числа не являются взаимно простыми";
    }
?>