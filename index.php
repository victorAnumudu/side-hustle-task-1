<?php

    // function to create an array given two parameters
    function returnRange($startNum, $endNum) {
        $range = $endNum - $startNum;
        $firstNum = $startNum;
        $rangeArr =  array();
        for($i = 0; $i < ($range); $i++) {
            array_push($rangeArr, $firstNum);
            $firstNum += 1;
        }
        print_r($rangeArr);
        return $rangeArr;
    }
    returnRange(2, 8);
    

    // function to sum the values in an array
    function sumFunction($arr) {
        $sumNumber = 0;
        for($i = 0; $i < count($arr); $i++) {
            $sumNumber += $arr[$i];
        }
        echo "<br> $sumNumber";
        return $sumNumber;
    }
    sumFunction(array(1,2,3,4));
    
?>
