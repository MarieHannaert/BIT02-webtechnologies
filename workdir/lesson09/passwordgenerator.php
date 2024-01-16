<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwordgenerater</title>
</head>
<body>
    <h1>Password generator </h1>

    <form action="#" method="GET">
        number of passwords: <input type="number" name="passamount" value="<?php echo $_GET['passamount'] ?? 10; ?>"> <br>
        number of charachters: <input type="number" name="charamount" value="<?php echo $_GET['charamount']?? 15; ?>"><br>
        add numbers: <input type="checkbox" name="addnumbers"><br>

        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_GET['submit'])){
            $lowercase = range('a', 'z');
            $uppercase = range('A', 'Z');
            $numbers = range(0,9);

            $allcharacters = array_merge($lowercase, $uppercase);

            if(isset($_GET['addnumbers'])){
                $allcharacters = array_merge($lowercase, $uppercase, $numbers);
            }

            for ($passwordnumber=1; $passwordnumber <= $_GET['passamount']; $passwordnumber++){
                echo "password $passwordnumber:";
              

              for($charcater=1;$charcater<=$_GET['charamount'];$charcater++){
                $randomindex = rand(0, count($allcharacters)-1);

                echo $allcharacters[$randomindex];
              }   
              echo "<br>";
            } 
          
        }
    ?>

</body>
</html>