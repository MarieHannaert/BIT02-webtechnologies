<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        form div{
            margin-bottom: 1em;
        }

    </style>
</head>
<body>
<?php
        require('navigationbar.html');
?>     
<h1>Submit</h1> 
<div class = 'content'>
<form action="Processing.php" method="POST" enctype="multipart/form-data">
    <strong> Input</strong><br>
    <div>
    <label><input type="radio" name="selection" value="Uploade" checked>Upload (multi)fasta file</label><br>
    <input type="file" name="uploaded_file"> <br>
    </div>
    <div>
    <label><input type="radio" name="selection" value="Paste">Paste (multi)fasta sequence(s)</label><br>
    <textarea name="paste_seq" cols="40" rows="10"></textarea> <br>
    </div>
    <strong>Adjustable parameters</strong>
    <div>
        <label><input type="checkbox" name="color" checked> Color Amino Acid groups</label>
    </div>
    <div>
        <label><input type="checkbox" name="group" checked> Group Amino Acids per 10</label>
    </div>

    <div>
        Number of Amino Acids per line<br>
        <input type="number" name="nucLine" value="72">
    </div>

    <div>
    <label><input type="radio" name="invalid" value="remove">Remove invalid Amino Acids </label><br>
    <label><input type="radio" name="invalid" value="highlight" checked> Highlight invalid Amino Acids</label><br>
    </div>

    <input type="submit" name="submit" value="Process Protein Sequences" class="submitprotbut"> <br>

</form>
</div>
</body>
</html>