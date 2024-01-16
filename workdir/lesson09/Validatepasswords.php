<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate password</title>
</head>
<body>
<h1>Validate password</h1>
    
    <form action="#" method="POST">
        Password 1: <input type="password" name="pass1"><br>
        Password 2: <input type="password" name="pass2"><br>
        <input type="submit" name="submit" value="Validate your password!">
    </form>

    <?php
        // Check if the form is submitted
        if(isset($_POST['submit'])){
            // Retrieve password inputs from the form
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];

            // Array to store validation errors
            $errors = [];

            // Check if passwords match
            if($pass1 != $pass2){
                $errors[] = "Passwords don't match!"; 
            }

            // Check if password contains at least 1 number and 1 letter
            $passChars = str_split($pass1);
            $number = false;
            $letter = false;
            foreach($passChars as $passChar){
                if(in_array($passChar, [0,1,2,3,4,5,6,7,8,9])){
                    $number = true;
                }
                if(in_array(strtolower($passChar), range('a', 'z'))){
                    $letter = true;
                }
            }

            // Validate password criteria and add errors if necessary
            if($number != true or $letter != true){
                $errors[] = 'Password must contain at least 1 number and 1 letter!';
            }

            // Check if password length is at least 8 characters
            if(strlen($pass1) < 8){
                $errors[] = "Password must be at least 8 characters!";
            }

            // Output validation result
            if(empty($errors)){
                echo "Your password passed all tests!";
            } else{
                // Display validation errors
                foreach($errors as $error){
                    echo "<div class='error'>$error</div>";
                }
            }
        }
    ?>
</body>
</html>