<?php
    function insert_binhluan($name,$email,$contend,$date){
    $sql="insert into comment(name,email,contend,date) values('$name','$email','$contend','$date')";
    pdo_execute($sql);
}
function list_binhluan(){
    $sql="select * from comment";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql="delete from comment where id_comment=".$id;
    pdo_execute($sql);
}
?>