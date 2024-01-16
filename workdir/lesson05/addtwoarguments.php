<?php
if(isset($argv[1])){
    echo
    $argv[1]+$argv[2];
}
else {
    echo"there is nothing in the commanline\n";


print_r($argv);

$result = $argv[1] + $argv[2];

echo $result;
}

?>