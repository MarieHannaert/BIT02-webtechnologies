<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic triangles</title>
</head>
<body>
 <form action="#" method="GET">
    Base: <input type="number" name="base"><br>
    Char: <input type="text" name="char"><br>
    <input type="submit" name="submit" value="create the triangle">
</form>

<hr>
<?php
if(isset($_GET['submit'])){
    $base = $_GET['base'];
    $char = $_GET['char'];

    for($row=1; $row<=$base;$row++){
        for($character=1;$character<=$row;$character++){
            echo $char;
        }

        echo "<br>";
    }
}
?>
</body>
</html>