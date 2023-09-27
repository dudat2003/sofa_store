<?php
        function insert_sanpham($image1,$image2,$image3,$namesp,$price,$price_sale,$detail,$description,$iddm, $idcl,$idsz)
        {
            $sql="insert into product(img_main,img_slide_show1,img_slide_show2,name,price,price_sale,detail,description,id_category,id_color,id_size) values('$image1','$image2','$image3','$namesp','$price','$price_sale','$detail','$description','$iddm','$idcl','$idsz')";
            pdo_execute($sql);
        }
        function list_sanpham_home(){
            $sql="select * from product limit 0,3";
            $listsanpham=pdo_query($sql);
            return $listsanpham;
        }
        function list_sanpham_home1(){
            $sql="select * from product limit 3,3";
            $listsanpham=pdo_query($sql);
            return $listsanpham;
        }
        function list_sanpham_home2(){
            $sql="select * from product limit 6,9";
            $listsanpham=pdo_query($sql);
            return $listsanpham;
        }
        function list_sanpham_detail(){
            $sql="select * from product limit 4";
            $listsanpham=pdo_query($sql);
            return $listsanpham;
        }

        function list_sanpham($kyw="",$iddm=0){
            $sql="select * from product where 1";
            if($kyw!=""){
                $sql.=" and name like '%".$kyw."%'";
            }
            if($iddm>0){
                $sql.=" and id_category ='".$iddm."'";
            }
            $listsanpham=pdo_query($sql);
            return $listsanpham;
        }

       

        function delete_sanpham($id){
            $sql="delete from product where id_product=".$id;
            pdo_execute($sql);
        }

        function load_ten_dm($iddm){
            if($iddm>0){
                $sql="select * from category where id_category=".$iddm;
                $dm=pdo_query_one($sql);
                extract($dm);
                return $name;
            }else{
                return "";
            }
            
        }

        function loadone_sanpham($id){
            $sql="select * from product where id_product=".$id;
            $sanpham=pdo_query_one($sql);
            return $sanpham;
        }

        function load_sanpham_cungloai($id,$iddm){
            $sql="select * from product where id_category=".$iddm." AND id_product=".$id;
            $sanpham=pdo_query_one($sql);
            return $sanpham;
        }
        function update_sanpham($id,$image1,$image2,$image3,$namesp,$price,$price_sale,$detail,$description,$iddm, $idcl,$idsz){
            if($image1!="")
                $sql="update product set img_main='".$image1."',img_slide_show1='".$image2."',img_slide_show2='".$image3."',name='".$namesp."',price_sale='".$price."',price='".$price_sale."',detail='".$detail."',description='".$description."',id_category='".$iddm."',id_color='".$idcl."',id_size='".$idsz."' where id_product=$id";
            else
                $sql="update product set img_main='".$image1."', img_slide_show1='".$image2."',img_slide_show2='".$image3."',name='".$namesp."',price_sale='".$price."',price='".$price_sale."',detail='".$detail."',description='".$description."',id_category='".$iddm."',id_color='".$idcl."',id_size='".$idsz."' where id_product=$id";

           
            pdo_execute($sql);
        }

?>