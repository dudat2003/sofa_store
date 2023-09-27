
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
    <div class="container">
        <div class="box_thanks">
            <div class="camon"><h5>CẢM ƠN</h5></div>
            <center><div class="contend_camon"><h6>Cảm ơn quý khách đã đặt hàng!</h6></div></center>
        </div>
        <div class="box_mdh">
            <div class="mdh"><h5>MÃ ĐƠN HÀNG</h5></div>
            <?php
            include_once "dp.php";
            $sql="select * from bill order by id_bill desc limit 1";
            $objPro=$conn->query($sql);
            foreach($objPro as $row){
            ?>
                <div>
                <center><div class="contend_mdh"><h6>MDH_00<?php echo $row['id_bill'] ?></h6></div></center>
                </div>
                <?php
                }

            ?>
        </div>

        <div class="box_information_user">
            <div class="information_user"><h5>THÔNG TIN ĐẶT HÀNG</h5></div>

            <div class="information_user1">
                <div class="information_user1_2">
                    <h6>Người đặt hàng:</h6>
                    <h6>Địa chỉ:</h6>
                    <h6>Email:</h6>
                    <h6>Điện thoại:</h6>
                    <h6>Tên sản phẩm:</h6>
                    <h6>Giá sản phẩm:</h6>
                    <h6>Số lượng sản phẩm:</h6>
                    <h6>Tổng tiền sản phẩm:</h6>
                    <h6>Trạng thái:</h6>
                </div>
                <?php
            include_once "dp.php";
            $sql="select * from bill order by id_bill desc limit 1";
            $objPro=$conn->query($sql);
            foreach($objPro as $row){
            ?>
                <div>
                    <h6><?php echo $row['user'] ?></h6>
                    <h6><?php echo $row['address'] ?></h6>
                    <h6><?php echo $row['email'] ?></h6>
                    <h6><?php echo $row['tel'] ?></h6>
                    <h6><?php echo $row['name_sp'] ?></h6>
                    <h6><?php echo $row['price_sp'] ?></h6>
                    <h6><?php echo $row['soluong_sp'] ?></h6>
                    <h6><?php echo $row['tongtiensp'] ?></h6>
                    <h6>Đang xử lý đơn hàng <i class="fa-solid fa-car-side"></i></h6>
                </div>
                <?php
                }
               

            ?>
            
            </div>
           

        </div>
        <div class="box_pttt">
            <div class="pttt"><h5>PHƯƠNG THỨC THANH TOÁN</h5></div>
            <center><div class="contend_pttt"><h6>Trả tiền khi nhận hàng</h6></div></center>
        </div>
        
    </table>
        </div>
    </div>
</body>
<style>

.box_ttgh{
    border: 0.5px black solid;
    border-radius: 10px;
    margin-bottom: 40px;
}
.ttgh{
    background-color: #c5c4c4;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    padding: 5px;
}
.contend_pttt{
    padding: 15px;
}
</style>
</html>