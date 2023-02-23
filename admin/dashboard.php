<?php
$listtaikhoan = loadall_taikhoan();
$listbinhluan = loadall_binhluan_admin();
$listbill = loadall_bill_admin();
$listsanpham = loadall_sanpham();
$listdm = loadall_danhmuc();
$listthongke = loadall_thongke();
$listthongkedh = loadall_thongke_sanpham();
?>

<div class="main">
    <div class="main-content dashboard">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Bảng điều khiển</h1>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng doanh thu(Ngày)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format(ngay()) ?> đ</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng doanh thu(Tuần)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format(tuan()) ?> đ</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng doanh thu(Tháng)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format(thang()) ?> đ</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng doanh thu(Năm)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= number_format(nam()) ?> đ</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng đơn</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($listbill) ?> </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng khách hàng</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= count($listtaikhoan) ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng sản phẩm</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= count($listsanpham) ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng loại sản phẩm</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= count($listdm) ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Biểu đồ thống kê Doanh thu </h6>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                        <script>
                            <?php $thang = 12;
                            $dau1  ?>
                            const ctx = document.getElementById('myChart');

                            new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: [
                                        'Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'
                                    ],
                                    datasets: [{
                                        label: 'Tháng',
                                        data: [
                                            <?php for ($i = 1; $i <= $thang; $i++) {
                                                $a = tungthang($i);
                                                if ($i == $thang) {
                                                    $dau1 = "";
                                                } else {
                                                    $dau1 = ",";
                                                };
                                            ?>
                                                <?= $a ?> <?= $dau1 ?>
                                            <?php
                                            } ?>
                                        ],
                                        fill: false,
                                        tension: 0.1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>

                <!--Biểu đồ-->
                <!-- Pie Chart sản phẩm theo danh mục-->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">


                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <div id="piechart" style="width:95%; height:500px;margin-top:10px;margin-left:2.4%;clear:both;"></div>

                        <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            // Draw the chart and set the chart values
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Danh mục', 'Sản phẩm'],
                                    <?php
                                    $tongdm = count($listthongke);
                                    $i = 1;
                                    foreach ($listthongke as $tk) {
                                        extract($tk);
                                        if ($i == $tongdm) $dauphay = "";
                                        else $dauphay = ",";
                                        echo "
                            ['" . $tk['tenloai'] . "', " . $tk['countsp'] . "]
                        " . $dauphay;
                                        $i += 1;
                                    }
                                    // var_dump($tongdm); die;

                                    ?>
                                ]);

                                // Optional; add a title and set the width and height of the chart
                                var options = {
                                    'title': 'Đơn mua theo danh muc',
                                    'width': 300,
                                    'height': 300
                                };

                                // Display the chart inside the <div> element with id="piechart"
                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                chart.draw(data, options);
                            }
                        </script>

                    </div>
                </div>


            </div>
            <!-- Pie Chart đơn hàng theo sản phẩm-->



        </div>
    </div>
</div>
</div>