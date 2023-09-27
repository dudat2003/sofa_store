<div class=" home6">
        <div class="container">
        <br><br>
        <p class="home6_textlogo">Soudemy</p>
        <div class="home6_text_all">
            <div class="home6_text_all1">
                <p class="text1_all">About us</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Tellus vitae congue id ipsum sed neque et dui accumsan. 
                    Nibh semper magna facilisi ridiculus luctus amet. Aliquam </p>
            </div>
            <div  class="home6_text_all2">
                <p class="text1_all">Useful</p>
                <p>Download product</p>
                <p>Download product</p>
                <p>Download product</p>
                <p>Download product</p>
                <p>Download product</p>
                <p>Download product</p>
            </div>
            <div  class="home6_text_all3">
                <p class="text1_all">Download</p>
                <p>instgram</p>
                <p>facebook</p>
                <p>Twitter</p>
                <p>printeress</p>
                <p>youtube</p>
            </div>
            <div  class="home6_text_all4">
                <p class="text1_all">Call center</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus vitae </p>
                <p>soroushnorozyui@gmail.com</p>
                <p>+1 333 555</p>
            </div>
        </div>
    </div>
    </div>
</body>
<style>
    
</style>
<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    // Hiển thị giá trị thanh trượt mặc định
    output.innerHTML = slider.value;
    //Cập nhật giá trị thanh trượt hiện tại (mỗi khi bạn kéo tay cầm thanh trượt)
    slider.oninput = function()
    {
      output.innerHTML = this.value;
    }
</script>
</html>