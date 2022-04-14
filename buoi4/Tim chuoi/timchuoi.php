<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $chuoi1="";
    $chuoi2="";
    if(isset($_REQUEST["sub"])){
        require_once("dungchung.php");
        $chuoi1= $_REQUEST["str1"];
        $chuoi2= $_REQUEST["str2"];
        $kq= timchuoi($chuoi1,$chuoi2);
        echo $kq;
    }
?>
<body>
    <h1>Tìm chuỗi </h1>
    <form action="" method="get">
        <p>
            <label for="str1">Chuỗi 1</label>
            <input type="text" name="str1" id="str1">
        </p>
        <p>
            <label for="str2">Chuỗi 2</label>
            <input type="text" name="str2" id="str2">
        </p>
        <p>
            <input type="submit" name="sub" value="Tìm ">
        </p>
    </form>
</body>
</html>