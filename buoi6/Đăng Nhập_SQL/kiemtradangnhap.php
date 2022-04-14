<?php
    if(isset($_SESSION["logined"])==false||$_SESSION["logined"]==""){
?>
    <h3>Bạn chưa đăng nhập</h3>
    <a href="login.php">Đăng Nhập</a>
<?php
die("<h2>Kết thúc</h2>");
    }
?>