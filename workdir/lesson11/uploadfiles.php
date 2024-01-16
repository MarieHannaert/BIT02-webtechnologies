<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" methode="POST" enctype="multipart/form-data">
        <input type="file" name="uploaded_file">
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
        print_r($_POST);

        echo "<pre>";
        print_r($_FILES);

        echo"</pre>";

        $contents = file($_FILES['uploaded_file']['tmp_name']);
        print_r($content);
        echo"<pre>";
        print_r($contents);
        echo "</pre>";

        $contents = file_get_contents($_FILES['uploaded_file']['tmp_name']);
        $lines = explode("\n", $contents);

        echo"<pre>";
        print_r($lines);
        echo "</pre>";
      
        }
    ?>
</body>
</html>