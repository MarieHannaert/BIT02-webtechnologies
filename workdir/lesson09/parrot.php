<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parrot</title>
</head>
<body>
<h1>Parrot</h1>
<?php

if(isset( $GET['sentence'])){
    $sentence =$GET['sentence'].' '.$GET['word'];
}
else{
    $sentence= '';
}

?>

    <form action="#" method="GET">
        Enter a word:
        <input type="text" value="" name="word">
        <!--to store the information of the sentece-->
        <input type="hidden" value="<?=$sentence?>" name="sentence">
        <input type="submit" value="submit" name="submit">
</form>

<?php

if (isset($GET['submit'])){
    echo "current word is: <em>$GET[word]</em>";

    echo"<p>";
        echo"<strong>All words:</strong>: $sentence";
    echo"</p>";
}
?>

</body>
</html>