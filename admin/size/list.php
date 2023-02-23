
<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <div class="row">
            <form action="./index.php?act=listsize" method="get">
                <table class=" table">
                    <tr class="table-primary">
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên size</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsize as $size) {
                        extract($size);
                        $suasize = "index.php?act=suasize&id=".$id_size;
                        $xoasize = "index.php?act=xoasize&id=".$id_size;
                        echo '
                            <tr class="table-success">
                                <td><input type="checkbox"></td>
                                <td>' . $id_size . '</td>
                                <td>' . $size_name . '</td>
                                <td>
                                    <a href="' . $suasize . '"><input class="btn btn-success"  type="button" name="sua" value="Sửa"></a>
                                    <a href="' . $xoasize . '"><input class="btn btn-warning" type="button" name="delete" value="Xóa"></a>
                                </td>
                            </tr>
                            ';
                    }
                    ?>

                </table>
                <input type="button" class="btn btn-success" value="Chọn tất cả"></input>
                    <input type="button" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
                    <input type="button" class="btn btn-warning" value="Xóa các mục chọn"></input>
                    <a href="./index.php?act=addsize"><input type="button" class="btn btn-info" value="Thêm mới"></input></a>
            </form>

        </div>

    </div>
</div>
