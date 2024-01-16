<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualise / Format multifasta</title>

    <style>
        form div{
            margin: 1em;
        }
        span.nuc {
            font-family: monospace;
        }
        table, th, td {
            border: 0.5px solid lightgrey;
            border-collapse: collapse;
            padding: 1em;
        }

        th, td {
            text-align: center;
        }
        div.axis{
            width: 75%;
            border-left: solid black 1px;
            border-bottom: solid black 1px;
        }
        div.full{
            height: 1.5em;
            width: 90%;
            margin: 0.5em;
            border: solid 1px gray;
        }
        div.percentage{
            background: lightblue;
            box-sizing: content-box;
            height: 100%;
        }
    </style>
</head>
<body>
    <h1>Visualise / Format multifasta</h1>
    <!--Create a web-page which allows to upload or paste multi-fasta data and:

    Create a table of conents:
        A list of all fasta headers
        Clicking the fasta header jumps to the formatted fasta sequence
    Print the sequences:
        fasta header is an HTML header (link TOC headers here)
        nucleotides are monospaced, 80 characters wide
        each nucleotide should have its own color:
            A: red
            T: yellow
            G: green
            C: blue

Useful function to extract all keys from an array: https://www.php.net/manual/en/function.array-keys.phpLinks to an external site.
Useful function to trim all leading and trailing whitespace (spaces, enters, tabs) from a string: trim()

Create a web-page which allows to upload or paste multi-fasta data and:

    print the sequences:
        fasta header is header
        (inter)link to fasta blocks
        nucleotides are monospaced, 80 characters wide
        each nucleotide should have its own color the user can select from a list of options
        add an option (checkbox) indicating the nucleotides should be grouped in groups of 10.
        (Example: ATGCATCGAT GCATCGATGC ATCGATGCA)
    Handle invalid nucleotides in one of three ways:
        Ingore: do nothing: handle the invalid NT as a valid NT.
        Remove: remove the invalid NT from the output
        Highlight: highlight the invalid NT in the sequence.
    Display the nucleotide frequencies in a bar graph. (A: xx%, T: xx%, …)

Useful function to extract all keys from an array: https://www.php.net/manual/en/function.array-keys.phpLinks to an external site. 


-->
<!--User input-->
<form action="#" method="POST" enctype="multipart/form-data">
    <strong>methode_for_input: </strong><br>
<div>
    <label><input type="radio" name="selection" value="Uploade">Upload FASTA file</label><br>
    <input type="file" name="upload_file"> <br>
</div>
<div>
    <label><input type="radio" name="selection" value="Paste">Paste FASTA file</label><br>
    <textarea name="paste_seq" cols="40" rows="10"></textarea> <br>
</div>
<div>
    <?php
    foreach(['A', 'T', 'G', 'C'] as $nucleotide){
        echo "Pick a color for $nucleotide: ";
        echo "<select name=\"$nucleotide\">";
        echo"  <option value=\"red\">red</option>";
        echo"  <option value=\"blue\">blue</option>";
        echo"  <option value=\"green\">green</option>";
        echo"  <option value=\"brown\">brown</option>";
        echo" <option value=\"pink\">pink</option>";
        echo "</select><br>";
    }
?>
    </div>

    <div>
        <label><input type="checkbox" name="grouped" checked> Group the nucleotide in groups of 10</label>
    </div>
<!--Radio buttons to specify what to do with invalid nucleotide-->
 <div>
    <label><input type="radio" name="invalid" value="ignore" checked>ignore invalid NTS</label><br>
    <label><input type="radio" name="invalid" value="remove">Remove invalid NTS </label><br>
    <label><input type="radio" name="invalid" value="highlight"> Highlight invlid NTS </label><br>
</div>

    <input type="submit" name="submit"> <br>

</form>

