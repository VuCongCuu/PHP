<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    session_start();
    require_once("kiemtradangnhap.php");
?>
<body>
    <h1>Trang danh cho ADMIN</h1>
    <h3>Xin Chao <?=$_SESSION["user"]?></h3>
    <a href="logout.php">Đăng xuất</a>
    
</body>
</html>