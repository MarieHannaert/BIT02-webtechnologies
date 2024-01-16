<?php

$number = $argv[1];

while($number > 0){


    if ($number > 9){
        echo "the number is bigger than 9\n";
    }
    else if ($number == 9){
        echo "the number is equal to 9\n";
    }
    else if ($number >3 and $number <9){
        echo "the number is between 3 and 9\n";
    }
    else if ($number == 3){
        echo "the number is equal to 3\n";
    }
    else {
        echo "the number is smaller than 3\n";
    }

    if ($number%9==0 and $number%3==0 ){
        echo "the number is divisible by 9 and 3\n";
    }
    else if($number%9==0 or $number%3==0){
        echo "the number is divisible by 9 or 3\n";
    }
    else {
        echo "the number can not be divided\n";
    }
    $number = $number-1;

}

?>