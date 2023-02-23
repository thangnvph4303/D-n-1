<div class="breadcrumb-area ml-110">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-bg d-flex justify-content-center align-items-center">
                    <div class="breadcrumb-shape1 position-absolute top-0 end-0">
                        <img src="assets/images/shapes/bs-right.png" alt="">
                    </div>
                    <div class="breadcrumb-shape2 position-absolute bottom-0 start-0">
                        <img src="assets/images/shapes/bs-left.png" alt="">
                    </div>
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">My Account</h2>
                        <ul class="page-switcher d-flex ">
                            <li><a href="index.html">Home</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dashbord-wrapper ml-110 mt-100">
    <div class="container">
        <div class="row">
            <?php if (isset($_SESSION['username']))
                extract($_SESSION['username']);
            ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                <div class="dashbord-switcher">
                    <a href="dashboard.php" class="active"><i class="flaticon-dashboard"></i> Bảng điều khiển</a>
                    <a href="index.php?act=myaccount"><i class="flaticon-user"></i> Thông tin tài khoản</a>
                    <a href="index.php?act=updatemk"><i class="flaticon-user"></i> Thay đổi mật khẩu</a>
                    <a href="index.php?act=order"><i class="flaticon-shopping-bag"></i> Đơn hàng của tôi</a>
                    <a href="index.php?act=address"><i class="flaticon-settings"></i> Địa chỉ </a>
                    <a href="index.php?act=logout"><i class="flaticon-logout"></i> Logout</a>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="profile-form-wrapper">
                    <h5>Trang điều khiển</h5>
                    <div class="profile-top">
                        <div class="user-image">
                            <img src="assets/images/prodil-image.png" alt="">
                        </div>
                        <div class="profile-top-btns">
                            <p>Xin chào <b><?php if (isset($_SESSION['username'])) echo $_SESSION['username']['full_name'] ?></b> đến trang điều khiển</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="newslatter-area ml-110 mt-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="newslatter-wrap text-center">
                    <h5>Connect To EG</h5>
                    <h2 class="newslatter-title">Join Our Newsletter</h2>
                    <p>Hey you, sign up it only, Get this limited-edition T-shirt Free!</p>
                    <form action="#" method="POST">
                        <div class="newslatter-form">
                            <input type="text" placeholder="Type Your Email">
                            <button type="submit">Send <i class="bi bi-envelope-fill"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>