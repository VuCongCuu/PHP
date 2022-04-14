<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        function Thamchieu(&$a,&$b){
            $tam= $a;
            $a=$b;
            $b=$tam;
        }
    ?>
</head>
<body>
    <h3>Traodoi</h3>
    <?php
    $x=10;
    $y=20;
    echo "<h3>\$x=$x</h3>";
    echo "<h3>\$y=$y</h3>";
    Thamchieu($x,$y);
    echo "<h3>\$x=$x</h3>";
    echo "<h3>\$y=$y</h3>";
    ?>
</body>
</html>