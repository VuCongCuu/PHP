<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    <h2>Xem kết quả</h2>
    <?php
    $toan= $_REQUEST["toan"];
    $van=$_REQUEST["van"];
    $anh=$_REQUEST["anh"];
    $tb=($toan+$van+$anh)/3;
    echo "Điểm trung bình : $tb";
    if($tb<4){
        echo "<br>Trượt";
    } else if($tb>=4 && $tb<6.5){
        echo "<br>Trung Bình";
    } else if($tb>=6.5 && $tb<8){
        echo "<br>Khá";
    } else{
        echo "<br>Giỏi";
    }
    ?>
</body>
</html>