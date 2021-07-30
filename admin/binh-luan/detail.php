<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h3>CHI TIẾT BÌNH LUẬN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php?product_id=<?=$product_id?>" method="post">
            <h3> </h3>
            <table>
                <thead>
                    <tr>
                        <th>CHỌN</th>
                        <th>HÀNG HÓA:</th>
                        <th>NỘI DUNG</th>
                        <th>NGÀY BL</th>
                        <th>NGƯỜI BL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="id[]" value="<?=$id?>"></th>
                        <td><?=$items[0]['name']?></td>
                        <td><?=$content?></td>
                        <td><?=$created_at?></td>
                        <td><?=$fullname ?></td>
                        <td>
                            <a onclick="return confirm('Ban có muốn xóa hay không ?')" href="index.php?btn_delete&id=<?=$id?>&product_id=<?=$product_id?>">Xóa</a>
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
                            <button id="clear-all" type="button"style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete"style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Xóa các mục chọn</button>
                             <a href="index.php" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Trở lại</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>
