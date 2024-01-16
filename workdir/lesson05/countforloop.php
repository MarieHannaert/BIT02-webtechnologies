<?php

$direction = $argv[1];
$from = $argv[2];
$to = $argv[3];

if($direction == 'up'){
    for($start = 0; $start <= $to; $start++){
        echo "$start\n";
    }
}

if($direction == 'down'){
    for($X = $from; $X >= 0; $X--){
        echo "$X\n";
    }
}

if($direction == "up"){
    for($start = $from; $start <= $to; $start++){
        echo "$start\n"; 
    }
}

$counter = 0;

while($counter < 5){
    code;
    $counter++;
}

for($counter = 0; $counter <5; $counter++)
?>