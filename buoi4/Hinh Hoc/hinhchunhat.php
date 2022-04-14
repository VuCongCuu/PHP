<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $dai="";$rong="";
        if(isset($_REQUEST["sub"])){
            require_once("thuvien.php");
            $dai=$_REQUEST["dai"];
            $rong=$_REQUEST["rong"];
          $dt=dientich($dai,$rong);
            $cv=chuvi($dai,$rong);

            echo "<br> Diện tích: $dt";
            echo "<br> Chu Vi : $cv";
        }
    ?>
</head>
<body>
    <h1>Hình Chữ Nhật</h1>
    <form action="" method="get">
        <p>
            <label for="dai">Chiều Dài</label>
            <input type="text" name="dai" id="dai">
            <span></span>
        </p>
        <p>
            <label for="dai">Chiều Rộng</label>
            <input type="text" name="rong" id="rong">
            <span></span>
        </p>
        <p>
            <input type="submit" name="sub" value="Tính">
        </p>

    </form>
</body>
</html>