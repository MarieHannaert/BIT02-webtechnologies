<?php
$countdirection = $argv[1];
$startnumber = $argv[2];
$endnumber = $argv[3];
$countsteps = $argv[4];

if($countdirection != 'up' and $countdirection != 'down'){
    exit("Error!");
}

if ($argv[1] == "up"){
while ($startnumber <= $endnumber){
    echo "$startnumber\n";
    $startnumber = $startnumber + $countsteps;

}
}
else if ($argv[1]=="down"){
    while ($startnumber >= $endnumber){
        echo "$startnumber\n";
        $startnumber = $startnumber - $countsteps;
    }
}

else {
    exit("geen correcte invoer!");
}
?>
<?php

$direction = $argv[1];
$from = $argv[2];
$to = $argv[3];
$steps = $argv[4];

if($direction == 'up'){
    for($start = 0; $start <= $to; $start+=$steps){
        echo "$start\n";
    }
}

if($direction == 'down'){
    for($X = $from; $X >= 0; $X-=$steps){
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
 
    $counter++;
}

for($counter = 0; $counter <5; $counter++)
?>
<?php

#$parameters = count($argv)-1;
#print_r($argv);
#echo "you have $parameters variables";

print_r($argv);

$amount = count($argv)-1;

echo "$amount parameters provided";

foreach($argv as $index => $value){

    if($index ==0){
        echo"";
    }
    else{

    echo "Position $index : $value\n";}
}

?>