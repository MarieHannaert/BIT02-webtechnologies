<?php
$countdirection = $argv[1];
$startnumber = $argv[2];
$endnumber = $argv[3];

if($countdirection != 'up' and $countdirection != 'down'){
    exit("Error!");
}

if ($argv[1] == "up"){
while ($startnumber <= $endnumber){
    echo "$startnumber\n";
    $startnumber = $startnumber + 1;

}
}
else if ($argv[1]=="down"){
    while ($startnumber >= $endnumber){
        echo "$startnumber\n";
        $startnumber = $startnumber - 1;
    }
}

else {
    exit("geen correcte invoer!");
}
?>