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
         $pdo_stm->bindParam(1,$hoten);
        $pdo_stm->bindParam(2,$dienthoai);
        $pdo_stm->bindParam(3,$gioitinh);
        $pdo_stm->bindParam(4,$hinhanh);
         $ketqua = $pdo_stm->execute(); // thực thi câu lệnh
         return $ketqua; 
    }
    function getNhanvien($id)
    {
        $conn = ConnectDB();
        if($conn==NULL)
            return NULL;
        $sql = "SELECT * FROM tbNhanvien WHERE id=?";
        $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
        $pdo_stm->bindParam(1,$id);
        $ketqua = $pdo_stm->execute();//thực thi câu sql
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
        $pdo_stm->bindParam(1,$hoten);
        $pdo_stm->bindParam(2,$dienthoai);
        $pdo_stm->bindParam(3,$gioitinh);
        $pdo_stm->bindParam(4,$hinhanh);
        $pdo_stm->bindParam(5,$id);
        $ketqua = $pdo_stm->execute();//thực thi câu sql
        return $ketqua;//TRUE/FALSE
    }
    function DeleteNhanvien($id)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "DELETE FROM tbNhanvien WHERE id=?";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $pdo_stm->bindParam(1,$id);
    $ketqua = $pdo_stm->execute();//thực thi câu sql
    return $ketqua;//TRUE/FALSE
}

?>