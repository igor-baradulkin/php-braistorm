<?php
    function checkIncreasingSequence($num){
        $lastNum = 10;

        $increasingSequence = true;

        while ($num != 0){
            $remDiv = $num % 10;
    
            if ($remDiv < $lastNum){
                $lastNum = $remDiv;
                $num = (int)($num / 10);
            } 
            else {
                $increasingSequence = false;
                break;
            }
        }

        return $increasingSequence;
    }

    function checkDescendingSequence($num){
        $lastNum = -1;

        $descendingSequence = true;

        while ($num != 0){
            $remDiv = $num % 10;
    
            if ($remDiv > $lastNum){
                $lastNum = $remDiv;
                $num = (int)($num / 10);
            } 
            else {
                $descendingSequence = false;
                break;
            }
        }

        return $descendingSequence;
    }


    for ($i = 1000; $i <= 9999; $i += 2){
        if (checkDescendingSequence($i) || checkIncreasingSequence($i)){
            echo $i . "<br>";
        }
    }
?>