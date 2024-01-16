<?php

    $number = $argv[1] ?? die("Usage: php print-row-of-asterisks.php number\n");

    for($count = 1; $count <= $number; $count += 1){
        echo "*";
    }

    echo "\n";
    echo "\n";
?>
<?php 

# Option 1 of defining width and height
/*
if(!isset($argv[1])){
    exit("Error: No command line argument(s) specified!");
} elseif(!isset($argv[2])){
    $width = $argv[1];
    $height = $argv[1];
} else{
    $width = $argv[1];
    $height = $argv[2];
}
*/

# Option 2 of defining width and height
$width = $argv[1] ?? die("Usage: php print-square-of-asterisks.php width [height]\n");
$height = $argv[2] ?? $width;

for($row = 1; $row <= $height; $row += 1){
    for($ast = 1; $ast <= $width; $ast += 1){
        echo "*";
    }
    
    echo "\n";
    
}
echo "\n";

?>
<?php
    $base = $argv[1];

    for($row = 1; $row <= $base; $row += 1){
        for($ast = 0; $ast < $row; $ast += 1){
            echo "*";
        }
        
        echo "\n";
        
    }
    echo "\n";
?>
<?php

$base = $argv[1] ?? 10;
for($row=1;$row <= $base;$row++){
    for($space=1;$space <= $base - $row;$space++){
        echo " ";
    }
    for($ast=1; $ast<=$row;$ast++){
        echo "*";
    }
    echo "\n";
    
}
echo "\n";
?>
<?php

$base = $argv[1] ?? 10;

$maxRows = $base / 2;
for($row=1;$row <= $maxRows;$row++){
    for($space=1;$space <= $maxRows- $row;$space++){
        echo " ";
    }
    for($ast=1; $ast<=$row*2;$ast++){
        echo "*";
    }
    echo "\n";
    
}
echo "\n";
?>
<?php



$base = $argv[1] ?? 10;


for($row = $base; $row >= 1; $row --){
    for($ast = 0; $ast < $row; $ast += 1){
        echo "*";
    }
    
    echo "\n";
}
echo "\n";

for($row=$base;$row >= 1;$row--){
    for($space=1;$space <= $base - $row;$space++){
        echo " ";
    }
    for($ast=1; $ast<=$row;$ast++){
        echo "*";
    }
    echo "\n";
}
echo "\n";
$maxRows = $base / 2;
for($row=$maxRows;$row >=1;$row--){
    for($space=1;$space <= $maxRows- $row;$space++){
        echo " ";
    }
    for($ast=1; $ast<=$row*2;$ast++){
        echo "*";
    }
    echo "\n";
}
echo "\n";
?>