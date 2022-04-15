<?php
    function ketnoiCSDL(){
        $conn= null;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=sinhvien","root","");
            $conn->query("SET NAMES UTF8");
        }
        catch(PDOException $e)
        {
            echo "Lỗi kết nối cơ so dư liệu ".$e->getMessage();
        }
        return $conn;
    }
    function getlist(){
        $conn=ketnoiCSDL();
        if($conn==NULL){
            return NULL;
        }
         $sql="SELECT * FROM sinhvien";
         $pdo_stm = $conn->prepare($sql);
         $ketqua = $pdo_stm->execute();
         if($ketqua==FALSE){
             return NULL;
         } else{
            
             $rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
             return $rows; 
            }       
    }
    function AddNhanVien($name,$age,$address,$telephone)
    {
        $conn=ketnoiCSDL();
        if($conn==NULL){
            return NULL;
        }
        $sql = "INSERT INTO sinhvien VALUES(NULL,?,?,?,?)";
        $pdo_stm = $conn->prepare($sql);
        $data=[$name,$age,$address,$telephone];
         $ketqua = $pdo_stm->execute($data); 
         return $ketqua; 
    }
   

?>