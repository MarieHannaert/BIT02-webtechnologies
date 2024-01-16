<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWordcount</title>
</head>
<body>
    <h1>Wordcount</h1>
    <form action="#" method="POST">
        <textarea name="textfield" cols="30" rows="10"></textarea><br>
        <input type="checkbox" name="lines" checked> Display lines<br>
        <input type="checkbox" name="words" checked> Display words<br>
        <input type="checkbox" name="chars" checked> Display character<br>
        <input type="submit" name="submit">
    </form>
    <?php
        //check is the form is submitted
        if (isset($_POST['submit'])){
            $content = $_POST['textfield'];

            $lines = explode("\n", $content);
            
            $linecount = count($lines);
            $wordcount = 0;
            $charcount = 0; 

            //loop over every line
            foreach ($lines as $line){
                $wordcount += str_word_count($line);
                $charcount += strlen($line);
            }
            echo"<table>";
             if (isset($_POST['lines'])){
                echo "<tr>";
                    echo "<th>lines</th>";
                    echo "<td>$linecount</td>";
                echo "</tr>";}
            if(isset($_POST['words'])){
                echo "<tr>";
                    echo "<th>words</th>";
                    echo "<td>$wordcount</td>";
                echo "</tr>";}
            if(isset($_POST['chars'])){
                echo "<tr>";
                    echo "<th>Chars</th>";
                    echo "<td>$charcount</td>";
                echo "</tr>";}
            echo "</table>";

            }


    ?>
</body>
</html>