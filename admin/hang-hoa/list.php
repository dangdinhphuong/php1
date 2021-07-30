<?php
if (strlen($MESSAGE)) {
    echo "<h5 >$MESSAGE</h5>";
}
?>
<div class="card-header">
    <h3>
        Sản Phẩm:
        <?php
        foreach ($loai_hang as $item) {
            extract($item);
        ?>
            <a href="index.php?product&cate_id=<?= $id ?>" style="padding: 10px;border: 1px solid black ;border-radius:3px;text-decoration: none; color: red ;font-size: 20px"><?= $name ?></a>
        <?php
        }
        ?>
    </h3>
    <i class="fas fa-ellipsis-h"></i>
</div>
<form action="index.php" method="post">
    <table boder="1">
        <thead>
            <tr>
                <th>chọn</th>
                <th>id</th>
                <th>name</th>
                <th>cate_id</th>
                <th>image</th>
                <th>price</th>
                <th>sale</th>
                <th>status</th>
                <th>view</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Thông Tin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as $item) {
                extract($item);
            ?>
                <tr>
                    <th><input type="checkbox" name="id[]" value="<?= $id ?>"></th>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td><?= $cate_id ?></td>
                    <!-- <td><?= $description ?></td> -->
                    <td><img src="../../content/images/products/<?= $image ?>" alt="" width="60px" height="100px"></td>
                    <td><?= $price ?></td>
                    <?php
                    $toll_sale = 100 - $sale;
                    $tich = $toll_sale * $price;
                    $price_sale = $tich / 100;
                    ?>
                    <td><?= $sale ?></td>
                    <td><?= $status ? 'Hoạt động' : 'Tạm dừng' ?></td>
                    <td><?= $view ?></td>
                    <td><?= $created_at ?></td>
                    <td><?= $updated_at ?></td>
                    <td><a href="<?= $SITE_URL?>/hang-hoa/index.php?detail&id=<?= $id ?>&cate_id=<?= $cate_id ?>">Chi tiết</a></td> 
                    <td>
                        <a href="index.php?btn_edit&id=<?= $id ?>" class="btn"style=" text-decoration: none; padding: 10px;background: #218838;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Sửa</a>
                        <a onclick="return confirm('Ban có muốn xóa hay không ?')" href="index.php?btn_delete&id=<?= $id ?>"style=" text-decoration: none; padding: 10px;background: #C82333;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <button id="check-all" type="button" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Chọn tất cả</button>
                    <button id="clear-all" type="button" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Bỏ chọn tất cả</button>
                    <button id="btn-delete" name="btn_delete" onclick="return confirm('Ban có muốn xóa hay không ?')" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Xóa các mục chọn</button>
                    <a href="index.php?btn_new" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Nhập thêm</a>
                </td>




                <td colspan="6">
                    <a href="?btn_list&page_no=1&cate_id=<?= $items[0]['cate_id'] ?>" style="padding: 10px; text-decoration: none;border: 1px solid black;border-radius: 3px; color: black ;font-size: 13px">|&lt;</a>
                    <a href="?btn_list&page_no=<?= $_SESSION['prev_page_loai'] ?>&cate_id=<?= $items[0]['cate_id'] ?>" style="padding: 10px; text-decoration: none;border: 1px solid black;border-radius: 3px; color: black ;font-size: 13px">
                        <<<</a> <?php for ($i = 1; $i <= $_SESSION['total_page_loai']; $i++) { ?> <a href="?btn_list&page_no=<?= $i ?>&cate_id=<?= $items[0]['cate_id'] ?>" style="padding: 10px; text-decoration: none;border: 1px solid black;border-radius: 3px; color: black ;font-size: 13px"><?php echo "$i" ?>
                    </a>
                <?php } ?>
                <a href="?btn_list&page_no=<?= $_SESSION['next_page_loai'] ?>&cate_id=<?= $items[0]['cate_id'] ?>" style="padding: 10px; text-decoration: none;border: 1px solid black;border-radius: 3px; color: black ;font-size: 13px">>>></a>
                <a href="?btn_list&page_no=<?= $_SESSION['total_page_loai'] ?>&cate_id=<?= $items[0]['cate_id'] ?>" style="padding: 10px; text-decoration: none;border: 1px solid black;border-radius: 3px; color: black ;font-size: 13px">>|</a>
                </td>
            </tr>
        </tfoot>
    </table>
</form>