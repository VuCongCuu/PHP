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
    $hoten ="YourName";
    $tuoi = 20;

    echo "<h3>Họ tên : $hoten , Tuoi: $tuoi </h3>"
   
    ?>
    <h2>Trôn mã</h2>
    <?php
        for($i=1;$i<=3;$i++){
    ?>
            <h4>DEMO vong lap</h4>
            <h3 style="background: red;">Vong lap thu <?=$i?></h3>
    <?php
        }
    ?>
</body>
</html>