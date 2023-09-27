<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Them kích cỡ</h1>
    <form action="index.php?act=addsz" method="POST" enctype="multipart/form-data">
        <p>Dài  x Rộng</p> <input type="text" name="name"><br><br>
        <input type="submit" name="btn_insert" value="THÊM KÍCH THƯỚC">
        <a href="index.php?act=listsz"><input type="button" name="btn_insertds" value="DANH SÁCH"></a>

        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>

    </form>
</body>
</html>