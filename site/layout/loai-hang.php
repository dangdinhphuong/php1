<!DOCTYPE html>
<html>
    <body>
        <div>
            <div>DANH MỤC</div>
            <div>
                <?php
                    require '../../dao/loai.php';
                    $loai_array = loai_select_all();
                    foreach ($loai_array as $loai) {
                        $href = "$SITE_URL/hang-hoa/liet-ke.php?id=$loai[id]";
                        echo "<a href='$href'>$loai[name]</a>";
                    }
                ?>
            </div>
            <div>
                <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                    <input name="keywords" placeholder="Từ khóa tìm kiếm">
                    <button type="submit">giui</button>
                </form>                
            </div>            
        </div>
    </body>
</html>

