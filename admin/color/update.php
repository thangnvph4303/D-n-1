<?php
if (is_array($color)) {
    extract($color);
}
?>
<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=updatecolor" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                <input type="text" class="form-control" value="<?= $id_color ?>" name="id_color" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên loại</label>
                <input type="text" name="color_name" value="<?= $color_name ?>" class="form-control">
            </div>
            <br>
            <input type="hidden" class="form-control" name="id_color" value="<?= $id_color ?>">
            <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật"></input>
            <input type="index.php?act=updatecolor" class="btn btn-secondary" value="Nhập lại"></input>
            <a href="./index.php?act=listcolor" class="btn btn-success">Danh sách</a>
            <br>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>