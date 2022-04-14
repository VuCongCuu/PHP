<?php
//require("KetnoiCSDL.php");
require("Dungchung.php");
$conn=KetnoiCSDL();
//lấy id từ link XoaNV.php?id=xxx
if(isset($_REQUEST["id"])==false)
	die("<p>Chưa có id nhân viên</p>");
$id = $_REQUEST["id"];
if($id=="" || is_numeric($id)==false)
	die("<p>id không được rỗng và phải là số</p>");
//THỰC HIỆN CÂU LỆNH INSERT,UPDATE, DELETE
$sql ="DELETE FROM tbNhanvien WHERE id=?";
$pdo_stm = $conn->prepare($sql);
$pdo_stm->bindParam(1,$id);//gán id vào ? thứ 1 trong câu lệnh sql
$ketqua = $pdo_stm->execute();//thực hiện lệnh sql
if($ketqua==TRUE)
{
	if($pdo_stm->rowCount()>0)
		echo "<H3> XÓA THÀNH CÔNG nhân viên id=$id </H3>";
	else
		echo "<h3> KHÔNG có nhân viên id=$id</h3>";
}
else
	echo "<h3> LỖI SỬA DỮ LIỆU</h3>";
?>
<a href="DanhSachNV.php"> DANH SÁCH NV </a>