<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script >
    function Kiemtra(){
        user= document.getElementById("username");
        pass= document.getElementById("pass");
        if(user.value==""||pass.value==""){
            alert("chưa điền user hoặc pass");
            return false;
        }
    }
</script>
<body>
    <form action="Xuly.php" method="post" id="form1"  onsubmit="return Kiemtra()" >
        <p>
            <label for="username">User Name</label>
            <input type="text" name="username" id="username" >
            <span></span>
        </p>
        <p>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" >
            <span></span>
        </p>
        <p>
            
            <input type="submit" name="sub" id="sub" value="Dang Nhap">
        </p>
    </form>
    <a href="Xoa.php" onclick="return confirm('Chắc chăn xóa không')">Xoa tan khoan</a>
    
</body>
</html>