<?php

function cart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {

        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col"> Discount Price </th>
                    <th scope="col"> Price</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    ' . $xoasp_th . '
                </tr>
            </thead>
            ';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[1];
        $thanhtien = $cart[3] * $cart[5];
        $tong += $thanhtien;
        $sanphamct = "index.php?act=sanphamct&idsp=" . $cart[0];
        if ($del == 1) {
            $xoasp_td = '<td><a class="delete-icon" href="index.php?act=delcart&idcart=' . $i . '"><input type="submit" name="xoa" value="X"></a></td>';
        } else {
            $xoasp_td = '';
        }
        echo '<tbody>
            <tr>
                           <td class="image-col">
                               <a href="' . $sanphamct . '"><img src="' . $hinh . '" alt=""></a>
                           </td>
                           <td class="product-col"><a href="' . $sanphamct . '" class="product-title">' . $cart[2] . ' <br> ' . $cart[7] . ' <br> ' . $cart[8] . ' </a></td>
                           <td class="unite-col"><del><span class="unite-price-del">' . number_format($cart[4]) . 'đ</span></del> <span class="unite-price"></span></td>
                           <td class="discount-col"><span class="discount-price">' . number_format($cart[3]) . 'đ</span></td>
                           <td class="quantity-col">
                               <div class="quantity">
                                   <input type="number" min="1" max="90" step="10" value="' . $cart[5] . '">
                               </div>
                           </td>
                           <td class="total-col">' . number_format($thanhtien) . 'đ</td>
                                   ' . $xoasp_td . '
                               
                       </tr>
                       </tbody>
                       ';

        $i += 1;
    }
    if ($del == 1) {

        $xoaall_td = '<td><a href="index.php?act=delcart" class="cart-proceed">Xóa tất cả sản phẩm</a></td>';
    } else {
        $xoaall_td = '';
    }
    echo '<div class="row mt-60">
    <div class="col-xxl-6 col-lg-4">
        <table class="table total-table ">
            <tbody>
                <tr class="">
                    <td class="tt-left">Tổng đơn hàng</td>
                    <td class="tt-right">' . number_format($tong) . 'đ</td>
                   ' . $xoaall_td . '
                </tr>
            </tbody>
        </table>
    </div>
</div>';
}


function bill_chi_tiet($listcart)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Price </th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            ';
    foreach ($listcart as $cart) {
        $hinh = $img_path . $cart['image'];
        $tong += $cart['thanhtien'];
        $sanphamct = "index.php?act=sanphamct&idsp=" . $cart['idsp'];
        echo '<tbody>
            <tr>
                           <td class="image-col">
                               <a href="' . $sanphamct . '"><img src="' . $hinh . '" alt=""></a>
                           </td>
                           <td class="product-col"><a href="' . $sanphamct . '" class="product-title">' . $cart['namesp'] . '</a></td>
                           <td class="discount-col"><span class="discount-price">' . number_format($cart['price']) . '</span></td>
                           <td class="quantity-col">
                               '.$cart['soluong'].'
                           </td>
                           <td class="total-col">' . number_format($cart['thanhtien']) . '</td>
                               
                       </tr>
                       </tbody>
                       ';

        $i += 1;
    }
    echo '<div class="row mt-60">
    <div class="col-xxl-6 col-lg-4">
        <table class="table total-table ">
            <tbody>
                <tr class="">
                    <td class="tt-left">Tổng đơn hàng</td>
                    <td class="tt-right">' . number_format($tong) . '</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>';
}


function tongdonhang()
{

    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[5];
        $tong += $thanhtien;
    }
    return $tong;
}


function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}


function insert_cart($iduser, $idsp, $image, $namesp, $price, $soluong, $thanhtien,$id_size,$id_color, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idsp,image,namesp,price,soluong,thanhtien,idbill,color_product,size_product) 
        values('$iduser','$idsp','$image','$namesp','$price','$soluong','$thanhtien','$idbill','$id_size','$id_color')";
    return pdo_execute($sql);
}

function count_cart(){
    $i= 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $i++;
    }
    return $i;
}