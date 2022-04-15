<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 style="text-align: center; color: #090;">Thêm nhân viên</h2>
<form action="xulythemnv.php" method="post">
        <table width="446" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
                <td width=155>Name</td>
                <td width="271"><input type="text" name="tHoten" id="tHoten"></td>
            </tr>
            <tr>
                <td width=155>Age</td>
                <td width="271"><input type="number" name="tAge" id="tAge"></td>
            </tr>
            <tr>
                <td width=155>Address</td>
                <td width="271"><input type="text" name="tAddress" id="tAddress"></td>
            </tr>
            
            <tr>
                <td>Telephone</td>
                <td><input type="text" name="tDienthoai" id="tDienthoai"></td>
           </tr>
            
           
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="b1" id="b1" value="Đồng ý">
                &nbsp;&nbsp; &nbsp;&nbsp;
                <input type="reset" name="b2" id="b2" value="Nhập lại">
                </td>
            </tr>
        </table>

</form>
</body>
</html>