<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/b700018786.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="view/style.css">
<link rel="stylesheet" href="view/style_blog.css">
</head>
<body>
        <!-- </div> -->
    
    <div class="container">
        <div class="container">
            <?php
                extract($onesp);
                $hinh1=$image.$img_main;
                $hinh2=$image.$img_slide_show1;
                $hinh3=$image.$img_slide_show2;
                echo ' <p class="name_detail_product container">shope/'.$name.'</p>
                <div class="content_detail">
                    <div class="content_detail_first">
                        
                        <div class="content_detail_first2">
                            <body>
                                <div class="slide-container">
                                    <div class="slide-item">
                                        <img src="'.$hinh1.'" alt="">
                                    </div>
                                    <div class="slide-item">
                                        <img src="'.$hinh2.'" alt="">
                                    </div>
                                    <div class="slide-item">
                                        <img src="'.$hinh3.'" alt="">
                                    </div>';
                ?>
           
                                <div class="prev" onclick="changeSlide('prev')">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </div>
                                <div class="next" onclick="changeSlide('next')">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                
                            </div>
                            
                    </div>
                </div>
                <div class="content_detail_second">
                    <?php
                        extract($onesp);
                        echo '<p class="content_detail_second_text1">'.$name.'</p>
                        <div class="img_star_product">
                            <a href="#">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            </a>
                        </div>
                        <div class="content_detail_second_sale">
                            <a href="">$'.$price.'</a><label><p>$'.$price_sale.'</p></label>
                        </div>
                        <div class="content_detail_second_detail1">
                            <p>'.$detail.'</p>
                        </div>
    
                        <div class="content_detail_second_button">
                            <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                            <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="'.$id_product.'">
                                    <input type="hidden" name="name" value="'.$name.'">
                                    <input type="hidden" name="price" value="'.$price.'">
                                    <input class="cart" type="submit" name="addtocart" value="Add to cart">

                                </form>
                            
                        </div>
                        <div class="content_detail_second_heart">
                            <img src="view/img/heart.png" alt="">
                            <p>Add to wishlist</p>
                        </div>';
                    ?>
                    <p>Màu sắc sản phẩm</p>
                    <select name="idcl" id="">
                    <?php
                        foreach($listmausac as $mausac){
                        extract($mausac);
                        echo '<option value="'.$id_color.'">'.$name_color.'</option>';
                    }
                    ?>
                    </select><br><br>
                    <p>kích cỡ sản phẩm</p>
                    <select name="idsz" id="">
                        <?php
                            foreach($listkichthuoc as $kichthuoc){
                                extract($kichthuoc);
                                echo '<option value="'.$id_size.'">'.$size.'</option>';
                            }
                        ?>
                    </select><br><br>
             
                  

                        <?php
                            extract($onesp);
                            echo ' <div class="tooltip_all">
                            <div class="tooltip1">
                                <p class="tooltip1_text"> Description </p><br>
                                <label for=""><span class="tooltiptext1">'.$description.'</span></label>
                            </div>
                            <div class="tooltip2">
                                <p class="tooltip2_text"> Additional informatiom </p><br>
                                <span class="tooltiptext2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</span>
                            </div>
                            <div class="tooltip3">
                                <p class="tooltip3_text"> Preview </p><br>
                                <span class="tooltiptext3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</span>
                            </div>
                        </div>
                        </div>';
                        ?>
                       
                    
                    
                <!--  -->
                
                </div>


            <!-- comment -->
            <div class="">
                <iframe src="view/binhluanform.php"  frameborder="0" width="100%" height="800px"></iframe>
            </div>
            
            <div>
                <p class="relatedproducts">Related products</p>
            </div>
            <div class="relatedproducts_img">
                <?php
                     foreach ($spdt as $dt) {
                        extract($dt);
                        $linksp="index.php?act=sanphamct&idsp=".$id_product;
                        $hinh=$image.$img_main;
                        echo '<div>
                        <a href="'. $linksp.'"><img src="'.$hinh.'" alt=""></a>
                        <a class="name_product" href="'. $linksp.'"><p >'.$name.'</p></a>
                        <center><div class="img_star_product1">
                            <a href="#">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            <img src="view/img/Star 7.png" alt="">
                            </a>
                        </div></center>
                        <p class="price_product">'.$price.'</p>
                        <div>
                        <center>
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id_product.'">
                                <input type="hidden" name="id" value="'.$name.'">
                                <input type="hidden" name="id" value="'.$hinh.'">
                                <input class="cart1" type="submit" name="addtocart" value="Add to cart">
                            </form>
                        </center>
                        </div>
                    </div>';
                    }
                ?>
               
            </div>
        </div>
    </div>
    
</div>

</div>
</div>
</body>
<script>
    let slides = document.querySelectorAll(".slide-item");
    slides.forEach((item, index) => {
        console.log(item);
        item.style.transform = `translateX(${index * 100}%)`
    })
    let currentSlide = 0;
    let maxSlide = slides.length - 1;
    function changeSlide(type) {
        if (type === "next") {
            if (currentSlide === maxSlide) {
                currentSlide = 0;
            } else {
                currentSlide++;
            }

            slides.forEach((item, index) => {
                item.style.transform = `translateX(${(index - currentSlide) * 100}%)`
            })
        } else {
            if (currentSlide === 0) {
                currentSlide = maxSlide;
            } else {
                currentSlide--;
            }
            slides.forEach((item, index) => {
                item.style.transform = `translateX(${(index - currentSlide) * 100}%)`
            })

        }
    }
</script>
</html>