<!DOCTYPE html>
<html>

<head>
	<title>ATPro Admin</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/AT-pro-logo.png" />
	<style>

       #btn, button{
            padding: 10px;background: #0069D9;border: none;border-radius: 3px; color: #fff ;font-size: 13px;
        }
        .addl{
            width: 256px;
            margin:0px auto;
             /* border: 1px solid red; */
        }
        input{
            width: 100%;
        }

    </style>
<!-- chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Loại', 'Số Lượng'],
                <?php
                foreach ($items as $item){
                    echo "['$item[name]',     $item[so_luong]],";
                }
                ?>
            ]);

            var options = {
              title: 'TỶ LỆ HÀNG HÓA',
              is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
          }
        </script>
	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="../../content/fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->
	
	<link rel="stylesheet" type="text/css" href="../../content/css/style.css">
	<script src="https://code.jquery.com/jquery-latest.js"></script>






</head>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<div class="card-header">
    <h3>
        Thêm loại hàng
    </h3>
    <i class="fas fa-ellipsis-h"></i>
</div>
<!-- <div class="addl" > -->

<form action="index.php" method="post">
    <div>
        <label>Mã loại</label><br>
        <input name="id" value="auto number"><br>
    </div>

    <div>
        <label>Tên loại</label><br>
        <input name="name"value="<?php echo $_POST['name'] ?? '' ?>"><label style="color:red"><?= (isset($errors['name']) ? $errors['name'] : '') ?></label><br>
    </div><br>
    <div>
        <button name="btn_insert" style="padding: 10px;background: #0069D9;border: none;border-radius: 3px;">Thêm mới</button>
        <button type="reset">Nhập lại</button>
        <a href="index.php" id="btn">Danh sách</a>
    </div><br>
</form>
<!-- </div> -->
</body>
</html>