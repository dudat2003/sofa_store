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
    <table border=1>
        <tr>
            <th>Mã bình luận</th>
            <th>Tên Người dùng</th>
            <th>Email người dùng</th>
            <th>Nội dung bình luận</th>
            <th>ngày bình luận</th>
        </tr>
        <?php
            foreach($listbinhluan as $binhluan){
                extract($binhluan);
                $xoabl="index.php?act=xoabl&id=".$id_comment;
                echo '<tr>
                <th>'.$id_comment.'</th>
                <th>'.$name.'</th>
                <th>'.$email.'</th>
                <th>'.$contend.'</th>
                <th>'.$date.'</th>
                <th> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></th>
                </tr>';
            }
        ?>
    </table>
    <br>
   
</body>
</html>