<?php
//check if the form is submitted
if(isset($_POST['submit'])){
    //retrieve the content based on user selection
    if($_POST['selection'] == 'Paste'){
        $content = $_POST['paste_seq'];
    }
    else if ($_POST['selection']== 'Uploade'){
        $content = file_get_contents($_FILES['upload_file']['tmp_name']);
    }   
//Split the content into lines
$lines = explode("\n", $content);
$sequences = [];

// link each header to each sequence
foreach($lines as $line){
    $line = trim($line);

    //is my line a header? 
    if(preg_match('/^>/', $line)){
        $currentheader = $line;
    }
    //store the sequence accossiated with the current header
    else if (!empty($line)){
        $sequences[$currentheader]= $line;
    }
}
//create the table of contents
$headers = array_keys($sequences);

echo "<ol>";
    foreach($headers as $header){
        echo "<li><a href=\"#$header\">$header</a></li>";
    }
echo "</ol>";
//Display the fasta sequence
    foreach($sequences as $header => $sequence){
    
     echo "<strong id='$header'>$header</strong><br>";

     //initiate an empty accepted nucleotide array to store all acceptoed nucleotides
     $acceptednuceotides = [];
     // initiate an empty frequencies array to store the frequencies of all accepted nucleotides
     $frequencies = [];
     // initiate an empty total nucleotide variable to count the amount of accepted nucleotides
        $totalnucleotides = 0;
     //loop over the seperate nucleotides

     foreach(str_split($sequence) as $nucleotide){

        //in case invalid nucleotides are ignored
        if ($_POST['invalid'] == 'ignore'){
            //extract the nucleotide color
        $color = $_POST[$nucleotide] ?? "white";
        
        //save the styled nucelotide in the acceptednucelotides array
        $acceptednuceotides[] = "<span class='nuc' style='background: $color; font-family: monospace;'>$nucleotide</span>";
        
        //add the nucelotides to the frequencie array

        if(!isset($frequencies[$nucleotide])){
            $frequencies[$nucleotide] = 0;
        }

        $frequencies[$nucleotide]++;
        $totalnucleotides++;

        }
        //in case valid nucelotides are removed 
        else if($_POST['invalid'] == 'remove' and in_array($nucleotide, ['A', 'T', 'G', 'C'])){
          //extract the nucleotide color
        $color = $_POST[$nucleotide] ?? "white";
        
        //save the styled nucelotide in the acceptednucelotides array
        $acceptednuceotides[] = "<span class='nuc' style='background: $color; font-family: monospace;'>$nucleotide</span>";
        
        //add the nucelotides to the frequencie array

        if(!isset($frequencies[$nucleotide])){
            $frequencies[$nucleotides] = 0;
        }

        $frequencies[$nucleotide]++;
        $totalnucleotides++;  
        }

        //in cae invalid nucelotides are highlighted
        else if($_POST['invalid'] == 'highlight'){

            //check if the nucelotide is a valid one
            if(in_array($nucleotide, ['A', 'T', 'G', 'C'])){
                //extract the nucelotide color
                $color = $_POST[$nucleotide];
                $acceptednuceotides[] = "<span class='nuc' style='background: $color; font-family: monospace;'>$nucleotide</span>";

            } 
            else{
                $acceptednuceotides[] = "<span class='nuc' style='font-family: monospace; font-weight: bold; bachground: firebrick; color: white'>$nucelotide</span>";
            }
            if(!isset($frequencies[$nucleotide])){
                $frequencies[$nucleotides] = 0;
            }
    
            $frequencies[$nucleotide]++;
            $totalnucleotides++;  
        }

     }
     //dispaly all the accepted nucleotides by looping trough all of the accepted nucleotides separatly
     foreach($acceptednuceotides as $index => $nucleotide){
        if($index % 40 == 0 and $index !=0){
            echo "<br>";
        }
//group the nucelotides in groups of 10
        else if(isset($_POST['grouped']) and $index % 10 == 0 and $index != 0){
            echo " ";
        }
        echo $nucleotide;
     }
     echo "<br>";

     //display the nucleotide sequence in a bar graph
     echo "<div class='axis'>";
     foreach($frequencies as $nucelotide => $frequency){

        
        $percentage = round(($frequency/$totalnucleotides)*100, 2);

        echo "<div class='full'>";
            echo "<div class='percentage' style='width: $percentage%'>$nucleotide: $percentage%</div>";
        echo "</div>";
     }
    echo "</div>";
    }
}
?>
</body>
</html>