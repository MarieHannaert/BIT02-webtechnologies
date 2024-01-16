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
        echo "$contents";
    }
    ?>
</body>
</html>