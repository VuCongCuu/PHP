<?php
    function ConnectDB(){
        $conn=NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=buoi8","root","");
            $conn->query("SET NAMES UTF8");//Thiết lập kết nối làm việc unicode
        }
        catch(PDOException $e){
            die("Lỗi kết nối CSDL:" . $e->getMessage());
        }
        return $conn;
    }
?>