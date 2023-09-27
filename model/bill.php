<?php
 function list_bill(){
    $sql="select * from bill";
    $listbill=pdo_query($sql);
    return $listbill;
}
function delete_bill($id){
    $sql="delete from bill where id_bill=".$id;
    pdo_execute($sql);
}

?>