<?php
    function list_thongke(){
        $sql="select category.id_category as madm,category.name as tendm, count(product.id_product) as countsp, min(product.price) as minprice, max(product.price) as maxprice, avg(product.price) as avgprice from category left join product on product.id_category=category.id_category group by product.id_category order by category.id_category desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }

?>