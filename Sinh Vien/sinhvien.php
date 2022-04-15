<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="themSV.php">Them nhan vien</a>
 
    <table width="974" border="1" align="center" cellpadding="5" cellspacing="0">
        <tr bgcolor="#FFCC33">
        <td width="80">ID</td>
        <td width="210">Name</td>
        <td width="166">Age</td>
        <td width="139">Address</td>
        <td width="132">Telephone</td>
    </tr>
    <?php
        require_once("dungchung.php");
        $rows = getList();
        if($rows==NULL)
            die("<p> LỖI CƠ SỞ DỮ LIỆU </p>");
            foreach($rows as $row){

        
    ?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["name"]?></td>
        <td><?=$row["age"]?></td>
        <td><?=$row["address"]?></td>
        <td><?=$row["telephone"]?></td>
        
    </tr>
    <?php
        }
    ?>
    </table>

</body>
</html>