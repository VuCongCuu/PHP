<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="MyScript.js" language="javascript"></script>
</head>
<body>
    <h2>Nhập điểm</h2>
    <span id="baoloi" style="color:red"></span>
    <form action="Xemketqua.php" method="get">
        <p>
            <label for="toan">Điểm Toán</label>
            <input type="text" name="toan" id="toan" onblur="check(this)">
            <span></span>
        </p>
        <p>
            <label for="van">Điểm Văn</label>
            <input type="text" name="van" id="van"  onblur="check(this)" >
            <span></span>
        </p>
        <p>
            <label for="anh">Điểm Anh</label>
            <input type="text" name="anh" id="anh"  onblur="check(this)" >
            <span></span>
        </p>
        <p>
            <input type="submit" name="sub" value="Kiêm Tra" onsubmit="return kiemtra()">
        </p>

    </form>
</body>
</html>