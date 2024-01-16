<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainbow triangle</title>

</head>
<body>
  <?php
  $colors = [
    'red',
    'orange',
    'yellow',
    'green',
    'blue',
    'indigo',
    'violet'
  ];
  
    for($row=1; $row<=count($colors); $row++){
        for($colum =1; $colum <= $row; $colum++){
            $colorindex = $colum -1;
            echo "<span style='color:$colors[$colorindex]'>*</span>";
        }
echo"<br>";
    }
  
  ?>
</body>
</html>