<?php

$light ="orange";

if($light =="green"){
    echo "you can cross the street.";

}
else if ($light == "orange"){
    echo"you can cross the street, but watch out";
}

else {
    echo"you can not cross the street";
}


$age = "18";
$antibiotics = true;

if($age > 17 and $antibiotics == false){
    echo "you can drink";
}
else {
    echo"you can not drink";}
?>