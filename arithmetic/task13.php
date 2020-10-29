<?php
    function numCharsAmount($num){
        $amount = 0;

        while($num !== 0){
            $num = (int)($num / 10);
            $amount++;
        }

        return $amount;
    }

    function symmetricNum($num){
        $numPow = (int)(numCharsAmount($num) / 2);
        $middle = $numPow;
        $symmetric = false;

        $i = 0;
        $anotherNumHalf = 0;
        while($i !== $middle){
            $rem = $num % 10;
            $num = (int)($num / 10);

            if ($i === 0 && $rem === 0){
                break;
            }
            else{
                $anotherNumHalf += ($rem * 10 ** ($numPow - 1));
            }

            $i++;
            $numPow--;

            if ($i === $middle){
                if ($num === $anotherNumHalf){
                    $symmetric = true;
                }
            }
        }
        

        return $symmetric;
    }

    $num = 8999999998;

    if (numCharsAmount($num) % 2 == 0 && symmetricNum($num)){
        echo "Число симметричное";
    }
    else {
        echo "Число не симметричное";
    }


?>