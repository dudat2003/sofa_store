<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/color.php";
    include "model/size.php";
    include "model/cart.php";
    include "global.php";
    include "./view/header.php";
    include "model/danhmuc.php";


    if(!isset( $_SESSION['mycart'])){
        $_SESSION['mycart']=[];
    }
     
   

    $spnew=list_sanpham_home();
    $spnew1=list_sanpham_home1();
    $spnew2=list_sanpham_home2();
    $dsdm=list_danhmuc();
    $dscl=list_color();
    $spdt=list_sanpham_detail();
    $spsz=list_size();


    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                   
                }else{
                    $iddm=0;
                }
                $dssp=list_sanpham($kyw,$iddm);
                $tendm=load_ten_dm($iddm);
                include "view/dmsanpham.php";
                break;


            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $listmausac=list_color();
                    $listkichthuoc=list_size();
                    $onesp=loadone_sanpham($id);
                    include "view/detail.php";
                }else{
                    include "./view/home.php";
                }
              
                break;

            case 'trangchu':
                include "view/home_main.php";
                break;
            
            case 'gioithieu':
                include "view/about_us.php";
                break;

            case 'nhatki':
                include "view/blog.php";
                break;

            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    // unset($_SESSION['mycart']);
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    // $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    // $ttien=$soluong * $price;
                    $spadd=['id'=>$id,'name'=>$name,'price'=>$price,'soluong'=>$soluong];
                    // array_push( $_SESSION['mycart'],$spadd);
                    if (isset($_SESSION['mycart'])) {
                        if (array_key_exists($id, $_SESSION['mycart'])) {
                            $_SESSION['mycart'][$id]['soluong'] +=1;
                        } else {
                            $_SESSION['mycart'][$id] = $spadd;
                        }
                    } else {
                        $_SESSION['mycart'][$id] = $spadd;
                    }
                   
                }

                include "view/viewcart.php";
                break;

                case 'delcart':
                    if(isset($_GET['idcart'])){
                        $id_cart = $_GET['idcart'];
                        unset($_SESSION['mycart'][$id_cart]);
                    }
                    header('Location: index.php?act=addtocart');
                    break;
                
                

                case 'bill':
                    include "view/bill.php";
                    break;

                case 'billcomfirm':
                  
                   

                    include "view/billcomfirm.php";
                    break;

            
            default:
                # code...
                break;
        }
    }else{
        include "./view/home.php";
    }
    include "./view/footer.php";
?>