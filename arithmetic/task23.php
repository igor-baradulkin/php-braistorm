<?php
    function numCharsAmount($num){
        $amount = 0;

        while($num != 0){
            $num = (int)($num / 10);
            $amount++;
        }

        return $amount;
    }

    function charNumRepeats($num, $charNum){
        $repeats = 0;

        while($num != 0){
            $rem = $num % 10;
            $num = (int)($num / 10);

            if ($rem === $charNum){
                $repeats++;
            }
        }

        return $repeats;
    }

    $n = 257394875803945000;
    $newNum = 0;
    $numCharsAmount = numCharsAmount($n);

    for($i = 9; $i >= 0; $i--){
        $repeats = charNumRepeats($n, $i);
        if (charNumRepeats($n, $i) > 0){
            while($repeats != 0){
                $newNum += ($i * 10 ** ($numCharsAmount - 1));
                $repeats--;
                $numCharsAmount--;
            }
        }
    }

    echo "Old num - " . $n . "<br>";
    echo "New num - " . $newNum;
?>