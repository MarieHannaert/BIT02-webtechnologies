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