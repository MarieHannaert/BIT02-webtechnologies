<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Create a web-page which allows to upload a file, and print the contents of the file.
-->
<form action="" method="post" enctype="multipart/form-data">
      <input value="" type="file" name="file">
      <input type="submit" value="submit" name="submit">
   </form>

<?php if( isset($_POST['submit']) ) {

   if( empty($_FILES['file']['error']) ) {

      echo "<h1>";
         echo "File: <em>". $_FILES['file']['name'] ."</em> has content:";
      echo "</h1>";

      echo "<pre>";
         echo file_get_contents( $_FILES['file']['tmp_name']);
      echo "</pre>";
   }
   else {

      echo "Error occurred during file upload. Errorcode: " . $_FILES['file']['error'];
   }
}

?>

</body>
</html>