<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm san pham</h1>
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
        <!-- mã sản phẩm -->
        <input type="hidden" name="masp" id="">
        <p>Tên sản phẩm</p> <input type="text" name="name"><br><br>
        <p>Ảnh chính sản phẩm</p> <input type="file" name="image1">
        <p>Ảnh slide1 sản phẩm</p> <input type="file" name="image2">
        <p>Ảnh slide2 sản phẩm</p> <input type="file" name="image3"><br><br>
        <p>Giá sản phẩm</p> <input type="text" name="price">
        <p>Giá sale sản phẩm</p> <input type="text" name="price_sale">
        <p>chi tiết sản phẩm</p> <input type="text" name="detail">
        <P>Miêu tả sản phẩm</P> <input type="text" name="description"><br><br>
        <p>Danh mục sản phẩm</p> 
        <select name="iddm" id="">
            <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id_category.'">'.$name.'</option>';
                }
            ?>
        </select><br><br>
        <p>Màu sắc sản phẩm</p>
        <select name="idcl" id="">
            <?php
                foreach($listmausac as $mausac){
                    extract($mausac);
                    echo '<option value="'.$id_color.'">'.$name_color.'</option>';
                }
            ?>
        </select><br><br>
        <p>kích cỡ sản phẩm</p>
        <select name="idsz" id="">
            <?php
                foreach($listkichthuoc as $kichthuoc){
                    extract($kichthuoc);
                    echo '<option value="'.$id_size.'">'.$size.'</option>';
                }
            ?>
        </select>
        <br>
        <br>
        <input type="submit" name="btn_insert" value="them san pham">
        <a href="index.php?act=listsp"><input type="button" name="btn_insertds" value="DANH SÁCH"></a>

       

    </form>
    




</body>
</html>