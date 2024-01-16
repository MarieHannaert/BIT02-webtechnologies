<?php

    $number = $argv[1] ?? die("Usage: php print-row-of-asterisks.php number\n");

    for($count = 1; $count <= $number; $count += 1){
        echo "*";
    }

    echo "\n";
?>