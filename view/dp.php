<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=da1;charset=utf8","root",""); 

    }catch(\Throwable $th){
        echo "lỗi kết nối";
    }
?>