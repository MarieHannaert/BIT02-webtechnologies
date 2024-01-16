<?php

$orig = $argv[1];
$char = str_split($orig);

echo "orig:$orig\n";

$bonds = strlen($orig);
echo "     ";
for($bond=1; $bond<=$bonds; $bond++){
    echo "|";
}
echo "\n";
echo "comp:";

foreach($char as $nucl){
    if ($nucl == "A"){
        echo "T";

    }
    elseif ($nucl =="T"){
        echo "A";

    }
    elseif ($nucl =="C"){
        echo "G";
    }
    elseif ($nucl =="G"){
        echo "C";
    }
    else {
        die ;
    }
}

?>
<?php

$orig = $argv[1];
$char = str_split($orig);

echo "orig:$orig\n";

$bonds = strlen($orig);
echo "     ";
for($bond=1; $bond<=$bonds; $bond++){
    echo "|";
}
echo "\n";
echo "comp:";

foreach($char as $nucl){
    if ($nucl == "A"){
        echo "T";

    }
    elseif ($nucl =="T"){
        echo "A";

    }
    elseif ($nucl =="C"){
        echo "G";
    }
    elseif ($nucl =="G"){
        echo "C";
    }
    else {
        if( !array_key_exists( $nucl, $invalid ) ) {

            $invalid[$nucl] = 0;
         }
   
         $invalid[$nucl]++;
      }
   }
   
   echo "\n\n";
   echo "Invalid NT characters:\n";
   
   foreach( $invalid as $char => $nr ) {
   
      echo "$char: $nr occurrences\n";
   
    }


?>
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