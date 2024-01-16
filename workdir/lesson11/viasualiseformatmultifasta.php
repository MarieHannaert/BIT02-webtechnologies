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
        .A{
            background: red;
font-family: monospace;
        }
        .C{
            background: blue;
font-family: monospace;
        }
        .T{
            background: yellow;
font-family: monospace;
        }
        .G{
            background: green;
            font-family: monospace;
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
        <input type="submit" name="submit"> <br>

</form>

<?php
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
    if(preg_match('/^>/',$line)){
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
        echo "<li><a href='#$header'>$header</li>";
    }
echo "</ol>";
//Display the fasta sequence
    foreach($sequences as $header => $sequence){
     echo "<strong id='$header'>$header</strong>";

     //loop over the seperate nucleotides

     foreach(str_split($sequence) as $index => $nucleotide){
        if($index % 40 == 0){
            echo "<br>";
        }
        echo "<span class ='$nucleotide'>$nucleotide</span>";
     }
     echo "<br>";
    }
}
?>
</body>
</html>