
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border_btn_button{
            background-color: black;
            width: 150px;
            text-align: center;
            padding: 10px;
            border-radius: 7px;
        }
        .btn_button{
            text-decoration: none;
            color: white;
        }
        .btn_button:hover{
            color: red;
        }
        .sua{
            background-color: gray;
            width: 40px;
            text-align: center;
            padding: 10px;
            border-radius: 7px;
        }
        .sua a{
            
            color: white;
            text-decoration: none;
        }
        .sua a:hover{
            color: black;
        }
        .them{
            background-color: gray;
            width: 200px;
            text-align: center;
            padding: 10px;
            border-radius: 7px;
        }
        .them a{
            
            color: white;
            text-decoration: none;
        }
        .them a:hover{
            color: black;
        }
    </style>
</head>
<body>
    <center>

    <h1>Product Management</h1>
    <form action="index.php?act=listsp" method="POST">
        <input type="text" name="kyw" >
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id_category.'">'.$name.'</option>';
                }
            ?>
        </select>

        <input type="submit" name="btn_search" value="search iddm">
    </form>
    <table border=1>
        <tr>
            <td>Mã sp</td>
            <td>Ảnh chính sp</td>
            <td>Ảnh slide show1</td>
            <td>Ảnh slide show2</td>
            <td>Tên sp</td>
            <td>Giá sp</td>
            <td>Giá sale sp</td>
            <td>Chi tiết sp</td>
            <td>Miêu tả sp</td>
            <td>mã danh mục</td>
            <td>mã màu sắc</td>
            <td>mã kích cỡ</td>
            <td>sửa</td>
            <td>xóa</td>
        </tr>
        <?php
            foreach($listsanpham as $sanpham){
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id_product;
                $xoasp="index.php?act=xoasp&id=".$id_product;
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
                echo '<tr>
                <th>'.$id_product.'</th>
                <th>'.$img_main.'</th>
                <th>'.$img_slide_show1.'</th>
                <th>'.$img_slide_show2.'</th>
                <th>'.$name.'</th>
                <th>'.$price.'</th>
                <th>'.$price_sale.'</th>
                <th>'.$detail.'</th>
                <th>'.$description.'</th>
                <th>'.$id_category.'</th>
                <th>'.$id_color.'</th>
                <th>'.$id_size.'</th>
                <th><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></th>
                </tr>';
            }
        ?>
    </table>
    <br>
    <div>
        <a href="index.php?act=addsp"><input type="button" value="nhập thêm"></a>
    </div>
        
    </center>
</body>
</html>


