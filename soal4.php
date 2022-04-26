<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
       <label>A <input type="text" name="number1"> <br>
       <label>B <input type="text" name="number2">
        <input type="submit" value="Submit"> <br>
</form>
</body>
<?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $number1 ^= $number2;
    $number2 ^= $number1;
    $number1 ^= $number2;

    echo "A ".$number1."<br/>";
    echo "B ".$number2;
?>
</html>