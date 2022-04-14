<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .product{
            width: 200px;
            height: 200px;
            border: 1px red solid;
            float: left;
            margin: 10px;
            padding: 5px;
            border-radius: 5px;
            

        }
    </style>
</head>
<body>
    <?php
    $product= 
    [
        ["code"=>"SP01","name"=>"TiVi","qt"=>100000],
        ["code"=>"SP02","name"=>"Tu Lạnh","qt"=>200000],
        ["code"=>"SP03","name"=>"Điều Hòa","qt"=>300000]
    ];
    print_r($product);
    ?>
    <h3>Danh sách sản phẩm</h3>
    <?php
        for($i=0;$i<count($product);$i++)
        {
    ?>
    <div class="product">
       <h3>Mã SP:<?=$product[$i]["code"]?></h3>
       <h3>Tên SP:<?=$product[$i]["name"]?></h3>
       <h3>Số lượng : <?= number_format( $product[$i]["qt"])?> </h3>
    </div>
    <?php
    }
    ?>
    <h3 style="clear:both">Foreach</h3>
    <?php
        foreach($product as $a)
        {
    ?>
     <div class="product">
       <h3>Mã SP:<?=$a["code"]?></h3>
       <h3>Tên SP:<?=$a["name"]?></h3>
       <h3>Số lượng : <?= number_format( $a["qt"])?> </h3>
    </div>
    <?php
        }
    ?>
</body>
</html>