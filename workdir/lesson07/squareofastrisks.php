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

?>