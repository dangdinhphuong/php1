
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <div class="card-header">
    <h3>
        Sản Phẩm:<?= $items['name']?>
        <a href="index.php" class="btn">Back</a>
    </h3>
    <i class="fas fa-ellipsis-h"></i>
</div>
        <form action="index.php" method="post">
            <table boder="1">
                <thead>
                    <tr>
                       
                        <th>Chi tiết sản phẩm </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                                            
                        <td><?=$items['detail']?></td>
                    </tr>
                </tbody>
            </table>
        </form>

