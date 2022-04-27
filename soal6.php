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
       <label>Int low <input type="numeric" name="number1"> <br>
       <label>Int high <input type="numeric" name="number2">
        <input type="submit" value="Submit"> <br>
</form>
</body>
<?php
    $data = [1,4,7,9,12];
    echo "before "; print_r($data); echo "<br>";
    
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    foreach ($data as $datas => $values){
        if ($number1 <= $values){
            if($number2 >= $values){
                echo $values." ";
            }
        }
    }
    

?>
</html>