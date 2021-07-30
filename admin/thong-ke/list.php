<div class="card-header">
    <h3>
        THỐNG KÊ HÀNG HÓA TỪNG LOẠI
            <a href="index.php?chart" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px">Xem biểu đồ</a>

    </h3>

    <i class="fas fa-ellipsis-h"></i>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">LOẠI HÀNG</th>
            <th scope="col">SỐ LƯỢNG</th>
            <th scope="col">GIÁ CAO NHẤT</th>
            <th scope="col">GIÁ TRUNG BÌNH</th>
            <th scope="col">GIÁ THẤP NHẤT</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($items as $item) {
            extract($item);
        ?>
            <tr>
                <th scope="row"><?= $name ?></th>
                <td><?= $so_luong ?></td>
                <td><?= number_format($gia_max, 2) ?> VND</td>
                <td><?= number_format($gia_avg, 2) ?> VND</td>
                <td><?= number_format($gia_min, 2) ?> VND</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<br>
<br>
<div id="piechart_3d" style=" height: 400px;"></div>