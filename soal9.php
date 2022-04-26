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
$array = [4,2,6,88,3,11];

    function high($array) {
        $n = count($array);
        $max = $array[0];
        for ($i = 1; $i < $n; $i++)
            if ($max < $array[$i])
                $max = $array[$i];
        return $max;
    }

    function low($array) {
        $n = count($array);
        $min = $array[0];
        for ($i = 1; $i < $n; $i++)
            if ($min > $array[$i])
                $min = $array[$i];
        return $min;
    }
    echo "low :".low($array).", high:".high($array);

?>
</html>