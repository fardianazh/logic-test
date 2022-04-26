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
    $data = ["1"=>1,"4"=>4,"7"=>7,"9"=>9,"12"=>12];
    echo "before "; print_r($data); echo "<br>";

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if ($number1 > 12 && $number2 > 99){
        unset($data[1],$data[4],$data[7],$data[9],$data[12]);
        echo "after "; print_r($data); echo "<br>";
    } else if ($number1 > 9 && $number1 <= 12 && $number2 > 13){
        unset($data[1],$data[4],$data[7],$data[9]);
        echo "after "; print_r($data); echo "<br>";
    } else if ($number1 > 7 && $number1 <= 9 && $number2 > 13){
        unset($data[1],$data[4],$data[7]);
        echo "after "; print_r($data); echo "<br>";
    }  else if ($number1 > 4 && $number1 <= 7 && $number2 > 13){
        unset($data[1],$data[4]);
        echo "after "; print_r($data); echo "<br>";
    } else if ($number1 > 1 && $number1 <= 4 && $number2 > 13){
        unset($data[1]);
        echo "after "; print_r($data); echo "<br>";
        
    } else if ($number1 >= 1 && $number2 >= 9 && $number2 < 12){
        unset($data[12]);
        echo "after "; print_r($data); echo "<br>";
    }else if ($number1 >= 1 && $number2 >= 7 && $number2 < 9){
        unset($data[12],$data[9]);
        echo "after "; print_r($data); echo "<br>";
    } else if ($number1 >= 1 && $number2 >= 4 && $number2 < 7){
        unset($data[12],$data[9],$data[7]);
        echo "after "; print_r($data); echo "<br>";
    } else if ($number1 >= 1 && $number2 >= 1 && $number2 < 4){
        unset($data[12],$data[9],$data[7],$data[4]);
        echo "after "; print_r($data); echo "<br>";
    } else {
        echo "after "; print_r($data); echo "<br>";
    }
?>
</html>