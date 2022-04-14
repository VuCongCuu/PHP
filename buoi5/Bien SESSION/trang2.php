<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Trang 2 - nhân thông tin tư form</h2>
    <?php
        session_start();
        $hoten= $_REQUEST["f1"];
        $_SESSION["hoten"]=$hoten;

    ?>
    <h3>Hello : <?=$hoten?></h3>
    <a href="trang3.php">Trang 3</a>
</body>
</html>