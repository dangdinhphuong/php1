<!DOCTYPE html>
<html>
    <body>
        <div>
            <div>TOP 10 YÊU THÍCH</div>
            <div>
                <?php
                    require_once '../../dao/hang-hoa.php';
                    $hh_array = hang_hoa_select_top10();
                    foreach ($hh_array as $hh) {
                        $href = "$SITE_URL/hang-hoa/chi-tiet.php?id=$hh[id]";
                        echo "
                            <div>
                                <div><img src='$CONTENT_URL/images/products/$hh[image]'></div>
                                <div><a href='$href'>$hh[name]</a></div>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
