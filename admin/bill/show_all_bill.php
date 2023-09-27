<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Quản lí hóa đơn</h3>
    <table border=1 >
        <tr>
            <th>id_bill</th>
            <th>Tên khách hàng</th>
            <th>địa chỉ</th>
            <th>email</th>
            <th>số điện thoại</th>
            <th>Tên sản phẩm</th>
            <th>giá sản phẩm</th>
            <th>số lượng sản phẩm</th>
            <th>tổng tiền bill</th>
        </tr>
        <?php
            foreach ($listbill as $bill){
                extract($bill);
                $suabill="index.php?act=suabill&id=".$id_bill;
                $xoabill="index.php?act=xoabill&id=".$id_bill;
                echo '
                <tr>
                <th>'.$id_bill.'</th>
                <th>'.$user.'</th>
                <th>'.$address.'</th>
                <th>'.$email.'</th>
                <th>'.$tel.'</th>
                <th>'.$name_sp.'</th>
                <th>'.$price_sp.'</th>
                <th>'.$soluong_sp.'</th>
                <th>'.$tongtiensp.'</th>
                <th><a href="'.$suabill.'"><input type="button" value="Sửa"></a> <a href="'.$xoabill.'"><input type="button" value="Xóa"></a></th>

            </tr>
                ';
            }
        ?>

        <style>
            table{
                width: 100%;
            }
        </style>
    </table>
</body>
</html>