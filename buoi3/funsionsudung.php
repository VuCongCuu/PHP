<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//include("funsionchung.php");
require_once("funsionchung.php");
    $a= 110;
    $b= 20;
    $hieu = tinhhieu($a);
    $tong= tinhtong($a,$b);
    echo "<h3>Tông : $tong</h3>";
    echo "<h3>Tông : $hieu</h3>";
    ?>
</body>
</html>