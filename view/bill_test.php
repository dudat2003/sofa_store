
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b700018786.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="index.php?act=billcomfirm" method="POST">
            <table class="tb1">
                <tr>
                    <td>Người đặt hàng:</td>
                    <td><input type="text" name="bill_user"></td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="bill_address"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="bill_email"></td>
                </tr>
                <tr>
                    <td>Điện thoại:</td>
                    <td><input type="text" name="bill_tel" ></td>
                </tr>
            </table>
            <input type="submit" name="dongydathang" value="Đồng ý đặt hàng">

           
        </form>
       
       
</body>
</html> -->


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
    <title>Document</title>
</head>
<body>
    <h1>Them danh mục</h1>
    <form action="index.php?act=billcomfirm" method="POST" enctype="multipart/form-data">
        <p>Người đặt hàng:</p> <input type="text" name="bill_user">
        <p>Địa chỉ:</p> <input type="text" name="bill_address">
        <p>email:</p> <input type="text" name="bill_email">
        <p>số điện thoại:</p> <input type="text" name="bill_tel">

        <input type="submit" name="btn_insert" value="them danh mục">
        
        <?php
    include_once "dp.php";
    if(isset($_POST['btn_insert'])){
        $user = $_POST['bill_user'];
        $address = $_POST['bill_address'];
        $email = $_POST['bill_email'];
        $tel = $_POST['bill_tel'];

        $sql_insert="insert into bill values(null,'$user','$address','$email','$tel')";
        $objInsert=$conn->prepare($sql_insert);
        if($objInsert->execute()){
            echo"Đặt hàng thành công";
        }
        else{
            echo"thất bại";
        }
    }
   
        ?>
    </form>
    <div>
            <div>
                <p>Phương thức thanh toán:</p>
            </div>
            <div>
                <table>
                    <tr>
                        <td><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" value="2" name="pttt">Thanh toán online</td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <center>
    <h2>GIỎ HÀNG</h2>
    <table class="tb1" border="1">
        <?php
            viewcart(0);
        ?>

    </table>
    <a href="index.php?act=billcomfirm"><input class="cart2" type="submit" name="dongydathang" value="Xem đơn hàng của tôi"></a>

</body>
</html>