<?php
if (strlen($MESSAGE)) {
    echo "<h5 >$MESSAGE</h5>";
}
?>
<div class="card-header">
    <h3>
        Loại hàng
    </h3>
    <i class="fas fa-ellipsis-h"></i>
</div>
<form action="index.php" method="post">
    <table boder="1">
        <thead>
            <tr>
                <th scope="col"> chọn</th>
                <th scope="col">MÃ LOẠI</th>
                <th scope="col">TÊN LOẠI</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as $item) {
                extract($item);
            ?>
                <tr scope="row">
                    <th><input type="checkbox" name="id[]" value="<?= $id ?>"></th>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td>
                        <a href="index.php?btn_edit&id=<?= $id ?>">Sửa</a>
                        <a onclick="return confirm('Ban có muốn xóa hay không ?')" href="index.php?btn_delete&id=<?= $id ?>">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <button id="check-all" type="button" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Chọn tất cả</button>
                    <button id="clear-all" type="button"style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Bỏ chọn tất cả</button>
                    <button  onclick="return confirm('Ban có muốn xóa hay không ?')" id="btn-delete" name="btn_delete"style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Xóa các mục chọn</button>
                    <a href="index.php?btn_new"style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>
</form>