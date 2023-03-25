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
        <p>Tên sản phẩm</p> <input type="text" name="name">
        <p>Ảnh sản phẩm</p> <input type="file" name="image">
        <p>Giá sản phẩm</p> <input type="text" name="price">
        <p>Giá sale sản phẩm</p> <input type="text" name="price_sale">
        <p>chi tiết sản phẩm</p> <input type="text" name="detail">
        <p>Danh mục sản phẩm</p> 
        <select name="iddm" id="">
            <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$cate_id.'">'.$cate_name.'</option>';
                }
            ?>
        </select>
        <br>
        <input type="submit" name="btn_insert" value="them san pham">
        <a href="index.php?act=listsp"><input type="button" name="btn_insertds" value="DANH SÁCH"></a>

       

    </form>
    




</body>
</html>