<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .link_all{
            display:flex;
            justify-content: space-between;
        }
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
        table{
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Danh sách loại hàng</h1>
    <table border=1>
        <tr>
            <th>Mã màu sắc</th>
            <th>Tên màu sắc</th>
        </tr>
        <?php
            foreach($listmausac as $mausac){
                extract($mausac);
                $suams="index.php?act=suams&id=".$id_color;
                $xoams="index.php?act=xoams&id=".$id_color;
                echo '<tr>
                <th>'.$id_color.'</th>
                <th>'.$name_color.'</th>
                <th><a href="'.$suams.'"><input type="button" value="Sửa"></a> <a href="'.$xoams.'"><input type="button" value="Xóa"></a></th>
                </tr>';
            }
        ?>
    </table>
    <br>
    <div>
        <a href="index.php?act=adddm"><input type="button" value="nhập thêm"></a>
    </div>
</body>
</html>