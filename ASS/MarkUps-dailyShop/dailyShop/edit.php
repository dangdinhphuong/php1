<?php
require_once "connection.php";
if (isset($_POST['btn'])) {
	extract($_REQUEST);
	// nếu người dùng cập nhật ảnh mới:
	if ($_FILES['pro_image']['size'] > 0) {
		$image = $_FILES['pro_image']['name'];
	}
	$sql = "UPDATE products SET cate_id='$cate_id',pro_name ='$pro_name ',pro_image='$pro_image', intro='$intro',detail ='$detail ',detail='$detail',quantity='$quantity'  WHERE pro_id= $pro_id";
	$a = var_dump("$sql");
	// chuẩn bị:
	$stmt = $conn->prepare($sql);
	//thực thi
	if ($stmt->execute()) {
		$message = " Update thành công";
		// Update img
		if ($_FILES['pro_image']['size'] > 0) {
			move_uploaded_file($_FILES['image']['tmp_name'], './images/' . $pro_image);
		}
		header("location:Administration.php?messger=Thêm dữ liệu thành công#sp");
		die;
	} else {
		$message = " Update error";
	}
}


// lấy id trên thanh URL
$pro_id = $_GET['id'];
// câu lênh sql theo điều kiện id
$sql = "SELECT*FROM products WHERE pro_id= $pro_id";
// chuẩn bị
$stmt = $conn->prepare($sql);
//thực thi
$stmt->execute();
//lấy 1 dòng dữ liệu
$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>

<head>
	<title>Administration/edit</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<!-- <link rel="icon" type="image/png" href="assets/AT-pro-logo.png"/> -->

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.tiny.cloud/1/ld34vclndumv7xny2s3pnsrpxwoe9floxn96fpbl57r085kv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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

				<img src="assets/AT-pro-white1.png" alt="ATPro logo" class="logo logo-light">
				<img src="assets/AT-pro-black1.png" alt="ATPro logo" class="logo logo-dark">
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
				<ul id="notification-menu" class="dropdown-menu notification-menu">
					<div class="dropdown-menu-header">
						<span>
							Notifications
						</span>
					</div>
					<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
					</div>
					<div class="dropdown-menu-footer">
						<span>
							View all notifications
						</span>
					</div>
				</ul>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="assets/beauty_20200521162747.jpg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
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
								<div>
									<i class="far fa-credit-card"></i>
								</div>
								<span>Payments</span>
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
						<li class="dropdown-menu-item">
							<a href="logout.php" class="dropdown-menu-link">
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Logout</span>
							</a>
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
				<a href="index.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-home"></i>

					</div>
					<span>
						Trang Chủ
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#sp" class="sidebar-nav-link ">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<span>Sản Phẩm</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#dm" class="sidebar-nav-link">
					<div>
						<i class="fas fa-book-open"></i>
					</div>
					<span>Danh Mục</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#add" class="sidebar-nav-link">
					<div>
						<i class="fab fa-accusoft"></i>
					</div>
					<span>Thêm sản phẩm</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#edit" class="sidebar-nav-link active">
					<div>
						<i class="fas fa-spinner"></i>
					</div>
					<span>Sửa sản phẩm</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-check-circle"></i>
					</div>
					<span>Pellentesque</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-bug"></i>
					</div>
					<span>Morbi</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-chart-line"></i>
					</div>
					<span>Praesent</span>
				</a>
			</li>

			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-adjust"></i>
					</div>
					<span>Morbi</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fab fa-algolia"></i>
					</div>
					<span>Praesent</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-audio-description"></i>
					</div>
					<span>Pellentesque</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3>100+</h3>
					<p>To do</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>100+</h3>
					<p>In progress</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3>100+</h3>
					<p>Completed</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-bug"></i>
					</p>
					<h3>100+</h3>
					<p>Issues</p>
				</div>
			</div>
		</div>

		<div class="row" id="add">

			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Sửa sản phẩm
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">

						<table>
							<thead>
								<form action="" method="post" enctype="multipart/form-data">
									<input type="hidden" name="pro_id" id="" value="<?= $result['pro_id'] ?>">
									<tr>
										<th>Cate_id</th>
										<td><input type="number" placeholder="cate_id" name="cate_id" value="<?= $result['cate_id'] ?>"></td>
									</tr>
									<tr>
										<th>Pro_name</th>
										<td><input type="text" placeholder="pro_name" name="pro_name" value="<?= $result['pro_name'] ?>"></td>
									</tr>
									<tr>
										<th>Pro_image</th>
										<td><input type="file" name="pro_image" id="">
											<?php if (!empty($result['pro_image'])) : ?>
												<br>
												<input type="hidden" name="pro_image" value="<?= $result['pro_image'] ?>">
												<img src="../images/<?= $result['pro_image'] ?>" width="120" alt="">
											<?php endif; ?>
										</td>
									</tr>
									<tr>
										<th>Price</th>

										<td><input type="number" placeholder="price" name="price" <?= $result['price'] ?>></td>
									</tr>
									<tr>
										<th>Quantity</th>
										<td>
											<input type="number" placeholder="quantity" name="quantity" <?= $result['quantity'] ?>></td>
									</tr>
									<tr>
										<th>Intro</th>
										<td><textarea name="intro" placeholder="Intro" id="" cols="50" rows="4" <?= $result['intro'] ?>></textarea></td>
									</tr>
									<tr>
										<th>Detail</th>
										<td><textarea id="detail" name="detail" placeholder="Deltai" id="" cols="50" rows="15" <?= $result['detail'] ?>></textarea></td>
									</tr>
									<tr>
										<button type="submit" name="btn">Save</button>

									</tr>
								</form>
							</thead>

						</table>


					</div>
				</div>
			</div>
		</div>
	</div>
	<?php

	?>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>

</html>