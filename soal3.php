<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
<?php
    $string = "9.86-A5.321";
    $result = preg_replace("/[^0-9]/", "", $string);
    echo $result."<br>";

    $array = str_split($result);
    $array_count = count($array);

    $zero = $array_count;
    for($a=0; $a<$zero; $a++){
        echo $array[$a];
          for($c=$zero-1; $c > $a; $c-=1){
                 echo "0";
          }
           echo "<br>";
     }
?>
</html>