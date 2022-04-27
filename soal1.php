<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
<form action="" method="post">
        <input type="numeric" name="number1">
        <input type="submit" value="Submit">
</form>
</body>
<?php
    $number1 = $_POST['number1'];
    $kali = 1;
    for ($i = $number1; $i>= 1; $i-=1)
    {
        $kali*=$i;
    }
    
    echo $kali;

?>
</html>