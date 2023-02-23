<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=addcolor" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                <input type="text" class="form-control" name="id_color" placeholder="Auto number" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên color</label>
                <input type="text" name="color_name" class="form-control">
            </div> <br>
            <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới"></input>
            <input type="reset" class="btn btn-secondary" value="Nhập lại"></input>
            <a href="./index.php?act=listcolor" class="btn btn-success">Danh sách</a>
            <br>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>