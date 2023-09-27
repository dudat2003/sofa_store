<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Them màu sắc</h1>
    <form action="index.php?act=addcl" method="POST" enctype="multipart/form-data">
        <p>Tên màu sắc</p> <input type="text" name="name"><br><br>
        <input type="submit" name="btn_insert" value="THÊM MÀU SẮC">
        <a href="index.php?act=listcl"><input type="button" name="btn_insertds" value="DANH SÁCH"></a>

        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>

    </form>
</body>
</html>