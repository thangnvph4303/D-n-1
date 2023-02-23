<?php
session_start();
ob_start();
if (isset($_SESSION['username'])&&($_SESSION['username']['role']==1)) {
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/cart.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "../model/bill.php";
    include "../model/size.php";
    include "../model/color.php";
    include "./head.php";
    include "./header.php";
    // Controller
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
                // TRANG ĐIỀU KHIỂN 
            case 'dashboard':
                $listtaikhoan = loadall_taikhoan();
                $listbinhluan = loadall_binhluan_admin();
                $listbill = loadall_bill_admin();
                $listsanpham = loadall_sanpham();
                $listdm = loadall_danhmuc();
                $listthongke = loadall_thongke();
                $listthongkedh = loadall_thongke_sanpham();
                include "./dashboard.php";
                break;
            case 'login':
                break;
                //-------------- BẢNG DANH MỤC-------------------------------
                // add  danh mục
            case 'adddm':
                // Kiểm tra xem người dùng có click vào nút Thêm mới hay không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $name = $_POST['name'];
                    insert_danhmuc($name);
                    $thongbao = "Thêm thành công";
                }
                include "./danhmuc/add.php";
                break;
                // List danh mục
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "./danhmuc/list.php";
                break;
                //  Xóa danh mục
            case 'xoadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "./danhmuc/list.php";
                break;
                // Sửa dm
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sql = "SELECT * from danhmuc where id=" . $_GET['id'];
                    $dm = pdo_query_one($sql);
                }
                $listdanhmuc = loadall_danhmuc();
                include "./danhmuc/update.php";
                break;
                // Cập nhật danh mục
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $sql = "UPDATE danhmuc SET name = '" . $name . "' where id =" . $_POST['id'];
                    pdo_execute($sql);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "./danhmuc/list.php";
                break;
                //-------------- BẢNG SIZE-------------------------------
                // add  size
            case 'addsize':
                // Kiểm tra xem người dùng có click vào nút Thêm mới hay không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $size_name = $_POST['size_name'];
                    insert_size($size_name);
                    $thongbao = "Thêm thành công";
                }
                include "./size/add.php";
                break;
                // List size
            case 'listsize':
                $listsize = loadall_size();
                include "./size/list.php";
                break;
                //  Xóa size
            case 'xoasize':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_size($_GET['id']);
                }
                $listsize = loadall_size();
                include "./size/list.php";
                break;
                // Sửa size
            case 'suasize':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sql = "SELECT * from size where id_size=" . $_GET['id'];
                    $size = pdo_query_one($sql);
                }
                $listsize = loadall_size();
                include "./size/update.php";
                break;
                // Cập nhật size
            case 'updatesize':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id_size = $_POST['id_size'];
                    $size_name = $_POST['size_name'];
                    $sql = "UPDATE size SET size_name = '" . $size_name . "' where id_size =" . $_POST['id_size'];
                    pdo_execute($sql);
                    $thongbao = "Cập nhật thành công";
                }
                $listsize = loadall_size();
                include "./size/list.php";
                break;
                //-------------- BẢNG color-------------------------------
                // add  color
            case 'addcolor':
                // Kiểm tra xem người dùng có click vào nút Thêm mới hay không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $color_name = $_POST['color_name'];
                    insert_color($color_name);
                    $thongbao = "Thêm thành công";
                }
                include "./color/add.php";
                break;
                // List color
            case 'listcolor':
                $listcolor = loadall_color();
                include "./color/list.php";
                break;
                //  Xóa color
            case 'xoacolor':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_color($_GET['id']);
                }
                $listcolor = loadall_color();
                include "./color/list.php";
                break;
                // Sửa color
            case 'suacolor':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sql = "SELECT * from color where id_color=" . $_GET['id'];
                    $color = pdo_query_one($sql);
                }
                $listcolor = loadall_color();
                include "./color/update.php";
                break;
                // Cập nhật color
            case 'updatecolor':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id_color = $_POST['id_color'];
                    $color_name = $_POST['color_name'];
                    $sql = "UPDATE color SET color_name = '" . $color_name . "' where id_color =" . $_POST['id_color'];
                    pdo_execute($sql);
                    $thongbao = "Cập nhật thành công";
                }
                $listcolor = loadall_color();
                include "./color/list.php";
                break;
                //---------------------------BẢNG SẢN PHẨM-----------------------------------------
                // add sản phẩm
            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $name = $_POST['name'];
                    $discount = $_POST['discount'];
                    $price = $_POST['price'];
                    $mota_dai = $_POST['mota_dai'];
                    $mota_ngan = $_POST['mota_ngan'];
                    $date = $_POST['date'];
                    $id_size = $_POST['id_size'];
                    $id_color = $_POST['id_color'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($name, $image, $discount, $price, $mota_ngan, $mota_dai, $date, $id_size, $id_color, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "./sanpham/add.php";
                break;
                // danh sách sản phẩm
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);
                include "./sanpham/list.php";
                break;
                // Xóa sản phẩm
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("", 0);
                include "./sanpham/list.php";
                break;
                // Sửa sản phẩm
            case 'suasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sp = loadone_sanpham($_GET['id']);
                }
                $listsize =loadall_size();
                $listcolor = loadall_color();
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "./sanpham/update.php";
                break;
                // Update sản phẩm
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $name = $_POST['name'];
                    $discount = $_POST['discount'];
                    $price = $_POST['price'];
                    $mota_ngan = $_POST['mota_ngan'];
                    $mota_dai = $_POST['mota_dai'];
                    $date = $_POST['date'];
                    $id_size = $_POST['id_size'];
                    $id_color = $_POST['id_color'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    $listsanpham = update_sanpham($id, $name, $image, $discount, $price, $mota_ngan, $mota_dai, $date, $id_size, $id_color, $iddm);
                    $thongbao = "Cập nhật thành công";
                }
                $sql = "select * from danhmuc order by  id desc";
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "./sanpham/list.php";
                break;
                //--------------------------PHẦN TÀI KHOẢN-----------------------------------------
                // DANH SÁCH TÀI KHOẢN
            case 'listtaikhoan':
                $listtaikhoan = loadall_taikhoan();
                // echo $listtaikhoan; die;
                include "./taikhoan/list.php";
                break;
                // XÓA TÀI KHOẢN
            case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "./taikhoan/list.php";
                break;
                // SỬA TÀI KHOẢN
            case 'suatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $tk = loadone_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "./taikhoan/update.php";
                break;
                // UPDATE TÀI KHOẢN
            case 'updatetk':
                if (isset($_POST['id']) && ($_POST['id'] > 0)) {
                    $id = $_POST['id'];
                    $full_name = $_POST['full_name'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $role = $_POST['role'];
                    $image_user = $_FILES['image_user']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image_user"]["name"]);

                    if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    $listsanpham = update_taikhoan($id, $full_name, $username, $password, $email, $address, $phone, $role, $image_user);
                    $thongbao = "Cập nhật thành công";
                }
                $listtaikhoan = loadall_taikhoan();
                include "./taikhoan/list.php";
                break;
                // DANH SÁCH HÓA ĐƠN
            case 'listbill':
                $listbill = loadall_bill_admin();
                include "./cart/list-bill.php";
                break;
                   //  HÓA ĐƠN CHI TIẾT
            case 'billct':
                if (isset($_GET['idbill']) && ($_GET['idbill'] > 0)) {
                    $onebill=loadone_bill($_GET['idbill']);
                }
                include "./cart/bill-chitiet.php";
                break;
                // SỬA BILL
            case 'suabill':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $bill = loadone_bill($_GET['id']);
                }
                $listbill = loadall_bill_admin();
                include "./cart/update-bill.php";
                break;
                // CẬP NHẬT BILL
            case 'updatebill':
                if (isset($_POST['id']) && ($_POST['id'] > 0)) {
                    $id = $_POST['id'];
                    $status = $_POST['status'];
                    $listbill= update_bill($id, $status);
                    $thongbao = "Cập nhật thành công";
                }
                $listbill = loadall_bill_admin();
                include "./cart/list-bill.php";
                break;
                // DANH SÁCH BÌNH LUẬN
            case 'listbl':
                $listbinhluan = loadall_binhluan_admin();
                include "./binhluan/list.php";
                break;
                // XÓA BÌNH LUẬN
            case 'xoabl':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan_admin();
                include "./binhluan/list.php";
                break;
                // DANH SÁCH THỐNG KÊ
            case 'listthongke':
                $listthongkedh = loadall_thongke_sanpham();
                $listthongke = loadall_thongke();
                include "./thongke/list.php";
                break;

            case 'bieudo1':
                $listthongke = loadall_thongke();
                include "thongke/bieudo1.php";
                break;

            case 'bieudo2':
                $listthongkedh = loadall_thongke_sanpham();
                include "thongke/bieudo2.php";
                break;
        }
    } else {
        include "./dashboard.php";
    }
    include "./footer.php";
    ob_end_flush();
}else{
    echo '<script>alert("Tên đăng nhập hoặc mật khẩu không phải tài khoản admin")</script>';
    header('location:taikhoan/login.php');
}
?>