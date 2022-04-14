<?php
//require("KetnoiCSDL.php");
require("Dungchung.php");
$conn=KetnoiCSDL();//Gọi hàm kết nối CSDL
if(isset($_REQUEST["b1"])==FALSE)//nếu chưa submit form
 die("<h3> Chưa nhập form</h3>");
$hoten = $_REQUEST["tHoten"];
$dienthoai = $_REQUEST["tDienthoai"];
$gioitinh="0";
if(isset($_REQUEST["rGioitinh"])==TRUE)//nếu chọn radio
	$gioitinh = $_REQUEST["rGioitinh"];
$hinhanh = UploadFile("tHinhanh","hinhanh");
$maphong = $_REQUEST["maphong"];
//THỰC HIỆN CÂU LỆNH INSERT,UPDATE, DELETE
$sql ="INSERT INTO tbNhanvien VALUES(NULL,?,?,?,?,?)";
$pdo_stm = $conn->prepare($sql);
$data=[$hoten,$dienthoai,$gioitinh,$hinhanh,$maphong];
$ketqua = $pdo_stm->execute($data);//thực hiện lệnh sql
if($ketqua==TRUE)
	echo "<H3> THÀNH CÔNG </H3>";
else
	echo "<h3> LỖI THÊM DỮ LIỆU</h3>";
?>
<a href="DanhSachNV.php"> DANH SÁCH NV </a>