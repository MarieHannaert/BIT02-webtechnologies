<?php
    # Check if a command line argument was provided
    if(!isset($argv[1])){
        die("Error: No command line arguments provided.\n");
    }

    # Split the provided sequence in separate characters
    $string = $argv[1];
    $stringArray = str_split($string);

    # Initialize an empty frequencies array and a total variable (to count the total amount of characters)
    $frequencies = [];
    $total = 0;

    # Loop over all of the separate characters
    foreach($stringArray as $char){

        # Check if there is already an item in the frequencies variable with a key equal to the current character
        if(!isset($frequencies[$char])){
            
            # If it does not exist yet, create it and give it a value of zero
            $frequencies[$char] = 0; 
        }

        # Increment the value by 1 for the item in the frequencies array with the current character as key
        $frequencies[$char] += 1;
        
        # Also increment the total variable by 1
        $total += 1;
    }

    echo "STATS:\n";

    # Loop over the keys and corresponding values within the frequencies array
    foreach($frequencies as $char => $charFrequency){
        
        # Calculate the percentage
        $percentage = ($charFrequency / $total) * 100;
        
        # Print the results in the terminal
        echo "$char: $charFrequency occurences -> $percentage %\n";
    }

    # Sort the frequencies array by their values
    asort($frequencies);

    echo "\n\nOrder by frequency\n";
    
    # Loop over the keys and corresponding values within the frequencies array
    foreach($frequencies as $char => $charFrequency){
            
        # Calculate the percentage
        $percentage = ($charFrequency / $total) * 100;
        
        # Print the results in the terminal
        echo "$char: $charFrequency occurences -> $percentage %\n";
    }

?>