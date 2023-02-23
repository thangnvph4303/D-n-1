<?php
if (isset($onebill) && is_array($onebill)) {
    extract($onebill);
}
?>
<div class="main">
    <div class="main-content dashboard">
        <div class="checkout-area ml-110 mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-8">
                        <form class="billing-from">
                            <h5 class="checkout-title">
                                THÔNG TIN ĐƠN HÀNG
                            </h5>
                            <div class="row">
                                <li>Mã đơn hàng: DAM-<?= $id ?></li>
                                <li>Ngày đặt hàng: <?= $ngaydathang ?></li>
                                <li>Tổng đơn hàng: <?= $tongdonhang ?></li>
                                <li>Phương thức thanh toán: <?= $pttt ?></li>
                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-12 col-xl-8">
                        <form class="billing-from" action="index.php?act=billconfirm">
                            <h5 class="checkout-title">
                                Thông tin đặt hàng
                            </h5>
                            <div class="row">

                                <li for="first-name1">Tên tài khoản: <b><?= $username ?></b></li>
                                <li for="first-name">Họ và tên người đặt: <b><?= $full_name ?></b></li>
                                <li>Địa chỉ: <b><?= $address ?></b></li>
                                <li for="first-name">Số điện thoại: <b><?= $phone ?></b></li>
                                <li for="first-name">Địa chỉ email người đặt: <b><?= $email ?></b></li>


                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-12 col-xl-8">
                        <h5 class="checkout-title billing-from"></h5>
                        <h5 class="checkout-title billing-from">Trạng thái đơn hàng </h5>
                        <div class="row">
                            <li><?php if ($status == 0) {
                                    echo "Đơn hàng mới";
                                } elseif ($status == 1) {
                                    echo "Đang xử lý";
                                } elseif ($status == 2) {
                                    echo "Đang giao hàng";
                                } else {
                                    echo "Giao hàng thành công";
                                }
                                ?></li>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-8">
                        <form class="billing-from">
                            <h5 class="checkout-title">
                                Phương thức thanh toán
                            </h5>
                            <div class="row">
                                <li><?php if ($pttt == 1) {
                                        echo "Thanh toán khi nhận hàng";
                                    } else if ($pttt == 2) {
                                        echo "Thanh toán bằng chuyển khoản";
                                    } else if ($pttt == 3) {
                                        echo "Thanh toán online";
                                    } else {
                                        echo "Không tìm thấy phương thức thanh toán";
                                    } ?></li>
                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-12 col-xl-8">
                        <form class="billing-from">
                            <h5 class="checkout-title">
                                THÔNG TIN GIỎ HÀNG
                            </h5>
                            <div class="row">
                                <table class="table cart-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Price </th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $idbill = $_GET['idbill'];
                                        $bill = loadall_cart($idbill);
                                        // var_dump($bill);
                                        foreach ($bill as $value) {
                                            extract($value);
                                            // global $img_path;
                                            // $hinhpath = "../uploads/" . $image_user;
                                            $hinh = "../uploads/" . $value['image'];
                                            $tong = $value['thanhtien'];
                                            $sanphamct = "index.php?act=sanphamct&idsp=" . $value['idsp'];
                                        ?>
                                            <tr>
                                                <td class="jb-product-thumbnail"><img src="<?= $hinh ?>" width="80px"></img></td>
                                                <td class="jb-product-name">
                                                    <?= $value['namesp'] ?>
                                                </td>
                                                <td class="jb-product-price"><span class="amount">
                                                        <?= number_format($value['price']) ?>₫
                                                    </span></td>
                                                <td class="quantity">
                                                    <?= $value['soluong'] ?>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">
                                                        <?= number_format($tong) ?>₫
                                                    </span></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>


                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>