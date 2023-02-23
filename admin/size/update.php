<?php
if (is_array($size)) {
    extract($size);
}
?>
<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=updatesize" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                <input type="text" class="form-control" value="<?= $id_size ?>" name="id_size" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên loại</label>
                <input type="text" name="size_name" value="<?= $size_name ?>" class="form-control">
            </div>
            <br>
            <input type="hidden" class="form-control" name="id_size" value="<?= $id_size ?>">
            <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật"></input>
            <input type="index.php?act=updatesize" class="btn btn-secondary" value="Nhập lại"></input>
            <a href="./index.php?act=listsize" class="btn btn-success">Danh sách</a>
            <br>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>