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

    $n = 60;
    $m = 16;

    echo "NOD: " . findNOD($n, $m);
?>