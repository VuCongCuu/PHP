<?php
    function ketnoiCSDL(){
        $conn= null;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=buoi9","root","");
            $conn->query("SET NAMES UTF8");
        }
        catch(PDOException $e)
        {
            echo "Lỗi kết nối cơ so dư liệu ".$e->getMessage();
        }
        return $conn;
    }
    function TaoSelect($tenbang,$cotid,$cotname,$selectedid){
        $conn=ketnoiCSDL();
        $sql="SELECT * FROM $tenbang";
        $pdo_smt=$conn->prepare($sql);
        $ketqua= $pdo_smt->execute();
        if($ketqua==FALSE){
            die("<p>Lỗi tạo select</p>");
        } 
        $rows=$pdo_smt->fetchAll();
        foreach($rows as $row){
            $id=$row[$cotid];
            $ten=$row[$cotname];
            if($id==$selectedid){
                echo "<option value='$id' selected>$ten</option>";
            } else{
                echo "<option value='$id' >$ten</option>";
            } 
        }
    }
    function UploadFile($inputName, $Folder)
{
	$filename="";//tên tệp upload sẽ lưu trên máy chủ
	$temptFile="";//đường dẫn tệp tạm đã upload trên máy chủ
	$errors =  array();//mảng chứa thông báo lỗi
	if(isset($_FILES[$inputName])&&$_FILES[$inputName]["error"]==0)
	{
		$filename = $_FILES[$inputName]["name"];//lấy tên của file ảnh gốc
		$temptFile = $_FILES[$inputName]["tmp_name"];//lấy đường dẫn file ảnh đã upload trên thư mục tạm
		//kiểm tra kích thước tệp không quá 1MB
		$file_size = $_FILES[$inputName]["size"];//kích thước tệp
		if($file_size > 1048576)
		{
			$errors[] = "<p>Lỗi upload ảnh do vượt quá kích thước</p>";
		}
		//kiểm tra kiểu file
		$arr = explode('.',$filename);//tách tên file thành mảng các chuỗi cách nhau bởi dấu chấm
		$duoitep=strtolower(end($arr));//lấy phần đuôi tệp và chuyển thành chữ thường
		$hople = array("jpg","png","gif","jped");
		if(in_array($duoitep,$hople)==false)//nếu đuôi tệp không nằm trong danh sách hợp lệ
		{
			$errors[] = "<p>Lỗi upload ảnh do sai loại tệp</p>";
		}
		//kiểm tra và báo lỗi
		if(empty($errors)==true)//nếu không có lỗi
			move_uploaded_file($temptFile,"$Folder/$filename");
		else
		{
			print_r($errors);
			die("<p> LỖI UPLOAD ẢNH</p>");
		}
	}
	return $filename;
}
?>