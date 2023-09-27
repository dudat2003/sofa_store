<?php
    function insert_size($name){
        $sql="insert into size(size) values('$name')";
        pdo_execute($sql);
    }
    function list_size(){
        $sql="select * from size";
        $listkichthuoc=pdo_query($sql);
        return $listkichthuoc;
    }
    function delete_kichthuoc($id){
        $sql="delete from size where id_size=".$id;
        pdo_execute($sql);
    }
    function loadone_kichthuoc($id){
        $id_upd=$_GET['id'];

        $sql="select * from size where id_size=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_kichthuoc($id,$name){
        $sql="update size set size='$name' where id_size=$id";
        pdo_execute($sql);
    }
?>