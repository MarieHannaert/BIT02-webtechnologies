<?php

$numbers = $argv;
array_shift($numbers);

echo "The numbers received:\n";
foreach($argv as $index => $number){

    if($index ==0){
        echo"";
    }
    else{

    echo "number $index : $number\n";}
}

echo "the smallest number is:";
print_r(min($argv));
"\n";

$sum =0;
$total = count($numbers);
foreach($numbers as $number ){
    $sum += $number;
}

$avg = $sum/$total;
echo "the avg: $avg\n";

echo "the total number is $total \n";

$freq = [];
print_r($freq);
foreach($numbers as $number){
    if (!isset($freq[$number])){
        $freq[$number]=0;
    }
    $freq[$number] += 1;

}
print_r($freq);

foreach ($freq as $number => $occurence){
    echo "$number -> $occurence\n";
}

print_r($numbers);

for($index = count($numbers)-1; $index >=0; $index--){
    echo "number $index: $numbers[$index]\n";
}


sort($numbers);

foreach($numbers as $number){
    echo "$number\n";
}

?>