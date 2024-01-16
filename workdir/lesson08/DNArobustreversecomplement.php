<?php

$orig = $argv[1];
$char = str_split($orig);

echo "orig:$orig.\n";

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