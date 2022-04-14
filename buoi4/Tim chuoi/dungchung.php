<?php
function timchuoi($str1,$str2){
    $i=strpos($str1,$str2);
    if($i===false){
        return "$str2 không có trong chuỗi $str1";
    } else if($i===0){
            return "$str2 nằm ở vi trí đầu trong $str1";
    } else{
        return "$str2 nằm ở vi trí $i trong $str1";
    }

}
function tongchuoi($str)
{
    $arr= explode(",",$str);
    $tong=0;
    foreach($arr as $s){
        if(is_numeric($s)){
            $tong+=$s;
        }

    }
    return $tong;
}
?>