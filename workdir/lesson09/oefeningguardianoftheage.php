<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
        firstname:<input type="text" name="firstname">
        <br>AGE: <input type="number" name="age">
        <br> <input type="submit" name="submit" value="press the button">
      
</form>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['firstname']) && !empty($_POST['age'])){
        $firstname = $_POST['firstname'];
        $age = $_POST['age'];

        if($age >= 21){
            echo "Access granted, $firstname";
        } else {
            echo "Access denied, $firstname. You need to wait " . (21 - $age) . " more years before resubmitting the form.";
        }
    } else {
        echo "Error: All fields are required!";
    }
}
?>
</body>
</html>