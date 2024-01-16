<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit new visualisation</title>
    <link rel="stylesheet" href="stylesheet.css">

</head>
<body>
<?php
        require('navigationbar.html');
?>
    <h1>Submit new visualisation</h1>
<div class = 'opmaak'>
    <form action="Alignment.php" method="POST" enctype="multipart/form-data">
<div>
    <label>Select the MSA file to process</label><br>
    <input type="file" name="upload_file"> <br>
     <br>
</div>
<div>
    <label>Paste your MSA scores</label><br>
    <textarea name="paste_MSA" cols="40" rows="10"></textarea> <br>
    <br>
</div>
<div>
    <?php
    foreach(['A', 'T', 'G', 'C'] as $nucleotide){
        echo "$nucleotide: ";
        echo "<select name=\"$nucleotide\">";
        echo"  <option value=\"red\">red</option>";
        echo"  <option value=\"blue\">blue</option>";
        echo"  <option value=\"green\">green</option>";
        echo"  <option value=\"brown\">brown</option>";
        echo" <option value=\"pink\">pink</option>";
        echo "</select><br>";
    }
   
    
?>
<br>
    </div>
<div>
<label>Number of nucleotides to show per line:</label><br>
<input type="number" value="80" name="number"><br>
<br>


</div>
</div>

<br>
    <input id = 'submit' type="submit" name="submit"> <br>
</form>

</body>
</html>