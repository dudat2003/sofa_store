
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
        <select name="iddm" >
        <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$cate_id.'">'.$cate_name.'</option>';
                }
            ?>
        </select>
        <input type="submit" name="btn_search" value="search iddm">
    </form>
    <table border=1>
        <tr>
            <td>Mã sp</td>
            <td>Ảnh sp</td>
            <td>Tên sp</td>
            <td>Giá sp</td>
            <td>Giá sale sp</td>
            <td>Chi tiết sp</td>
            <td>mã danh mục</td>
            <td>sửa</td>
            <td>xóa</td>
        </tr>
        <?php
            foreach($listsanpham as $sanpham){
                extract($sanpham);
                $suasp="index.php?act=suasp&id=".$id_pro;
                $xoasp="index.php?act=xoasp&id=".$id_pro;
                echo '<tr>
                <th>'.$id_pro.'</th>
                <th>'.$img.'</th>
                <th>'.$name.'</th>
                <th>'.$price_sale.'</th>
                <th>'.$price.'</th>
                <th>'.$detail.'</th>
                <th>'.$cate_id.'</th>
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


