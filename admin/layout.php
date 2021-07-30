<?php

//kiểm tra nếu ko có session thì điều hướng về trong login
if (!isset($_SESSION['user'])) {
	$login = "<a href='' data-toggle='modal' data-target='#login-modal'>Đăng Nhập</a>";
} else {
	$a=$_SESSION['user']['image'];
	$login = "<a href='$ADMIN_URL/hang-hoa/logout.php'' class='dropdown-menu-link'><div><i class='fas fa-sign-out-alt'></i></div><span>Đăng Xuất</span></a>";							
    $image2="<img src='../../content/images/users/$a' alt='User image' class='dropdown-toggle' data-toggle='user-menu'>";							
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>ATPro Admin</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/AT-pro-logo.png" />

	<!-- chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load("current", {
			packages: ["corechart"]
		});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Loại', 'Số Lượng'],
				<?php
				foreach ($items as $item) {
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
	<script src="https://cdn.tiny.cloud/1/ld34vclndumv7xny2s3pnsrpxwoe9floxn96fpbl57r085kv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<link rel="stylesheet" type="text/css" href="../../content/fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="../../content/css/style.css">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script>
		tinymce.init({
			selector: '#detail2',
			plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			toolbar_mode: 'floating',
		});
	</script>
	<script>
		tinymce.init({
			selector: '#detail',
			plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			toolbar_mode: 'floating',
		});
	</script>
</head>

<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<div class="logo logo-light" style="font-family: 'Raleway', sans-serif; font-size: 28px;">
					<span class="fa fa-shopping-cart" style="display: inline-block;float: left;font-size: 50px; color: #ff6666;"></span>
					<p style="    display: inline-block; float: left;font-weight: bold;margin-bottom: 0;margin-left: 5px;margin-top: -5px;">
						Phương<strong style="color: #ff6666;font-weight: bold;">Đình</strong> <span style="display: block;font-size: 12px;font-weight: normal;letter-spacing: 1.5px;text-transform: uppercase;">Phục vụ bạn là hạnh phúc của chúng tôi</span></p>
				</div>
				<div class="logo logo-dark" style="font-family: 'Raleway', sans-serif; font-size: 28px;">
					<span class="fa fa-shopping-cart" style="display: inline-block;float: left;font-size: 50px; color: #ff6666;"></span>
					<p style="    display: inline-block; float: left;font-weight: bold;margin-bottom: 0;margin-left: 5px;margin-top: -5px;color: #fff;">
						Phương<strong style="color: #ff6666;font-weight: bold;">Đình</strong> <span style="display: block;font-size: 12px;font-weight: normal;letter-spacing: 1.5px;text-transform: uppercase;">Phục vụ bạn là hạnh phúc của chúng tôi</span></p>
				</div>
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		<form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="What you looking for...">
			<i class="fas fa-search"></i>
		</form>
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link">
					<i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
					<span class="navbar-badge">15</span>
				</a>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					
					<?php if (isset($image2)) {echo $image2;} ?>
					<ul id="user-menu" class="dropdown-menu">
						<li class="dropdown-menu-item">
							<a class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Profile</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-cog"></i>
								</div>
								<span>Settings</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-spinner"></i>
								</div>
								<span>Projects</span>
							</a>
						</li>
						<li class="dropdown-menu-item"><?php if (isset($login)) {echo $login;} ?>
															
					
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="<?= $SITE_URL ?>/trang-chinh" class="sidebar-nav-link active">
					<div>
						<i class="fas fa-home"></i>
					</div>
					<span>
						Trang chủ
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="<?= $ADMIN_URL ?>/loai-hang" class="sidebar-nav-link ">
					<div>
						<i class="fab fa-accusoft"></i>
					</div>
					<span>Loại hàng</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="<?= $ADMIN_URL ?>/hang-hoa" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tasks"></i>
					</div>
					<span>Hàng hóa</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="<?= $ADMIN_URL ?>/khach-hang" class="sidebar-nav-link">
					<div>
						<i class="fas fa-user"></i>
					</div>
					<span>Khách hàng</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="<?= $ADMIN_URL ?>/binh-luan" class="sidebar-nav-link">
					<div>
						<i class="fas fa-audio-description"></i>
					</div>
					<span>Bình luận</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="<?= $ADMIN_URL ?>/thong-ke" class="sidebar-nav-link">
					<div>
						<i class="fas fa-chart-line"></i>
					</div>
					<span>Thống kê</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="row ">
			<div class="col-2 col-m-6 col-sm-6">
				<a href="<?= $SITE_URL ?>/trang-chinh" style="text-decoration: none;">
					<div class="counter " style="background:#7F0000;">
						<p>
							<i class="fas fa-home"></i>
						</p>
						<h3>100+</h3>
						<p>Trang chủ</p>
					</div>
				</a>
			</div>
			<div class="col-2 col-m-6 col-sm-6">
				<a href="<?= $ADMIN_URL ?>/loai-hang" style=" 	text-decoration: none;">
					<div class="counter bg-primary">
						<p>
							<i class="fab fa-accusoft"></i>
						</p>
						<h3>100+</h3>
						<p>Loại hàng</p>
					</div>
				</a>
			</div>
			<div class="col-2 col-m-6 col-sm-6">
				<a href="<?= $ADMIN_URL ?>/hang-hoa" style=" 	text-decoration: none;">
					<div class="counter bg-warning">
						<p>
							<i class="fas fa-tasks"></i>
						</p>
						<h3>100+</h3>
						<p>Hàng hóa</p>
					</div>
				</a>
			</div>
			<div class="col-2 col-m-6 col-sm-6">
				<a href="<?= $ADMIN_URL ?>/khach-hang" style=" 	text-decoration: none;">
					<div class="counter bg-success">
						<p>
							<i class="fas fa-user"></i>
						</p>
						<h3>100+</h3>
						<p>Khách hàng</p>
					</div>
				</a>
			</div>
			<div class="col-2 col-m-6 col-sm-6">
				<a href="<?= $ADMIN_URL ?>/binh-luan" style=" 	text-decoration: none;">
					<div class="counter bg-danger">
						<p>
							<i class="fas fa-audio-description"></i>
						</p>
						<h3>100+</h3>
						<p>Bình luận</p>
					</div>
				</a>
			</div>
			<div class="col-2 col-m-6 col-sm-6">
				<a href="<?= $ADMIN_URL ?>/thong-ke" style="text-decoration: none;">
					<div class="counter " style="background:#342B2B;">
						<p>
							<i class="fas fa-chart-line"></i>
						</p>
						<h3>100+</h3>
						<p>Thống kê</p>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<?php
					require $VIEW_NAME;
					?>
				</div>
			</div>

		</div>
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="../../content/js/index.js"></script>
	<script src="../../content/js/xshop-list.js"></script>
	<!-- end import script -->


</body>

</html>