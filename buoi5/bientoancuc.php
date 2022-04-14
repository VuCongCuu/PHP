<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    function fun1(){
            global $x; // khai báo biến toàn cục
            $x= 20;
            $y=20;
            echo "Trước X = $x";
            echo "<br>Trước Y = $y";
        }
    ?>
</head>
<body>
    <?php
        $x= 10;
        $y= 10;
        fun1();
        echo "<br>Sau X = $x";
        echo "<br>Sau Y = $y";
    ?>
</body>
</html>