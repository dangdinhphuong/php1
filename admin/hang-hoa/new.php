<?php
// require_once "validate.php";
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<div class="card-header">
    <h3>
        Thêm sản phẩm
    </h3>
    <i class="fas fa-ellipsis-h"></i>
</div>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div>
        <table>
            <tr>
                <th><label>LOẠI HÀNG</label></th>
                <td> <select name="cate_id">
                        <option value="">Tùy chọn</option>

                        <?php foreach ($loai_select_list as $loai) : ?>
                            <option value="<?= $loai['id'] ?>"<?php if(!empty($cate_id)&& $cate_id==$loai['id'])echo"selected='selected'"  ?>><?= $loai['name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label style="color:red"><?= (isset($errors['cate_id']) ? $errors['cate_id'] : '') ?></label>
                </td>

            </tr>
            <tr>
                <th><label>TÊN SẢN PHẨM</label></th>
                <td><input name="name" value="<?php echo $_POST['name'] ?? '' ?>"><label style="color:red"><?= (isset($errors['name']) ? $errors['name'] : '') ?></label></td>

            </tr>
            <tr>
                <th><label>ĐƠN GIÁ VNĐ</label></th>
                <td> <input name="price" type="number" value="<?php echo $_POST['price'] ?? '0' ?>"><label style="color:red"><?= (isset($errors['price']) ? $errors['price'] : '') ?></label></td>

            </tr>
            <tr>
                <th><label>GIẢM GIÁ %</label></th>
                <td><input name="sale" type="number" value="<?php echo $_POST['sale'] ?? '0' ?>"><label style="color:red"><?= (isset($errors['sale']) ? $errors['sale'] : '') ?></label></td>

            </tr>
            <tr>
                <th><label>HÌNH ẢNH</label></th>
                <td> <input name="image" type="file" value="<?php echo $_POST['image'] ?? '0' ?>"><label style="color:red"><?= (isset($errors['image']) ? $errors['image'] : '') ?></label></td>

            </tr>


            <tr>
                <th><label>CHI TIẾT</label></th>
                <td><textarea name="detail" id="detail2" cols="70" rows="5"><?php echo $_POST['detail'] ?? '' ?></textarea></td>
            </tr>
            <tr>
                <th><label>MÔ TẢ</label></th>
                <td><textarea name="description" id="detail" cols="70" rows="5"><?php echo $_POST['description'] ?? '' ?></textarea></td>
            </tr>
            <tr>
                <th><label>status</label></th>
                <td>
                    <div>
                        <label><input name="status" value="1" type="radio" checked>Hoạt động</label>
                        <label><input name="status" value="0" type="radio">Tạm dừng</label>
                    </div>
                </td>
            </tr>
        </table>
        <div>

            <?php date_default_timezone_set("Asia/Ho_Chi_Minh");
            $a = date("Y-m-d"); ?>

            <input name="created_at" value="<?php echo "$a" ?>" style="display: none;">
        </div>
        <div>

            <input name="view" readonly value="0" style="display: none;">
        </div>
        <div>
            <input name="updated_at" type="hidden" value="00/00/0000" readonly style="display: none;">
        </div>
        <div>

        </div>
    </div>
    <button name="btn_insert" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Thêm mới</button>
    <button type="reset" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Nhập lại</button>
    <a href="index.php" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Danh sách</a>
</form>