<?php
function loadall_thongke()
{
    $sql = "SELECT danhmuc.id as id, danhmuc.name as tenloai, count(sanpham.id) as countsp,min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql .= " FROM sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " GROUP BY danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}


function loadall_thongke_sanpham()
{
    $sql = "SELECT sanpham.id as id, sanpham.name as tenloai, count(cart.id) as countdh,min(cart.thanhtien) as mintong, max(cart.thanhtien) as maxtong, avg(cart.thanhtien) as avgtong";
    $sql .= " FROM cart left join sanpham on sanpham.id=cart.idsp";
    $sql .= " GROUP BY sanpham.id order by sanpham.id desc";
    $listtkdh = pdo_query($sql);
    return $listtkdh;
}


// Biểu đồ
function thonngke()
{
    $sql = "SELECT *,COUNT(sanpham.name) AS sluong FROM sanpham INNER JOIN danhmuc ON sanpham.iddm = danhmuc.id GROUP BY danhmuc.name;";
    $a = pdo_query($sql);
    return $a;
}
function ngay()
{
    $sql = "SELECT SUM(`tongdonhang`) FROM `bill` WHERE `status_pay` = '1' AND `ngaydathang` >= NOW() - INTERVAL 1 DAY ";
    $liststatis = pdo_query_value($sql);
    return $liststatis;
}
function tuan()
{
    $sql = "SELECT SUM(`tongdonhang`) FROM `bill` WHERE `status_pay` = '1' AND `ngaydathang` >= NOW() - INTERVAL 1 WEEK ";
    $liststatis = pdo_query_value($sql);
    return $liststatis;
}
function thang()
{
    $sql = "SELECT SUM(`tongdonhang`) FROM `bill` WHERE `status_pay` = '1' AND `ngaydathang` >= NOW() - INTERVAL 1 MONTH ";
    $liststatis = pdo_query_value($sql);
    return $liststatis;
}
function nam()
{
    $sql = "SELECT SUM(`tongdonhang`) FROM `bill` WHERE `status_pay` = '1' AND `ngaydathang` >= NOW() - INTERVAL 1 YEAR ";
    $liststatis = pdo_query_value($sql);
    return $liststatis;
}

function tungthang($a)
{
    $sql = "SELECT SUM(`tongdonhang`) as soluong FROM `bill` WHERE `status_pay` = '1' AND Month(ngaydathang) = '$a' ";
    $liststatis = pdo_query_value($sql);
    return $liststatis;
}