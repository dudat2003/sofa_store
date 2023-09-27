
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b700018786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Cart</title>
</head>
<body>
    <div class="container">
    <center>
    <h2>GIỎ HÀNG</h2>
    <table class="tb1" border="1">
        
        <?php
           viewcart(1);
        ?>

        <!-- <tr class="tr2">
            <th>1</th>
            <th><img src="../upload/Rectangle 26.png" alt="" height="80px"></th>
            <th>sofa1</th>
            <th>$200</th>
            <th>1</th>
            <th>$200</th>
            <th><input type="button" value="xóa"></th>
        </tr> -->
    </table>
    <a href="index.php?act=bill"><input class="cart2" type="button" name="" id="" value="Tiếp tục đặt hàng"></a>
    </center>
</div>
</body>
<style>
    .tr1 th{
        background-color:white ;
        padding: 10px;  
        margin-bottom:20px;
        margin-top:20px;
    }

</style>
</html>