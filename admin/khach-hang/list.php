<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<div class="card-header">
    <h3>
        NGƯỜI DÙNG
    </h3>
    <i class="fas fa-ellipsis-h"></i>
</div>
<form action="index.php" method="post">
    <table id="table">
        <thead>
            <tr>
                <th scope="col">chọn</th>
                <th scope="col">MÃ KH</th>
                <th scope="col">HỌ VÀ TÊN</th>
                <th scope="col">TÊN LOGIN</th>
                <th scope="col">MẬT KHẨU</th>
                <th scope="col">ĐỊA CHỈ EMAIL</th>
                <th scope="col">ĐỊA CHỈ</th>
                <th scope="col">SỐ ĐIỆN THOẠI</th>
                <th scope="col">GIỚI TÍNH</th>
                <th scope="col">created_at</th>
                <th scope="col">update_at</th>
                <th scope="col">HÌNH ẢNH</th>
                <th scope="col">VAI TRÒ?</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as $item) {
                extract($item);
            ?>
                <tr>
                    <th scope="row"><input type="checkbox" name="id[]" value="<?= $id ?>"></th>
                    <td><?= $id ?></td>
                    <td><?= $fullname ?></td>
                    <td><?= $username ?></td>
                    <td><?= $password ?></td>
                    <td><?= $email ?></td>
                    <td><?= $address ?></td>
                    <td><?= $phone ?></td>
                    <td><?= $gender ? 'nam' : 'nữ' ?></td>
                    <td><?= $created_at ?></td>
                    <td><?= $update_at ?></td>
                    <td><img src="../../content/images/users/<?= $image ?>" alt="" width="60px" height="100px"></td>
                    <td><?= $role ? 'Khách hàng' : 'Nhân viên' ?></td>
                    <td>
                        <a href="index.php?btn_edit&id=<?= $id ?>">Sửa</a>
                        <a onclick="return confirm('Ban có muốn xóa hay không ?')" href="index.php?btn_delete&id=<?= $id ?>">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <button id="check-all" type="button" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Chọn tất cả</button>
                    <button id="clear-all" type="button" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Bỏ chọn tất cả</button>
                    <button onclick="return confirm('Ban có muốn xóa hay không ?')" id="btn-delete" name="btn_delete" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Xóa các mục chọn</button>
                    <a href="index.php?btn_new" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Nhập thêm</a>

</form>