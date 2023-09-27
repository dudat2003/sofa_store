<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Document</title>
    <style>
        .link_all{
            display:flex;
            justify-content: space-between;
        }
        .border_btn_button{
            background-color: black;
            width: 150px;
            text-align: center;
            padding: 10px;
            border-radius: 7px;
        }
        .btn_button{
            text-decoration: none;
            color: white;
        }
        .btn_button:hover{
            color: red;
        }
        .sua{
            background-color: gray;
            width: 40px;
            text-align: center;
            padding: 10px;
            border-radius: 7px;
        }
        .sua a{
            
            color: white;
            text-decoration: none;
        }
        .sua a:hover{
            color: black;
        }
        table{
            width: 100%;
            border: 1px solid gray;
        }
    </style>
</head>
<body>
    <h1>Thống kê sản phẩm theo loại</h1>
    <div>
        <table border=2>
            <tr>
                <th>Mã Danh Mục</th>
                <th>Loại Hàng</th>
                <th>Số Lượng</th>
                <th>Giá Cao Nhất</th>
                <th>Giá Thấp Nhất</th>
                <th>Giá Trung Bình</th>
            </tr>
            <?php
                foreach($listtk as $tk){
                    extract($tk);
                    echo '  <tr>
                    <th>'.$madm.'</th>
                    <th>'.$tendm.'</th>
                    <th>'.$countsp.'</th>
                    <th>'.$maxprice.'</th>
                    <th>'.$minprice.'</th>
                    <th>'.$avgprice.'</th>
                    </tr>';
                }

            ?>
        </table>
    </div>
   <br>
<center>
        <div id="piechart"></div>
        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Danh mục', 'Số lượng sản phẩm'],
          <?php
          $tongdm=count($listtk);
          $i=1;
            foreach ($listtk as $tk) {
                extract($tk);
                if($i==$tongdm) $dauphay=""; else $dauphay=",";
                echo "['".$tk['tendm']."', ".$tk['countsp']."]".$dauphay;
                $i+=1;
            }
          
          ?>
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'Thống kê bằng biểu đồ theo danh mục', 'width':600, 'height':400};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
        </script>

</center>

</body>
</html>