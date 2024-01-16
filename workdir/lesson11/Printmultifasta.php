<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print multifasta</title>

    <style>
        pre {white-space: pre-wrap; font-family: monospace;}
    </style>
</head>
<body>
    <!--Create a web-page which allows to upload or paste multi-fasta data and:

    report number of sequences
    print the sequences:
        fasta header is bold
        nucleotides are monospaced, 80 characters wide
    report GC-content per sequence

Handy function to count substrings (can be useful when determining the GC count): https://www.php.net/manual/en/function.substr-count.php
Links to an external site.
Also take a closer look at the str_split function: https://www.php.net/manual/en/function.str-split.php Links to an external site. 
To determine whether a string starts with a '>' character, you can utilize the following function: preg_match('/^>/', $line). This function will return true if the string stored in the variable $line begins with a '>' character.
-->
<h1>Multi-FASTA Processor</h1>

    <form action="#" method="post" enctype="multipart/form-data">
        <label for="fastaInput">Upload or paste multi-FASTA data:</label><br>
        <textarea name="fastaInput" rows="10" cols="80"></textarea><br><br>
        <input type="submit" value="Process">
    </form>

    <?php
    function countSequences($fastaData) {
        $fastaLines = explode("\n", $fastaData);
        $sequenceCount = 0;
        foreach ($fastaLines as $line) {
            if (preg_match('/^>/', $line)) {
                $sequenceCount++;
            }
        }
        return $sequenceCount;
    }

    function processFASTA($fastaData) {
        $fastaLines = explode("\n", $fastaData);
        $output = "";
        $currentSequence = "";
        foreach ($fastaLines as $line) {
            if (preg_match('/^>/', $line)) {
                if (!empty($currentSequence)) {
                    $output .= "<pre>$currentSequence</pre><br><br>";
                }
                $output .= "<strong>$line</strong><br>";
                $currentSequence = "";
            } else {
                $currentSequence .= $line;
            }
        }
        if (!empty($currentSequence)) {
            $output .= "<pre>$currentSequence</pre><br><br>";
        }
        return $output;
    }

    if(isset($_POST['fastaInput'])){
        $fastaData = $_POST['fastaInput'];
        $sequenceCount = countSequences($fastaData);

        echo "<h2>Report</h2>";
        echo "Number of sequences: $sequenceCount<br><br>";

        echo "<h2>Sequences</h2>";
        echo processFASTA($fastaData);

        echo "<h2>GC Content</h2>";
        $fastaLines = explode("\n", $fastaData);
        foreach ($fastaLines as $line) {
            if (preg_match('/^>/', $line)) {
                continue;
            } else {
                $gcCount = substr_count($line, 'G') + substr_count($line, 'C');
                $totalCount = strlen($line);
                $gcContent = ($gcCount / $totalCount) * 100;
                echo "GC Content: $gcContent%<br>";
            }
        }
    }
    ?>
</body>
</html>