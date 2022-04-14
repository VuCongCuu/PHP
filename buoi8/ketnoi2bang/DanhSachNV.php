<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center; color: #090;">DANH SÁCH NHÂN VIÊN</h1>
<p><a href="ThemNV.php">Thêm nhân viên</a></p>
<?php
require("Dungchung.php");
$maphong=0;
if(isset($_REQUEST["maphong"])==true)
$maphong = $_REQUEST["maphong"];//lấy mã phòng từ <select>
$conn = KetnoiCSDL();
?>
	<FORM name="f1" id="f1" action="" method="get">
    Phòng ban:
    <select name="maphong" id="maphong">
    	<option value=""> Tất cả phòng ban</option>
		 <?php
		 TaoSelect("tbPhongban","maphong","tenphong",$maphong);
		 ?>       
    </select> 
    <input type="submit" name="timkiem" id="timkiem" value="tìm kiếm">
    </FORM>
</p>
<?php
//require("KetnoiCSDL.php");
$sql = "SELECT nv.*,pb.tenphong 
		FROM tbNhanvien nv INNER JOIN tbPhongban pb
		ON nv.Maphong = pb.Maphong";
if($maphong!=0)
	$sql .= " WHERE nv.maphong=$maphong";		
$pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
$ketqua = $pdo_stm->execute();//thực thi câu sql
if($ketqua==FALSE)
	die("<h3>LỖI CÂU LỆNH SQL</H3>");
if($pdo_stm->rowCount()<=0)
	die("<h3>CHƯA CÓ DỮ LIỆU</h3>");
//lấy các dòng từ csdl dạng mảng 2 chiều
$rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
//print_r($rows);
?>

<table width="974" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr bgcolor="#FFCC33">
    <td width="80">ID</td>
    <td width="210">Họ tên</td>
    <td width="166">Điện thoại</td>
    <td width="139">Giới tính</td>
    <td width="132">Hình ảnh</td>
    <td width="132">Phòng ban</td>
    <td width="173">Xử lý</td>
  </tr>
  <?PHP
  foreach($rows as $row)
  {
    $hinhanh = $row["hinhanh"]==""?"noimg.jpg":$row["hinhanh"];
  ?>
  <tr>
    <td><?=$row["id"]?></td>
    <td><?=$row["hoten"]?></td>
    <td><?=$row["dienthoai"]?></td>
    <td><?=($row["gioitinh"]==0)?"Nam":"Nữ"?></td>
    <td align="center" valign="middle">
      <img src="hinhanh/<?= $hinhanh?>" width="80">
    </td>
    <td><?=$row["tenphong"]?></td>
    <td>
    	<a href="SuaNV.php?id=<?=$row["id"]?>">Sửa</a> 
        - 
        <a href="XoaNV.php?id=<?=$row["id"]?>" 
        	onClick="return confirm('chắc chắn xóa?');">Xóa</a>
    </td>
  </tr>
  <?php
  }//đóng foreach
  ?>
</body>
</html>