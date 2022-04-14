<?php
    require_once("fnCSDL.php");
    function getlist(){
        $conn=ConnectDB();
        if($conn==NULL){
            return NULL;
        }
         $sql="SELECT * FROM tbNhanvien";
         $pdo_stm = $conn->prepare($sql);
         $ketqua = $pdo_stm->execute(); // thực thi câu lệnh
         if($ketqua==FALSE){
             return NULL;
         } else{
            
             $rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
             return $rows; // tra vê các dòng
            }       
    }
    function AddNhanVien($hoten,$dienthoai,$gioitinh,$hinhanh)
    {
        $conn=ConnectDB();
        if($conn==NULL){
            return NULL;
        }
        $sql = "INSERT INTO tbNhanvien VALUES(NULL,?,?,?,?)";
        $pdo_stm = $conn->prepare($sql);
        //  $pdo_stm->bindParam(1,$hoten);
        // $pdo_stm->bindParam(2,$dienthoai);
        // $pdo_stm->bindParam(3,$gioitinh);
        // $pdo_stm->bindParam(4,$hinhanh);
        $data=[$hoten,$dienthoai,$gioitinh,$hinhanh];

         $ketqua = $pdo_stm->execute($data); // thực thi câu lệnh
         return $ketqua; 
    }
    function getNhanvien($id)
    {
        $conn = ConnectDB();
        if($conn==NULL)
            return NULL;
        $sql = "SELECT * FROM tbNhanvien WHERE id=?";
        $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
        $data=[$id];
        $ketqua = $pdo_stm->execute($data);//thực thi câu sql
        if($ketqua==FALSE)
            return NULL;
        else
        {
            $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
            return $row;//Trả về mảng chứa dữ liệu
        } 
    }
    function UpdateNhanvien($id,$hoten,$dienthoai,$gioitinh,$hinhanh)
    {
        $conn = ConnectDB();
        if($conn==NULL)
            return NULL;
        $sql = "UPDATE tbNhanvien 
                SET hoten=?,dienthoai=?,gioitinh=?,hinhanh=? WHERE id=?";
        $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
        // $pdo_stm->bindParam(1,$hoten);
        // $pdo_stm->bindParam(2,$dienthoai);
        // $pdo_stm->bindParam(3,$gioitinh);
        // $pdo_stm->bindParam(4,$hinhanh);
        // $pdo_stm->bindParam(5,$id);
        $data=[$hoten,$dienthoai,$gioitinh,$hinhanh,$id];
        $ketqua = $pdo_stm->execute($data);//thực thi câu sql
        return $ketqua;//TRUE/FALSE
    }
    function DeleteNhanvien($id)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "DELETE FROM tbNhanvien WHERE id=?";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $data=[$id];
        $ketqua = $pdo_stm->execute($data);//thực thi câu sql
    return $ketqua;//TRUE/FALSE
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