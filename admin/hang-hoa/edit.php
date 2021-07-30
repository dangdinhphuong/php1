<?php ?>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<div class="card-header">
    <h3>
        Sửa sản phẩm <a href="index.php" class="btn">       Back</a>
    </h3>
    <i class="fas fa-ellipsis-h"></i>
</div>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div>

        <input name="id" type="hidden" readonly value="<?= $id ?>">
    </div>
    <table class="table">

        <tbody>
            <tr>
                <th scope="row"><label>name</label></th>
                <td> <input name="name" value="<?= $name ?>"><label style="color:red"><?= (isset($errors['name']) ? $errors['name'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="row"><label>ĐƠN GIÁ</label></th>
                <td> <input name="price" type="number" value="<?= $price ?>"><label style="color:red"><?= (isset($errors['price']) ? $errors['price'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="row"><label>GIẢM GIÁ</label></th>
                <td><input name="sale" type="number" value="<?= $sale ?>"><label style="color:red"><?= (isset($errors['sale']) ? $errors['sale'] : '') ?></label></td>
            </tr>
            <tr>
                <th scope="row"><label>HÌNH ẢNH</label></th>
                <td><input name="image" type="hidden" value="<?= $image ?>"><label style="color:red"><?= (isset($errors['image']) ? $errors['image'] : '') ?></label>
                    <input name="image" type="file"> (<?= $image ?>)</td>
            </tr>
            <tr>
                <th scope="row"><label>LOẠI HÀNG</label><label style="color:red"><?= (isset($errors['cate_id']) ? $errors['cate_id'] : '') ?></label></th>
                <td><select name="cate_id">
                        <?php
                        foreach ($loai_select_list as $loai) {
                            if ($loai['id'] == $cate_id) {
                                echo '<option selected value="' . $loai['id'] . '">' . $loai['name'] . '</option>';
                            } else {
                                echo '<option value="' . $loai['id'] . '">' . $loai['name'] . '</option>';
                            }
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <th scope="row"><label>status</label></th>
                <td> <label><input name="status" <?php if ($status == 1) {
                                                        echo "checked";
                                                    } ?> value="1" type="radio">Hoạt động</label>
                    <label><input name="status" <?php if ($status == 0) {
                                                    echo "checked";
                                                } ?> value="0" type="radio">Tạm dừng</label></td>
            </tr>

            <tr>
                <th scope="row"><label>MÔ TẢ</label></th>
                <td> <textarea name="description" id="detail" cols="100" rows="12"><?= $description ?></textarea></td>
            </tr>
            <tr>
                <th scope="row"><label>Chi tiết</label></th>
                <td></td>
            </tr>
        </tbody>
    </table>
    <textarea name="detail" id="detail2" cols="100" rows="30"><?= $detail ?></textarea>
    <div>

        <input name="view" readonly value="0" type="hidden" value="<?= $view ?>" style="display: none;">
    </div>
    <div>
        <?php date_default_timezone_set("Asia/Ho_Chi_Minh");
        $a = date("Y-m-d"); ?>
        <input name="created_at" type="hidden" value="<?= $created_at ?>" style="display: none;">
    </div>
    <div>

        <input name="updated_at" value="<?php echo "$a" ?>" style="display: none;">
    </div>
    <div>
        <button name="btn_update" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Cập nhật</button>
        <button type="reset" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Nhập lại</button>
        <a href="index.php" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Thêm mới</a>
        <a href="index.php" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Danh sách</a>
    </div>
    </div>
</form>