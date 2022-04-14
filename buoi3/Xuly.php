<?php
if(isset($_REQUEST["sub"])==false){
    echo "Mời điền đẩy đủ thông tin";
    echo "<a href='XulyForm.php'>Đăng Nhập</a>";
    die();
} 
$user= $_REQUEST["username"];
$pass= $_REQUEST["pass"];
if($user==NULL){
    echo "Chưa điền user name";
}
else if($pass==NULL){
    echo "Chưa điền password";
} else
echo "Username: $user, Pass:$pass ";

?>