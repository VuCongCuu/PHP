<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $user="";
    $pass="";
    $userc="";
    $passs="";

    $nhanquangcao="";
    if(isset($_REQUEST["sub"]))
    {

        $user= $_REQUEST["username"];
        $pass=$_REQUEST["pass"];
        if($user==NULL){
            $userc= "Chưa nhập họ tên";
        } 
         else if($user=="admin"){
            $userc="khong được đăn ký ";
        }
        if($_REQUEST["c1"]==true){
            $nhanquangcao=$_REQUEST["c1"];
        } else{
            $nhanquangcao="Không Nhân Quảng Cáo";
        }
    }

    ?>
<form action="" method="get" id="form1"  onsubmit="return Kiemtra()" >
        
        <p>
            <label for="username">User Name</label>
            <input type="text" name="username" id="username" value="<?=$user?>" >
            <span style="color:red"><?=$userc?></span>
        </p>
        <p>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" value="<?=$pass?>">
            <span style="color:red"><?=$passs?></span>
        </p>
        <p>
            <label for="c1">Đồng ý chạy quảng cáo</label>
            <input type="checkbox" name="c1" id="c1" value="có ">
            <span style="color:red"><?=$nhanquangcao?></span>
        </p>
        <p>
            
            <input type="submit" name="sub" id="sub" value="Dang Ky">
        </p>
    </form> 
</body>
</html>