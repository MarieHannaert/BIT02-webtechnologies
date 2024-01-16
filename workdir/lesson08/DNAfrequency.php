<?php

$DNA = $argv[1];

$DNAarray = str_split($DNA);

print_r($DNAarray);

$frequency = [];

foreach($DNAarray as $nucleotide) {
    if (!isset ($frequency [$nucleotide])){
        $frequency[$nucleotide] = 0;
    }
    $frequency [$nucleotide] ++;

}

echo "STATS\n";
foreach(['A', 'T', 'C', 'G'] as $nucleotide){
    echo $nucleotide .":". $frequency[$nucleotide]."nts";

    $percentage = ($frequency[$nucleotide]/count($DNAarray)*100);

    echo "=>" . $percentage . "\n";
}

echo "GRAPH\n";
foreach(['A', 'T', 'C', 'G'] as $nucleotide){
    echo $nucleotide .":";

    $percentage = ($frequency[$nucleotide]/count($DNAarray)*100);


    for ($counter=1; $counter<=$percentage; $counter ++){
        echo "=";
    }
    echo "\n";
}
?>