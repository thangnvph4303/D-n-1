<div class="main">
    <div class="main-content dashboard">

        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <div id="chart" style="width:95%; height:500px;margin-top:10px;margin-left:2.4%;clear:both;"></div>

        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Sản phẩm', 'Đơn mua'],
                    <?php
                    $tongdm = count($listthongkedh);
                    $i = 1;
                    foreach ($listthongkedh as $tkdh){
                        extract($tkdh);
                        if($i == $tongdm) $dauphay = "";
                        else $dauphay = ",";
                        echo "
                            ['".$tkdh['tenloai']."', ".$tkdh['countdh']."]
                        ". $dauphay;
                        $i += 1;
                    }
                    // var_dump($tongdm); die;

                    ?>
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {
                    'title': 'Đơn mua theo sản phẩm',
                    'width': 650,
                    'height': 500
                };

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('chart'));
                chart.draw(data, options);
            }
        </script>
        <br>
        <br>
        <a class="" href="index.php?act=listthongke"><input type="button" class="btn btn-info" value="Xem danh sách"></a>
    </div>
</div>