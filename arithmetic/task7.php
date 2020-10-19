<?php
    function checkNum($num){
        $sameNums = false;

        while ($num != 0){
            $remDiv = $num % 10;

            $check = (int)($num / 10);

            while ($check != 0){
                $rem = $check % 10;

                if ($rem == $remDiv){
                    $sameNums = true;
                    break;
                }

                $check = (int)($check / 10);
            }

            if ($sameNums){
                break;
            }

            $num = (int)($num / 10);
        }

        return $sameNums;
    }

    $num = 1234156;

    if (checkNum($num)){
        echo "В записи числа есть одинаковые цифры";
    }
    else {
        echo "В записи числа нету одинаковых чисел";
    }
?>