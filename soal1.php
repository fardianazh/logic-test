<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <script>
        var totalBelanja = prompt("Masukan Angka");

        if(totalBelanja == 4){
            document.write(4*3*2*1);
        } else if (totalBelanja == 8){
            document.write(8*7*6*5*4*3*2*1); 
        } else {
            document.write("<p> pilih 4 atau 8 </p>");
        }
    </script>
</body>
</html>