
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style_blog.css">
    <title>Document</title>

</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="comment_all">
        </div>
            <p class="Post_a_comment">Post a comment</p>
            <input class="your_comment" name="contend" type="text" placeholder="Your comment">
            <input class="your_name" name="name" type="text" placeholder="Your name">
            <input class="your_name" name="email" type="text" placeholder="Your email">
            <input class="submit_blog" type="submit" name="btn_comment" onclick="tai_lai_trang()" value="Gửi bình luận">
        </div>
        <?php
         include_once "dp.php";
         if(isset($_POST['btn_comment'])){
             $contend=$_POST['contend'];
             $name=$_POST['name'];
             $email=$_POST['email'];
             $ngaybl=date('Y-m-d');
             $sql_insert="insert into comment values(null,'$name','$email','$contend','$ngaybl')";
             $objInsert=$conn->prepare($sql_insert);
             if($objInsert->execute()){
                 echo"gửi bình luận thành công";
             }
             else{
                 echo"thất bại";
             }
 
         }
    ?>
        <div class="user_cm">
        <?php
            include_once "dp.php";
            $sql="select * from comment";
            $objPro=$conn->query($sql);
            foreach($objPro as $row){
        ?>
       <div>
                <div class="user_information">
                    <div class="user_img">
                        <img src="./img/Facebook-Avatar_3.png" alt="">
                    </div>
                    <div class="user_name_email">
                        <p><b><?php echo $row['name'] ?></b></p>
                        <p><b><?php echo $row['date'] ?></b></p>
                    </div>
                </div>
                <div class="contend">
                    <p><?php echo $row['contend'] ?></p>
                </div>
            </div>


            <?php
            }

        ?>
            
    </form>
   
    <script>
        function tai_lai_trang(){
            location.reload();
        }
    </script>
</body>
