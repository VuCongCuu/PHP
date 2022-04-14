<?php
    require_once("tblNhanVien.php");
    if(isset($_REQUEST["b1"])==FALSE){
        die("<h3>Chưa nhập form</h3>");
    }
   
    $hoten = $_REQUEST["tHoten"];
    $dienthoai = $_REQUEST["tDienthoai"];
    $gioitinh="";
    if(isset($_REQUEST["rGioitinh"])==TRUE)
	$gioitinh = $_REQUEST["rGioitinh"];
    $hinhanh = $_REQUEST["tHinhanh"];
    $ketqua = AddNhanvien($hoten,$dienthoai,$gioitinh,$hinhanh);
        if($ketqua==TRUE)
            echo "<H3> THÀNH CÔNG </H3>";
        else
            echo "<h3> LỖI THÊM DỮ LIỆU</h3>";
        ?>
        <a href="DanhSachNV.php"> DANH SÁCH NV </a>
?>