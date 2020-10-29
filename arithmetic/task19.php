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

    $n = 30;
    $m = 16;
    $nok = ($n * $m) / findNOD($n, $m);

    echo $nok;

?>