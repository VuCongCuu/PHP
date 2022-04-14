<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $str="";
    if(isset($_REQUEST["str"])){
        require_once("dungchung.php");
        $str=$_REQUEST["str"];
        $a= tongchuoi($str);
        echo "<h1>Tổng là : $a</h1>";
    }
    ?>
</head>
<body>
    <h1>Tông chuỗi</h1>
    <form action="" method="get">
        <p>
          <label for="str">Nhập chuỗi phân biệt bởi dấu phẩy :</label>
          <input type="text" name="str" id="str">  
        </p>
        <p>
            <input type="submit" name="sub" value="Tính Tổng">
        </p>

    </form>
</body>
</html>