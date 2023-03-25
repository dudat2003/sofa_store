<?php
  

    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                include "category/trangthem_category.php";
            break;
            case 'addsp':
                include "product/trangthem.php";
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

   
