<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webform</title>
</head>
<body>
    <form action="#" method="POST">
        firstname:<input type="text" name="firstname">
    
        
      <br>  <input type="password" name="pass1" >
      <br> email: <input type="email" name="email">

      <br>AGE: <input type="number" name="age">

      <br> Subscribe to my newsletter: <input type="checkbox" name="newsletter">

      <br> 
        F<input type="radio" name="gender" value="F">
       M<input type="radio" name="gender" value="M">
       O<input type="radio" name="gender" value="O">

       yes<input type="radio" name="hungry" value="yes">
       no<inpit type="radio" name="hungry" value="no">

       <br><select name="color">
        <optgroup label="primary colors">
            <option value="r">Red</option>
            <option value="b">Blue</option>
            <option value="g">green</option>
</optgroup>
<optgroup label="secundary colors">
</optgroup>
</select>
<br><select name="colors2[]" multiple>
            <option value="r">Red</option>
            <option value="b">Blue</option>
            <option value="g">green</option>
</select>
<br>
<textarea name="textarea" cols="30" rows="10"></textarea>

<br> <!--hidden-->
<input type="hidden" name="hidden">

      <br> <input type="submit" name="submit" value="press the button">
      
</form>

<?php
print_r($_GET);
print_r($_POST);

if(isset($_POST['submit'])){
echo "Hello" . $_POST['firstname'];
}
?>
</body>
</html>