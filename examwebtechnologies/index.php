<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<?php
        require('navigationbar.html');
?> 
<h1>Protein Visualization Tool</h1> 
<div class = 'content'>

<p>Explore the fascinating world of proteins with this Protein Visualization Tool.
</p>
<p><h2>How to Use:</h2>
Submit your protein sequences using the  <a href="SubmitDataPage.php">user-friendly interface</a>. You can either upload a (multi)fasta file or paste the sequences directly. Customize your visualization preferences, such as coloring amino acid groups, to enhance the visualization.
</p>
<p><h2>Features:</h2>
* Upload (multi)fasta files or paste sequences for visualization.<br>
* Color-code amino acid groups for easy identification.<br>
* Group amino acids to enhance readability.<br>
* Remove or highlight invalid amino acids for accurate analysis.
</p>
<p><h2>Get Started:</h2>
Click on the "Submit Sequences" button to begin the protein visualization journey.
</p>
</div>
<a class='requestbutton' href="SubmitDataPage.php">
        Submit Sequences
</a>
    
</body>
</html>