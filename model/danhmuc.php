<?php
    function insert_danhmuc($name){
        $sql="insert into category(name) values('$name')";
        pdo_execute($sql);
    }
    function list_danhmuc(){
        $sql="select * from category";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function delete_danhmuc($id){
        $sql="delete from category where id_category=".$id;
        pdo_execute($sql);
    }
    function loadone_danhmuc($id){
        $id_upd=$_GET['id'];

        $sql="select * from category where id_category=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$name){
        $sql="update category set name='$name' where id_category=$id";
        pdo_execute($sql);
    }
?>