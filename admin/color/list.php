
<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <div class="row">
            <form action="./index.php?act=listcolor" method="get">
                <table class=" table">
                    <tr class="table-primary">
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên color</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listcolor as $color) {
                        extract($color);
                        $suacolor = "index.php?act=suacolor&id=".$id_color;
                        $xoacolor = "index.php?act=xoacolor&id=".$id_color;
                        echo '
                            <tr class="table-success">
                                <td><input type="checkbox"></td>
                                <td>' . $id_color . '</td>
                                <td>' . $color_name . '</td>
                                <td>
                                    <a href="' . $suacolor . '"><input class="btn btn-success"  type="button" name="sua" value="Sửa"></a>
                                    <a href="' . $xoacolor . '"><input class="btn btn-warning" type="button" name="delete" value="Xóa"></a>
                                </td>
                            </tr>
                            ';
                    }
                    ?>

                </table>
                <input type="button" class="btn btn-success" value="Chọn tất cả"></input>
                    <input type="button" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
                    <input type="button" class="btn btn-warning" value="Xóa các mục chọn"></input>
                    <a href="./index.php?act=addcolor"><input type="button" class="btn btn-info" value="Thêm mới"></input></a>
            </form>

        </div>

    </div>
</div>
