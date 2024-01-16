<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print list</title>
</head>
<body>
    <?php
    $dishes = ['spaghetti', 'curry', 'chilli'];
    $hobbies = ['toneel', 'klimmen', 'lezen'];

    echo "<ol>";
foreach($dishes as $dish){
    echo "<li>$dish</li>";
}
 echo "</ol>";
      echo "<ul>";
      foreach($hobbies as $hobby){
        echo "<li> $hobby </li>";
      }
      echo "</ul>";
    ?>

</body>
</html>