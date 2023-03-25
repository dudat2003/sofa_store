<?php
    if(is_array( $sanpham)){
        extract( $sanpham);
    }
    $hinhpath="../img/" .$img;
    if(is_file($hinhpath)){
        $image="<img src='".$hinhpath."' height='80'>";
    }else{
        $image="no image";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sửa san pham</h1>
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
        <p>Tên sản phẩm</p> <input type="text" name="name" value="<?=$name?>">
        <p>Ảnh sản phẩm</p> <input type="file" name="image">
        <?=$image?>
        <p>Giá sản phẩm</p> <input type="text" name="price" value="<?=$price?>">
        <p>Giá sale sản phẩm</p> <input type="text" name="price_sale" value="<?=$price_sale?>">
        <p>chi tiết sản phẩm</p> <input type="text" name="detail" value="<?=$detail?>">
        <p>Danh mục sản phẩm</p> 
        <select name="iddm" >
        <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    if($iddm==$id) $s="selected"; else $s="";
                    echo '<option value="'.$cate_id.'"'.$s.'>'.$cate_name.'</option>';

                }
            ?>
        </select>

            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="btn_update" value="Cập nhật">
            <a href="index.php?act=listsp"><input type="button" name="btn_insertds" value="DANH SÁCH"></a>

       
       

    </form>
    




</body>
</html>