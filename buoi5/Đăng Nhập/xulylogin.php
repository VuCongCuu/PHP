<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Xử lý login</h2>
    <?php
        session_start();
        $tk= $_REQUEST["tk"];
        $mk=$_REQUEST["pass"];
        if($tk=="admin" && $mk=="123456"){
            $_SESSION["logined"]="OK";
            $_SESSION["user"]=$tk;
            echo"Đăng nhập thành công";
            echo "<br>  <a href='admin.php'>Mời Vào Trang Admin</a> ";

        } else {
            echo"Đăng nhập không thành công";
            echo "<br>  <a href='login.php'>Đăng nhập lại</a> ";
            
        }
      
    ?>
</body>
</html>