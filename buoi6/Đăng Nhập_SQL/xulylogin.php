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
        $mk=md5($mk);
    
        //kết nối csdl
        try{
            $conn = new PDO("mysql:host=localhost;dbname=T2104E","root","");
            $conn->query("SET NAMES UTF8");//Thiết lập kết nối làm việc unicode
        }
        catch(PDOException $e){
            die("Lỗi kết nối CSDL:" . $e->getMessage());
        }
        $sql = "SELECT * FROM tbuser WHERE username='$tk' AND password='$mk'";
        echo "<p>$sql</p>";
        $pdo_stm = $conn->prepare($sql);
        $ketqua = $pdo_stm->execute();//trả về true/false 
        $n = $pdo_stm->rowCount();//lấy số dòng kết quả
        if($n>0)//thành công
        {
            //lấy dòng dữ liệu select từ bảng trả về dạng mảng
            $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
            $_SESSION["logined"] = "OK";
            $_SESSION["user"] = $row["username"];//lấy giá trị cột username
            $_SESSION["hoten"] = $row["hoten"];
            echo "<h3> ĐĂNG NHẬP THÀNH CÔNG</h3>";
            echo "<a href=\"Admin.php\"> Vào Trang Admin</a>";
        }
        else
        {
            $_SESSION["logined"] = "";
            echo "<h3> ĐĂNG NHẬP SAI TÀI KHOẢN</h3>";
            echo "<a href=\"Login.php\"> Mời Đăng nhập</a>";
        }
        ?>
</body>
</html>