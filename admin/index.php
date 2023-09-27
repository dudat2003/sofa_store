<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/color.php";
    include "../model/size.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    include "../model/bill.php";
    include "../model/thongke.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            //danh mục(Linh)
            case 'adddm':
                if(isset($_POST['btn_insert'])&&($_POST['btn_insert'])){
                    $name= $_POST['name'];
                    insert_danhmuc($name);
                    $thongbao = "them thanh cong";
                }
                
                include "category/trangthem_category.php";
                break;
            
            case 'listdm':
                $listdanhmuc=list_danhmuc();
                include "category/show_all_category.php";
                break;

                case 'xoadm':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_danhmuc($_GET['id']);
                    }
                    $listdanhmuc=list_danhmuc();
                    include "category/show_all_category.php";
                    break;

            case 'suadm':
                 if(isset($_GET['id'])&&($_GET['id']>0)){
                     $dm=loadone_danhmuc($_GET['id']);
                 }
                 include "category/update_category.php";
                 break;
                 case 'updatedm':
                    if(isset($_POST['btn_capnhat'])&&($_POST['btn_capnhat'])){
                        $name = $_POST['name'];
                        $id = $_POST['id'];
                        update_danhmuc($id,$name);
                        $thongbao="cap nhật thanh cong";
                    }
                    $sql="select * from category";
                    $listdanhmuc=pdo_query($sql);
                       include "category/show_all_category.php";
                       break;




                    //Color(Sơn)
                    case 'addcl':
                        if(isset($_POST['btn_insert'])&&($_POST['btn_insert'])){
                            $name= $_POST['name'];
                            insert_color($name);
                            $thongbao = "them thanh cong";
                        }
                        include "color/add_color.php";
                        break;

                        case 'listcl':
                            $listmausac=list_color();
                            include "color/list_color.php";
                            break;


                        case 'xoams':
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                                delete_mausac($_GET['id']);
                            }
                            $listmausac=list_color();
                            include "color/list_color.php";
                            break;
                        case 'suams':
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                                $dm=loadone_mausac($_GET['id']);
                            }
                            include "color/update_color.php";
                            break;
        
                        case 'updatems':
                            if(isset($_POST['btn_capnhat'])&&($_POST['btn_capnhat'])){
                                $name = $_POST['name'];
                                $id = $_POST['id'];
                                update_mausac($id,$name);
                                $thongbao="cap nhật thanh cong";
                            }
                            $sql="select * from color";
                            $listmausac=pdo_query($sql);
                               include "color/list_color.php";
                               break;

                //size(Sơn)
                case 'addsz':
                    if(isset($_POST['btn_insert'])&&($_POST['btn_insert'])){
                        $name= $_POST['name'];
                        insert_size($name);
                        $thongbao = "them thanh cong";
                    }
                    include "size/add_size.php";
                    break;
                case 'listsz':
                    $listkichthuoc=list_size();
                    include "size/list_size.php";
                    break;
                case 'xoasz':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_kichthuoc($_GET['id']);
                    }
                    $listkichthuoc=list_size();
                    include "size/list_size.php";
                    break;
                case 'suasz':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $dm=loadone_kichthuoc($_GET['id']);
                    }
                    include "size/update_size.php";
                    break;

                case 'updatesz':
                    if(isset($_POST['btn_capnhat'])&&($_POST['btn_capnhat'])){
                        $name = $_POST['name'];
                        $id = $_POST['id'];
                        update_kichthuoc($id,$name);
                        $thongbao="cap nhật thanh cong";
                    }
                    $sql="select * from size";
                    $listkichthuoc=pdo_query($sql);
                       include "size/list_size.php";
                       break;


                    //Hùng
            case 'addsp':
                if(isset($_POST['btn_insert'])&&($_POST['btn_insert'])){
                    $namesp = $_POST['name'];
                    $image1=$_FILES['image1']['name'];
                    $target_dir= "../upload/";
                    $target_file = $target_dir . basename($_FILES['image1']['name']);
                    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    
                    $image2=$_FILES['image2']['name'];
                    $target_dir1= "../upload/";
                    $target_file1 = $target_dir1 . basename($_FILES['image2']['name']);
                    if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file1)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }

                    $image3=$_FILES['image3']['name'];
                    $target_dir2= "../upload/";
                    $target_file2 = $target_dir2 . basename($_FILES['image3']['name']);
                    if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file2)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }

                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $detail = $_POST['detail'];
                    $description=$_POST['description'];
                    $iddm = $_POST['iddm'];
                    $idcl=$_POST['idcl'];
                    $idsz=$_POST['idsz'];

                    insert_sanpham($image1,$image2,$image3,$namesp,$price,$price_sale,$detail,$description,$iddm, $idcl,$idsz);                    $thongbao="Them thanh cong";
                }
                $listdanhmuc=list_danhmuc();
                $listmausac=list_color();
                $listkichthuoc=list_size();

                include "product/trangthem.php";
                break;
            case 'listsp':
                if(isset($_POST['btn_search'])&&($_POST['btn_search'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];

                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=list_danhmuc();
                $listmausac=list_color();
                $listkichthuoc=list_size();
                $listsanpham=list_sanpham($kyw,$iddm);
                include "product/show_all.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $sql="select * from categlory";
                $listsanpham=list_sanpham();
                include "product/show_all.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=list_danhmuc();
                $listmausac=list_color();
                $listkichthuoc=list_size();
                include "product/update_pro.php";
                break;
            case 'updatesp':
                if(isset($_POST['btn_update'])&&($_POST['btn_update'])){
                    $id=$_POST['id'];
                    $namesp = $_POST['name'];
                    $image1=$_FILES['image1']['name'];
                    $target_dir= "../upload/";
                    $target_file = $target_dir . basename($_FILES['image1']['name']);
                    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    
                    $image2=$_FILES['image2']['name'];
                    $target_dir1= "../upload/";
                    $target_file1 = $target_dir1 . basename($_FILES['image2']['name']);
                    if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file1)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }

                    $image3=$_FILES['image3']['name'];
                    $target_dir2= "../upload/";
                    $target_file2 = $target_dir2 . basename($_FILES['image3']['name']);
                    if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file2)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }

                    $price = $_POST['price'];
                    $price_sale = $_POST['price_sale'];
                    $detail = $_POST['detail'];
                    $description=$_POST['description'];
                    $iddm = $_POST['iddm'];
                    $idcl=$_POST['idcl'];
                    $idsz=$_POST['idsz'];
                    update_sanpham($id,$image1,$image2,$image3,$namesp,$price,$price_sale,$detail,$description,$iddm, $idcl,$idsz);                    
                    $thongbao="Them thanh cong";
                     
                 }
                 $listsanpham=list_sanpham();
                 $listdanhmuc=list_danhmuc();
                 $listmausac=list_color();
                 $listkichthuoc=list_size();
                    include "product/show_all.php";
                    break;


                    //comment(Đạt)
                case 'addcm':
                    $listbinhluan=list_binhluan(0);
                    include "comment/list.php";
                    break;
                case 'xoabl':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan=list_binhluan();
                    include "comment/list.php";
                    break;


                    //Hùng
                case 'addbill':
                    $listbill=list_bill();
                    include "bill/show_all_bill.php";
                    break;

                case 'xoabill':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_bill($_GET['id']);
                    }
                    $listbill=list_bill();
                    include "bill/show_all_bill.php";
                    break;
                
                case 'thongke':
                    $listtk=list_thongke();
                    include "thongke/list.php";
                    break;


            default:
            include "home.php";
            break;
            
        }
    }
    else{
        include "home.php";
    }

    
    include "footer.php";
?>

   
