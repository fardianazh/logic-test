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
       <label>Int <input type="numeric" name="number1">
        <input type="submit" value="Submit"> <br>
</form>
</body>
<?php
    $number1 = $_POST['number1'];

    if ($number1 % 2 == 0){ 
        echo "$number1 adalah tahun kabisat"; 
    }else {
        echo "$number1 bukan tahun kabisat"; 
    }
?>
</html>