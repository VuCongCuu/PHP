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
    $cast=["SP01" => 1,"SP02" => 2];
    $cast["SP03"] = 4;
    foreach($cast as $code => $quantity){
        echo "<p>Mã San phẩm : $code; Số lương : $quantity</p>";
    }
    //kiêm tra tôn tại chưa
    if(array_key_exists("SP04",$cast)==true)
    {
        echo "da ton tai";
    } else{
        echo "chưa tồn tại";
    }
    //lấy danh sach các key
    $keys= array_keys($cast);
    foreach($keys as $a){
        echo"<p>Ma SP:$a, Sô lương: $cast[$a]</p>";
    }

    // cấu trúc mảng
    print_r($cast);
    ?>
</body>
</html>