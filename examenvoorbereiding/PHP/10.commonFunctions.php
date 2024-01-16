<?php
    ## Checking the existence of a variable
    #######################################

    // We will check if the not yet defined variable $name exists

    echo var_dump(isset($name));

    if(isset($name)) {
        echo "The variable exists\n";
    } else {
        echo "The variable does not exist\n";
    }

    // Now we will define the variable $name

    $name = "Mathias Verbeke";

    echo var_dump(isset($name));

    if(isset($name)) {
        echo "The variable exists\n";
    } else {
        echo "The variable does not exist\n";
    }


    ## Checking if something is empty ("", null, 0...)
    ##################################################

    $name = "";

    echo var_dump(empty($name));


    ## Counting the length of a string
    ##################################

    $name = "Mathias Verbeke";

    echo strlen($name) . "\n";


    ## Replacing a part of a string
    ###############################

    $name = "Mathias Verbeke";

    echo str_replace("Verbeke", "Vanpoucke", $name) . "\n";


    ## Converting a string to uppercase
    ###################################

    $name = "Mathias Verbeke";

    echo strtoupper($name) . "\n";


    ## Converting a string to lowercase
    ###################################

    $name = "Mathias Verbeke";

    echo strtolower($name) . "\n";


    ## Converting a string to an array
    ##################################

    // Method 1

    $name = "Mathias Verbeke";

    $nameArray = explode(" ", $name); # The first argument is the delimiter, the second argument is the string we want to convert to an array

    print_r($nameArray);

    // Method 2

    $name = "Mathias Verbeke";

    $nameArray = str_split($name);

    print_r($nameArray);


    ## Converting an array to a string
    ##################################

    $nameArray = [
        "Mathias",
        "Verbeke"
    ];

    $name = implode(" ", $nameArray);


    ## Counting items in an array
    #############################

    $nameArray = [
        "Mathias",
        "Verbeke"
    ];

    echo count($nameArray) . "\n";

?>