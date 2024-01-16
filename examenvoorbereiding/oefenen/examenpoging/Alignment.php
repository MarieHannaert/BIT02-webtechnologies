<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROCESS/VISUALISE ALIGNMENT DATA</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<?php
        require('navigationbar.html');
?>
<?php
        // Check if form is submitted
        if(!isset($_POST['submit'])){
            // Display a link to submit a new visualisation request if the form is not submitted
            die("<a class='requestbutton' href='submit.php'>Submit new visualisation request</a>");
        } else if(empty($_FILES['upload_file']['name'])){
            // Handle case where no alignment data is submitted
            die("<a class='requestbutton' href='submit.php'>No alignment data was submitted</a>");
        } else {
            // Extract the file contents
            $contents = file_get_contents($_FILES['upload_file']['tmp_name']);
            
            // Extract sequences and headers from the file content
            $lines = explode("\n", $contents);              // Extract all lines from the content
            $sequences =  [];  
            
            foreach($lines as $line){                       // Loop over all lines
                $line = trim($line);                        // Trim the line to remove any unwanted residual whitespace
                if(preg_match("/^>/", $line)){              // Check if the current line is a header
                    $currentHeader = $line;
                } else if(!empty($line)){                   // Check if the current line is not empty
                    $sequences[$currentHeader][] = $line;   // Save the chunked sequence along with its corresponding header in a subarray
                }
            }

            print_r($sequences);

            echo "\n tot hier \n";

            $organismsSequenceChunks = [];                                                      // Initiate an empty sequence chunks array, where the indexes will be the headers (i.e. organisms) and the values will be subarrays
            foreach($sequences as $header => $sequence){                                        // Loop over all headers and corresponding sequences
                $sequence = implode('', $sequence);                                             // Implode the sequence subarray to get 1 singular sequence string
                $organismsSequenceChunks[$header] = str_split($sequence, $_POST['nucLine']);    // Create sequence chunks of size $_POST['nucLine'] and store them in a subarray 
                $NOChunks = count(str_split($sequence, $_POST['nucLine']));                     // Determine the number of sequence chunks per header (this operation is performed for each header, but the count remains consistent across all headers)  
            }
        }   


?>
</body>
</html>