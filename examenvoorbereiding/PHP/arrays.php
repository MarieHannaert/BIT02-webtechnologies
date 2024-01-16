<?php

    # An array is a special variable that can hold more than one value at a time
    # It can be compared to a closet with multiple drawers
    # Each drawer can hold a different value

    #######################
    ## CREATING AN ARRAY ##
    #######################

    ## Method 1
    ###########
    
    $BITStudents = array(
        "Erik ALGOED",
        "Omar ALSHIKH ALHALLAK",
        "Aline BAEKELANDT",
        "Lise BLEYS",
        "Arne BLOM",
        "Laura BORGHGRAEF",
        "Tim BRUGGEMAN",
        "Laura BURGOS",
        "Lore CHRISTIAENS",
        "Gitte DECAT",
        "Jörgen DESCHACHT",
        "Anke DE WISPELAERE",
        "Bram DEWULF",
        "Jamila EL YAHYAOUI",
        "Rhode GAETHOFS",
        "Marie HANNAERT",
        "Margo HIEL",
        "Benjamin HOERÉE",
        "Hobbes INGELS",
        "Louis MALLENTJER",
        "Sara Wai Chi MAN",
        "Xander MARCLÉ",
        "Fernanda MARTINEZ CUEVAS",
        "Sil MONSIEUR",
        "Marie-Laure NGAMBO",
        "Elias STEYAERT",
        "Jarno VAN DE GEUCHTE",
        "Elise VAN KERCKHOVE",
        "Iris VAN PAEMEL",
        "Mathias VANPOUCKE",
        "Paola VAZQUEZ PAMANES",
        "Laurens VEREECKE",
        "Angelo VERVAET"
    );


    ## Method 2
    ###########
    
    $BITStudents = [
        "Erik ALGOED",
        "Omar ALSHIKH ALHALLAK",
        "Aline BAEKELANDT",
        "Lise BLEYS",
        "Arne BLOM",
        "Laura BORGHGRAEF",
        "Tim BRUGGEMAN",
        "Laura BURGOS",
        "Lore CHRISTIAENS",
        "Gitte DECAT",
        "Jörgen DESCHACHT",
        "Anke DE WISPELAERE",
        "Bram DEWULF",
        "Jamila EL YAHYAOUI",
        "Rhode GAETHOFS",
        "Marie HANNAERT",
        "Margo HIEL",
        "Benjamin HOERÉE",
        "Hobbes INGELS",
        "Louis MALLENTJER",
        "Sara Wai Chi MAN",
        "Xander MARCLÉ",
        "Fernanda MARTINEZ CUEVAS",
        "Sil MONSIEUR",
        "Marie-Laure NGAMBO",
        "Elias STEYAERT",
        "Jarno VAN DE GEUCHTE",
        "Elise VAN KERCKHOVE",
        "Iris VAN PAEMEL",
        "Mathias VANPOUCKE",
        "Paola VAZQUEZ PAMANES",
        "Laurens VEREECKE",
        "Angelo VERVAET"
    ];


    #########################
    ## DISPLAYING AN ARRAY ##
    #########################

    ## Displaying the complete array
    ################################

    # We can display an array with the print_r() function

    print_r($BITStudents);


    ## Displaying a specific value
    ##############################

    # We can display a specific value from an array by using the index of the value we want to display

    echo $BITStudents[0] . "\n"; # This will display the first value of the array
    echo $BITStudents[1] . "\n"; # This will display the second value of the array
    echo $BITStudents[2] . "\n"; # This will display the third value of the array


    ########################
    ## ASSOCIATIVE ARRAYS ##
    ########################

    # An associative array is an array that uses named keys that you assign to them

    $BITStudents = [
        "student1" => "Erik ALGOED",
        "student2" => "Omar ALSHIKH ALHALLAK",
        "student3" => "Aline BAEKELANDT",
        "student4" => "Lise BLEYS",
        "student5" => "Arne BLOM",
        "student6" => "Laura BORGHGRAEF",
    ];


    ## Displaying the associative array
    ###################################

    # We can display the associative array with the print_r() function

    print_r($BITStudents);

    # We can also display a specific value from the associative array by using the key of the value we want to display

    echo $BITStudents["student1"] . "\n"; # This will display the value of the key "student1"
    echo $BITStudents["student2"] . "\n"; # This will display the value of the key "student2"
    echo $BITStudents["student3"] . "\n"; # This will display the value of the key "student3"


    ##################################
    ## SPECIAL FOR LOOP WITH ARRAYS ##
    ##################################

    # We can use a special for loop to loop through an array: the foreach loop
    
    ## Only looping through the values
    ##################################

    foreach($BITStudents as $student){
        echo "$student\n";
    }

 
    ## Looping through the keys and values
    ######################################

    foreach($BITStudents as $key => $value){
        echo "$key: $value\n";
    }

    


?>