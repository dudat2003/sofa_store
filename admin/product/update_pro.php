<?php
    if(is_array( $sanpham)){
        extract( $sanpham);
    }
    $hinhpath1="../upload/".$img_main;
        if(is_file($hinhpath1)){
            $img_main="<img src='".$hinhpath1."' height='80'>";
        }else{
            $img_main="no img";
        }
    $hinhpath2="../upload/".$img_slide_show1;
        if(is_file($hinhpath2)){
            $img_slide_show1="<img src='".$hinhpath2."' height='80'>";
        }else{
            $img_slide_show1="no img";
        }
    $hinhpath3="../upload/".$img_slide_show2;
        if(is_file($hinhpath3)){
            $img_slide_show2="<img src='".$hinhpath3."' height='80'>";
        }else{
            $img_slide_show2="no img";
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
        <p>Ảnh chính sản phẩm</p> <input type="file" name="image1"><?=$img_main?>
        <p>Ảnh slide_show1 </p> <input type="file" name="image2"><?=$img_slide_show1?>
        <p>Ảnh slide_show2 </p> <input type="file" name="image3"><?=$img_slide_show2?>
        <p>Tên sản phẩm</p> <input type="text" name="name" value="<?=$name?>">
        <p>Giá sản phẩm</p> <input type="text" name="price" value="<?=$price?>">
        <p>Giá sale sản phẩm</p> <input type="text" name="price_sale" value="<?=$price_sale?>">
        <p>chi tiết sản phẩm</p> <input type="text" name="detail" value="<?=$detail?>">
        <p>miêu tả sản phẩm</p> <input type="text" name="description" value="<?=$description?>">

        <p>Danh mục sản phẩm</p> 
        <select name="iddm" >
        <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    if($iddm==$id) $s="selected"; else $s="";
                    echo '<option value="'.$id_category.'"'.$s.'>'.$name.'</option>';
                }
            ?>
        </select>

        <p>Màu sắc sản phẩm</p>
        <select name="idcl" id="">
            <?php
                foreach($listmausac as $mausac){
                    extract($mausac);
                    if($idcl==$id) $s="selected"; else $s="";
                    echo '<option value="'.$id_color.'">'.$name_color.'</option>';
                }
            ?>
        </select><br><br>

        <p>kích cỡ sản phẩm</p>
        <select name="idsz" id="">
            <?php
                foreach($listkichthuoc as $kichthuoc){
                    extract($kichthuoc);
                    if($idsz==$id) $s="selected"; else $s="";
                    echo '<option value="'.$id_size.'">'.$size.'</option>';
                }
            ?>
        </select>
            <input type="hidden" name="id" value="<?=$id_product?>">
            <input type="submit" name="btn_update" value="Cập nhật">
            <a href="index.php?act=listsp"><input type="button" name="btn_insertds" value="DANH SÁCH"></a>

       
       

    </form>
    




</body>
</html>