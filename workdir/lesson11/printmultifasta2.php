<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File print contents </title>
</head>
<body>
    <h1>file print contents </h1>

    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload_file">
        <input type="submit" name="submit">

    </form>

    <?php

    if(isset($_POST['submit'])){

        $contents = file_get_contents($_FILES['upload_file']['tmp_name']);
        $lines = explode("\n", $contents);


        $sequences = [];

        foreach ($lines as $line){
            $line = trim($line);
            
            if(preg_match('/^>/', $line)){
                $currentheader = $line;
            } else if(!empty($line)){
                $sequences[$currentheader] = $line;
            }
            
        }

        echo "amount of sequences: ". count($sequences) . "<br>";

        foreach($sequences as $header => $sequence){
            echo "<strong>$header</strong><br>";

            $countC = substr_count($sequence, 'C');
            $countG = substr_count($sequence, 'G');
            $total = strlen($sequence);

            $GCpercentage = (($countC + $countG) / $total)*100;

            $sequenceArray = str_split($sequence);

            foreach($sequenceArray as $index => $nucleotide){

                if($index % 40 == 0 and $index){
                    echo "<br>";
                }
                echo "<span class='$nucleotide'>$nucleotide</span>";
            }
            echo "<br>" . $GCpercentage . "<br>";
            echo "<br>";
        }
   
    }
    ?>
</body>
</html>