<div class="container">     
        <div class="content-shop container">
            <div class="content-shop_left container">
                <div class="content-shop_left_text1 container">
                    <p><?=$tendm?></p>
                    <nav class="menu_popularity">
                        <ul>
                            <li>
                                <a href="#"><p>Sort by popularity <i class="fa-solid fa-check"></i> </p></a>
                                <ul>
                                    <li><a href="#">Modern sofa</a></li>
                                    <li><a href="#">Modern chair</a></li>
                                    <li><a href="#">Modern table</a></li>
                                    <li><a href="#">Modern lamp</a></li>
                                    <li><a href="#">Modern sofa</a></li>
                                    <li><a href="#">Modern sofa</a></li>

                                </ul>
                            </li>
                            
                        </ul>
                    </nav>
                    
                </div>

                <div class="content-shop_left_product1">
                    <?php
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id_product;
                            $hinh=$image.$img_main;
                            echo '<div>
                            <a href="'. $linksp.'"><img src="'.$hinh.'" alt=""></a>
                            <a class="name_product" href="'. $linksp.'"><p >'.$name.'</p></a>
                            <center><div class="img_star_product">
                                <a href="#">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                <img src="view/img/Star 7.png" alt="">
                                </a>
                            </div></center>
                            <p class="price_product">'.$price.'</p>
                        </div>';
                        }
                    ?>
                </div>

                   
                    
                        

                <div class="number_page">
                    <div class="number">
                        <a href=""><p>1</p></a>
                        <a href=""><p>2</p></a>
                        <a href=""><p>3</p></a>
                        <a href=""><p>4</p></a>
                        <a href=""><p>5</p></a>
                        <a href=""><p>6</p></a>
                        <a href=""><p>7</p></a>
                        <a href=""><p>8</p></a>
                        <a href=""><p>></p></a>
                    </div>
                    <p>view all</p>
                </div>
                <style>
                    
                </style>
            </div>
            <div class="content-shop_right">
                <input class="search1" type="text" placeholder="Search...">
                <div class="content-shop_right_text">
                <a class="content-shop_right_text1_first" href=""><p>Category</p></a>
                    <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm="index.php?act=sanpham&iddm=".$id_category;
                            echo ' <a class="content-shop_right_text1" href="'.$linkdm.'"><p>'.$name.'</p></a>';
                            # code...
                        }
                    ?>



                    <a class="content-shop_right_text1_first" href=""><p>Color</p></a>
                    <?php
                        foreach ($dscl as $cl) {
                            extract($cl);
                            $linkcl="index.php?act=sanpham&idcl=".$id_color;
                            echo '<a class="content-shop_right_text1" href="'.$linkcl.'"><p>'.$name_color.'</p></a>';
                            # code...
                        }
                    ?>
                   
                </div>
                <div class="slidecontainer">
                    <input  type="range" min="1" max="800" value="50" class="slider" id="myRange">
                    <div class="slidecontainer_all">
                        <p>Price:$ <span id="demo"></span></p>
                        <button class="button_filter">Filter</button>
                        <style>
                            .slidecontainer_all{
                                margin-bottom: 40px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>


    