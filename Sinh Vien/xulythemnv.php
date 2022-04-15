<?php
    require_once("dungchung.php");
    if(isset($_REQUEST["b1"])==FALSE){
        die("<h3>Chưa nhập form</h3>");
    }
   
    $name = $_REQUEST["tHoten"];
    $age = $_REQUEST["tAge"];
    $Address= $_REQUEST["tAddress"];
    $tel= $_REQUEST["tDienthoai"];
  
    $ketqua = AddNhanvien($name,$age,$Address,$tel);
        if($ketqua==TRUE)
            echo "<H3> THÀNH CÔNG </H3>";
        else
            echo "<h3> LỖI THÊM DỮ LIỆU</h3>";
        ?>
        <a href="sinhvien.php"> DANH SÁCH NV </a>
?>