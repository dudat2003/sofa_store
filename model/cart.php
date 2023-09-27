<?php
    function viewcart($del){
        global $image;
        $tong=0;
        $i=0;
        if($del==1){
            $xoasp_th='<th>Thao tác</th>';
            $xoasp_td2='<td></td>';
        }else{
            $xoasp_th='';
            $xoasp_td2='';
        }
        echo '<tr class="tr1">
        <th>Tên sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
       '.$xoasp_th.'
    </tr>';
        foreach ($_SESSION['mycart'] as $cart) {
            $tong=$tong+($cart['price']*$cart['soluong']);
            if($del==1){
                $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$cart['id'].'"><input type="button" value="xóa"></a></td>';
            }else{
                $xoasp_td='';
            }
            
            echo '
            
            <tr class="tr2">
               
                <th>'.$cart['name'].'</th>
                <th>$'.$cart['price'].'</th>
                <th>'.$cart['soluong'].'</th>
                <th>$'. ($cart['price']*$cart['soluong']) .'</th>
               '.$xoasp_td.'
            </tr>';
            $i+=1;
        }
        echo '<tr class="tr2">
        <th colspan="3">Tổng giá trị</th>
        <th>"$'. $tong.'"</th>
        '.$xoasp_td2.'
        
    </tr> ';
    }


    function viewcart_name(){
        $tong=0;
        $i=0;
        
        foreach ($_SESSION['mycart'] as $cart) {
            echo '
            <strong>
            <tr class="tr2" style="margin-right: 10px;">
                <th>Tên sản phẩm: </th><br>
                <th>Đơn giá:</th><br>
                <th>Số lượng:</th><br>
                <th>Thành tiền:</th><br>
            </tr>';
            $i+=1;
        }
        echo '<tr class="tr2">
        <th colspan="3">Tổng giá trị</th>
    </tr> ';
    }
    function viewcart_name1(){
        $tong=0;
        $i=0;
        
        foreach ($_SESSION['mycart'] as $cart) {
            $tong=$tong+($cart['price']*$cart['soluong']);
            echo '
            <strong>
            <tr class="tr2" style="margin-right: 10px;">
                <th>'.$cart['name'].'</th><br>
                <th>$'.$cart['price'].'</th><br>
                <th>'.$cart['soluong'].'</th><br>
                <th>$'. ($cart['price']*$cart['soluong']) .'</th><br>
            </tr>';
            $i+=1;
        }
        echo '<tr class="tr2">
        <th>"$'. $tong.'"</th></strong>
    </tr> ';
    }


    function bill_chi_tet($listbill){
        global $image;
        $tong=0;
        $i=0;
        
        echo '<tr class="tr1">
        <th>Tên sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
       
    </tr>';
        foreach ($listbill as $cart) {
            $tong=$tong+($cart['price']*$cart['soluong']);
           
            echo '
            
            <tr class="tr2">
               
                <th>'.$cart['name'].'</th>
                <th>$'.$cart['price'].'</th>
                <th>'.$cart['soluong'].'</th>
                <th>$'. ($cart['price']*$cart['soluong']) .'</th>
               '.$xoasp_td.'
            </tr>';
            $i+=1;
        }
        echo '<tr class="tr2">
        <th colspan="3">Tổng giá trị</th>
        <th>"$'. $tong.'"</th>
        '.$xoasp_td2.'
        
    </tr> ';
    }


    function tongdonhang(){
        $tong=0;
        foreach ($_SESSION['mycart'] as $cart) {
            $tong=$tong+($cart['price']*$cart['soluong']);
        }
        return $tong;
    }

    function insert_bill($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
        $sql="insert into bill(bill_name,bill_address,bill_tel,bill_email,bill_pttt,ngaydathang,total) values('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($idpro,$name,$price,$soluong,$thanhtien,$idbill){
        $sql="insert into cart(idpro,name,price,soluong,thanhtien,idbill) values('$idpro','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }


    function loadone_bill($id){
        $sql="select * from bill where id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }
?>
