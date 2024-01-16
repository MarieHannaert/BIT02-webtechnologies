<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webform</title>
</head>
<body>
    <br><form action="#" method="POST">
        firstname:<input type="text" name="firstname">
    <br>
        lastname:<input type="text" name="lastname">

        <br> 
       F<input type="radio" name="gender" value="F">
       M<input type="radio" name="gender" value="M">
       O<input type="radio" name="gender" value="O">
        
       <br>AGE: <input type="number" name="age">

       <br> email: <input type="email" name="email">

      <br>  <input type="password" name="pass1" >
   
      <br> I want to receive updates: <input type="checkbox" name="Updates">


      <br> <input type="submit" name="submit" value="press the button">

</form>

<?php
if(isset($_POST['submit'])){
   foreach($_POST as $key => $value)
   echo"$key: $value<br>";

}
else {
    echo "Nothing has been submitted yet";
}
?>
</body>
</html>