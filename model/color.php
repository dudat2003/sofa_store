<?php
    function insert_color($name){
        $sql="insert into color(name_color) values('$name')";
        pdo_execute($sql);
    }
    function list_color(){
        $sql="select * from color";
        $listmausac=pdo_query($sql);
        return $listmausac;
    }
    function delete_mausac($id){
        $sql="delete from color where id_color=".$id;
        pdo_execute($sql);
    }
    function loadone_mausac($id){
        $id_upd=$_GET['id'];

        $sql="select * from color where id_color=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_mausac($id,$name){
        $sql="update color set name_color='$name' where id_color=$id";
        pdo_execute($sql);
    }
?>