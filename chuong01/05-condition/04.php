<?php
    $number = -10;
    $n = $number % 2;
/* if ($n >= 0 && $n == 0) {
        $result = "Nguyễn dương chẵn";
    } else if($n >= 0 && $n == 1 ){
        $result = "Nguyễn dương lẻ";
    } else if($n < 0 && $n == 0 ){
        $result = "Nguyễn âm chẵn";
    } else{
        $result = "Nguyễn âm lẻ";
    }
 */
    $resultFierst   = ($number >= 0) ? "Nguyên dương" : "Nguyên âm";   
    $resultLast     = ($n == 0) ? " chẵn " : " lẻ ";
    $result = $resultFierst . $resultLast;
    echo $result;
