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
        <input type="text" name="kalimat">
        <input type="submit" value="Submit">
</form>
</body>
<?php
    $kalimat = $_POST['kalimat'];
    $n = strlen($kalimat);
    for ($i = 0; $i<=floor(($n-1)/2); $i++)
    {
        $temp = $kalimat[$i];
        $kalimat[$i] = $kalimat[$n-1-$i];
        $kalimat[$n-1-$i] = $temp;
    }
    
    echo $kalimat;

?>
</html>