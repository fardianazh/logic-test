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
    
    for ($i = 1; $i <= $number1; $i++) {
        if($i % 3 == 0 && $i % 5 == 0){
            echo "EduWork<br>";
        } else if ($i % 3 == 0) {
          echo "Edu <br>";
        } else if($i % 5 == 0){
          echo "Work <br>";
        } else {
          echo "$i <br>";
        }
    }
?>
</html>