<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About_us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/b700018786.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="view/style1.css">
<link rel="stylesheet" href="view/style_blog.css">
</head>
<body>
    

    <div class="container">
        <div class="banner_about_us container">
            <img src="view/img/imgbn_about_us.png" alt="">
            <center><p class="banner_about_us_text">About us</p></center>
        </div>
    </div>
    <div class="container icon_advantages">
        <div>
            <div class="icon_advantages_content1">
                <img src="view/img/icon_clock.png" alt="">
                <p style="font-weight:600 ; font-size:30px ;">Shope online</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat dolor odio odio </p>
        </div>

        <div>
            <div class="icon_advantages_content2">
                <img src="view/img/icon_beg.png" alt="">
                <p style="font-weight:600 ; font-size:30px ;">Free shipping</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat dolor odio odio </p>
        </div>

        <div>
            <div class="icon_advantages_content3">
                <img src="view/img/icon_card.png" alt="">
                <p style="font-weight:600 ; font-size:30px ;">Return policy</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat dolor odio odio </p>
        </div>

        <div>
            <div class="icon_advantages_content4">
                <img src="view/img/icon_coin.png" alt="">
                <p style="font-weight:600 ; font-size:30px ;">PAYMENT</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat dolor odio odio </p>
        </div>
    </div>
    <div class="banner2_about_us container">
        <img src="view/img/imgbn2_about_us.png" alt="">
    </div>
    <div class="container">
        <div class="detail_about_us">
            <div class="detail_about_us1">
                <p class="detail_about_us1_text1">Functionality <br> meets perfection</p>
                <p class="detail_about_us1_text2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa libero, 
                    mattis volutpat id. Egestas adipiscing placerat eleifend a nascetur. Mattis proin enim, nam porttitor vitae. </p>
            </div>
            <div class="detail_about_us2">
                <div class="square">
                    <div>
                        <div class="square_text">
                            <p class="container" style="font-size: 21px;font-weight: 600;">Creativity</p>
                            <div id="count1"  class="count1"><h4 style="color:black ;font-size: 21px;">70</h4></div>
                        </div>
                        <div class="square_one"></div>
                    </div><br><br>
                    <div>
                        <div class="square_text">
                            <p class="container" style="font-size: 21px;font-weight: 600;">Advertising</p>
                            <div id="count2" class="count2"><h4 style="color:black ;font-size: 21px;">70</h4></div>
                        </div>
                        <div class="square_two"></div>
                    </div>
                   <br><br>
                   <div>
                        <div class="square_text">
                            <p class="container" style="font-size: 21px;font-weight: 600;">Design</p>
                            <div id="count3" class="count3"><h4 style="color:black ;font-size: 21px;">70</h4></div>
                        </div>
                            <div class="square_three"></div>
                        </div>
                    </div>
            </div>
            <script>
    function animateNumber(finalNumber, delay, startNumber = 0, callback) {
    let currentNumber = startNumber
    const interval = window.setInterval(updateNumber, delay)
    function updateNumber() {
    if (currentNumber >= finalNumber) {
    clearInterval(interval)
    } else {
  currentNumber++;
  callback(currentNumber)
}
}
}
    document.addEventListener('DOMContentLoaded', function () {
    animateNumber(70, 72, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count1').innerText = formattedNumber + '%'
    })

    animateNumber(80, 67, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count2').innerText = formattedNumber + '%'
    })

    animateNumber(50, 90, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('count3').innerText = formattedNumber + '%'
    })
    })
</script>
        </div>
        <div class="text_last_blog_post">
            <p>last blog post</p>
        </div>
        <div>
            <div class="content-shop_left_product1">
                <div>
                    <a href="./detail.html"><img src="view/img/img1_shop.png" alt=""></a>
                    <a class="name_product" href="./detail.html"><p >Modern sofa</p></a>
                    <center><div class="img_star_product">
                        <a href="#">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        </a>
                    </div></center>
                    <p class="price_product">$73,00</p>
                </div>

                <div>
                    <a href="./detail.html"><img src="view/img/img1_shop.png" alt=""></a>
                    <a class="name_product" href="./detail.html"><p >Modern sofa</p></a>
                    <center><div class="img_star_product">
                        <a href="#">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        </a>
                    </div></center>
                    <p class="price_product">$73,00</p>
                </div>
                <div>
                    <a href="./detail.html"><img src="view/img/img1_shop.png" alt=""></a>
                    <a class="name_product" href="./detail.html"><p >Modern sofa</p></a>
                    <center><div class="img_star_product">
                        <a href="#">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        </a>
                    </div></center>
                    <p class="price_product">$73,00</p>
                </div>
                <div>
                    <a href="./detail.html"><img src="view/img/img1_shop.png" alt=""></a>
                    <a class="name_product" href="./detail.html"><p >Modern sofa</p></a>
                    <center><div class="img_star_product">
                        <a href="#">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        <img src="view/img/Star 7.png" alt="">
                        </a>
                    </div></center>
                    <p class="price_product">$73,00</p>
                </div>
            </div>
                
        </div>
        </div>
    </div>
    
    </div>
    </div>


</body>
<style>
   .text_last_blog_post{
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 82px;
   }
</style>

</html>