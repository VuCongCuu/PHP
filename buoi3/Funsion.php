<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
     function tinhtong($a,$b){
         return $a+$b;
     }
     function tinhhieu($a=10,$b=20){
            return $a- $b;
     }
    ?>
</head>
<body>
    <h3>Funsion</h3>
    <?php
    $a= 10;
    $b= 20;
    $hieu = tinhhieu($a);
    $tong= tinhtong($a,$b);
    echo "<h3>Tông : $tong</h3>";
    echo "<h3>Tông : $hieu</h3>";

    ?>
</body>
</html>