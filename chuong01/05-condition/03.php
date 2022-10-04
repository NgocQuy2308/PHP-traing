<?php
    $number = -13;
    if ($number >= 0 && $number % 2 == 0) {
        $result = "Nguyễn dương chẵn";
    } else if($number >= 0 && $number % 2 == 1 ){
        $result = "Nguyễn dương lẻ";
    } else if($number < 0 && $number % 2 == 0 ){
        $result = "Nguyễn âm chẵn";
    } else{
        $result = "Nguyễn âm lẻ";
    }

    echo $result;
