<?php
    function numCharsAmount($num){
        $amount = 0;

        while($num !== 0){
            $num = (int)($num / 10);
            $amount++;
        }

        return $amount;
    }

    function palindromNum($num){
        $numPow = (int)(numCharsAmount($num) / 2);
        $numCharsAmount = numCharsAmount($num);
        $middle = $numPow;
        $palindrom = false;

        if ($numCharsAmount === 1){
            $palindrom = true;
        }
        else{
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
                    if ($numCharsAmount % 2 === 1){
                        $num = (int)($num / 10);
                    }

                    if ($num === $anotherNumHalf){
                    $palindrom = true;
                    }
                }
            }
        }

        return $palindrom;
    }

    $n = 10000;

    for($i = 1; $i <= $n; $i++){
        if (palindromNum($i) && palindromNum($i ** 2)){
            echo $i . "<br>";
        }
    }
?>