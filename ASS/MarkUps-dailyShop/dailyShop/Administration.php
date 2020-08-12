<?php
require_once "connection.php";
// câu lện sql select
$sql = "SELECT * FROM categories INNER JOIN products ON categories.cate_id=products.cate_id";

// echo $sql;
//chuẩn bị

$stmt = $conn->prepare($sql);
//thực hiện
if ($stmt->execute()) {
	//lấy dữ liệu ra
	$result1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<?php //hiển thị danh mục
require_once "connection.php";
// câu lện sql select
$sql = "SELECT * FROM categories";

// echo $sql;
//chuẩn bị

$stmt = $conn->prepare($sql);
//thực hiện
$stmt->execute();
//lấy dữ liệu ra

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php //đếm danh mục
require_once "connection.php";
$sql1 = "SELECT COUNT(pro_id)FROM products";
$stmt = $conn->prepare($sql1);
//thực hiện
$stmt->execute();
//lấy dữ liệu ra
$count_sp = $stmt->fetch(PDO::FETCH_ASSOC);


?>
<?php //đếm sp
require_once "connection.php";
$sql2 = "SELECT COUNT(pro_id)FROM products WHERE cate_id='1'";
$stmt = $conn->prepare($sql2);
//thực hiện
$stmt->execute();
//lấy dữ liệu ra
$count_sp2 = $stmt->fetch(PDO::FETCH_ASSOC);


?>
<?php //đếm sp nam
require_once "connection.php";
$sql3 = "SELECT COUNT(pro_id)FROM products WHERE cate_id='2'";
$stmt = $conn->prepare($sql3);
//thực hiện
$stmt->execute();
//lấy dữ liệu ra
$count_sp3 = $stmt->fetch(PDO::FETCH_ASSOC);


?>
<?php //đếm sp nữ
require_once "connection.php";
$sql4 = "SELECT COUNT(pro_id)FROM products WHERE cate_id='3'";
$stmt = $conn->prepare($sql4);
//thực hiện
$stmt->execute();
//lấy dữ liệu ra
$count_sp4 = $stmt->fetch(PDO::FETCH_ASSOC);


?>
<?php //đếm sp thể thap
require_once "connection.php";
$sql0 = "SELECT COUNT(cate_id)FROM categories";
$stmt = $conn->prepare($sql0);
//thực hiện
$stmt->execute();
//lấy dữ liệu ra
$count_dm = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>

<head>
	<title>Administration</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<!-- <link rel="icon" type="image/png" href="assets/AT-pro-logo.png"/> -->

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->
	<script src="https://cdn.tiny.cloud/1/ld34vclndumv7xny2s3pnsrpxwoe9floxn96fpbl57r085kv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<!-- BOOTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
		tinymce.init({
			selector: '#detail2',
			plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			toolbar_mode: 'floating',
		});
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
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
					<i class="fas fa-moon dark-icon" style="margin-right: 20px !important;"></i>
					<i class="fas fa-sun light-icon" style="margin-right: 20px !important;"></i>
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
				<a href="#sp" class="sidebar-nav-link active">
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
				<a href="#add_dm" class="sidebar-nav-link">
					<div>
						<i class="fab fa-accusoft"></i>
					</div>
					<span>Thêm danh mục</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#add" class="sidebar-nav-link">
					<div>
						<i class="fas fa-spinner"></i>
					</div>
					<span>Thêm sản phẩm</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#edit" class="sidebar-nav-link">
					<div>
						<i class="fas fa-check-circle"></i>
					</div>
					<span>Sửa sản phẩm</span>
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
			<div class="col-3 ">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3>100+</h3>
					<p>To do</p>
				</div>
			</div>
			<div class="col-3 ">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>100+</h3>
					<p>In progress</p>
				</div>
			</div>
			<div class="col-3 ">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3>100+</h3>
					<p>Completed</p>
				</div>
			</div>
			<div class="col-3 ">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-bug"></i>
					</p>
					<h3>100+</h3>
					<p>Issues</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Thông số dữ liệu
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<div class="progress-wrapper">
							<p>
								<i class="fas fa-minus"></i></i> Số lượng danh mục: <?= $count_dm['COUNT(cate_id)'] ?><!-- đến số lượng-->
								<span class="float-right">100%</span>
							</p>
							<div class="progress">
								<div class="bg-success" style="width: 100%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								<i class="fas fa-minus"></i></i> Số lượng sản phẩm: <?= $count_sp['COUNT(pro_id)'] ?>
								<span class="float-right">100%</span>
							</p>
							<div class="progress">
								<div class="bg-primary" style="width:100%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								<i class="fas fa-plus"></i>Sản phẩm nam: <?= $count_sp2['COUNT(pro_id)'] ?>
								<span class="float-right">33.3%</span>
							</p>
							<div class="progress">
								<div class="bg-warning" style="width:33.3%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								<i class="fas fa-plus"></i>Sản phẩm nữ: <?= $count_sp3['COUNT(pro_id)'] ?>
								<span class="float-right">33.3%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:33.3%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								<i class="fas fa-plus"></i>Sản phẩm thể thao: <?= $count_sp4['COUNT(pro_id)'] ?>
								<span class="float-right">33.3%</span>
							</p>
							<div class="progress">
								<div class="bg-primary" style="width:33.3%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header" id="dm">
						<h3>
							Danh Mục
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>Cate_id</th>
									<th>Cate_name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($result as $r) : ?>
									<tr>

										<td><?= $r['cate_id'] ?></td><!-- hiển thị cate_id -->
										<td><?= $r['cate_name'] ?></td><!-- hiển thị tên -->
										<td>
											<button><a href="#add_dm" style=" text-decoration: none ; color: red; font-weight:  bold">Thêm Danh Mục</a></button><!-- nút chuyển đến phần add danh mục -->
											<button><a href="edit_dm.php?id=<?= $r['cate_id'] ?>" style=" text-decoration: none ; color: red; font-weight:  bold">Sửa</a></button><!-- sủa danh mục theo id -->
											<button><a onclick="return confirm('Ban có muốn xóa hay không ?')" href="del_dm.php?id=<?= $r['cate_id'] ?>" style=" text-decoration: none ; color: red; font-weight:  bold">Xóa</a></button><!-- xáo danh mục theo id -->
										</td>
									</tr>

								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="sp">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Sản Phẩm
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div id="accordion">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										MEN <i class="fas fa-caret-down" style="color: gray; font-size:30px "></i>
									</button>
								</h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<div class="card-content">
										<table>
											<thead>
												<tr>
													<th>Pro_id</th>
													<th>Cate_id</th>
													<th>Pro_name</th>
													<th>Pro_image</th>
													<th>price_start</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Intro</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($result1 as $r) : ?>

													<?php if ($r['cate_id'] == 1) { ?>
														<tr>
															<td><?= $r['pro_id'] ?></td>
															<td><?= $r['cate_id'] ?></td>
															<td><?= $r['pro_name'] ?></td>
															<td> <img src="../images/<?= $r['pro_image'] ?>" width="120"></td>
															<td><?= $r['price_start'] ?></td>
															<td><?= $r['price'] ?></td>
															<td><?= $r['intro'] ?></td>

															<td><?= $r['quantity'] ?></td>
															<td>
																<button><a href="edit.php?id=<?= $r['pro_id'] ?>">Sửa</a></button>
																<br>
																<button><a onclick="return confirm('Ban có muốn xóa hay không ?')" href="del.php?id=<?= $r['pro_id'] ?>">Xóa</a></button>
															</td>
														</tr>
													<?php } ?>
												<?php endforeach; ?>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										WOMEN<i class="fas fa-caret-down" style="color: gray; font-size:30px "></i>
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									<div class="card-content">
										<table>
											<thead>
												<tr>
													<th>Pro_id</th>
													<th>Cate_id</th>
													<th>Pro_name</th>
													<th>Pro_image</th>
													<th>price_start</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Intro</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($result1 as $r) : ?>
													<!--dùng vòng lặp để in ra các sản phẩm  -->

													<?php if ($r['cate_id'] == 2) { ?>
														<!--hiển thị các sản phẩm có id=3 -->
														<tr>
															<td><?= $r['pro_id'] ?></td> <!-- hiển thị pro_id -->
															<td><?= $r['cate_id'] ?></td><!-- hiển thị cate_id -->
															<td><?= $r['pro_name'] ?></td><!-- hiển thị tên -->
															<td> <img src="../images/<?= $r['pro_image'] ?>" width="120"></td><!-- hiển thị ảnh sản phẩm -->
															<td><?= $r['price_start'] ?></td><!-- hiển thị giá bắt đầu -->
															<td><?= $r['price'] ?></td><!-- hiển thị giá bán -->
															<td><?= $r['intro'] ?></td><!-- hiển thị mã sản phẩm -->
															<td><?= $r['quantity'] ?></td><!-- hiển thị mô tả sản phẩm -->
															<td>
																<button><a href="edit.php?id=<?= $r['pro_id'] ?>">Sửa</a></button>
																<br>
																<button><a onclick="return confirm('Ban có muốn xóa hay không ?')" href="del.php?id=<?= $r['pro_id'] ?>">Xóa</a></button>
															</td>
														</tr>
													<?php } ?>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										SPORTS <i class="fas fa-caret-down" style="color: gray; font-size:30px "></i>
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									<div class="card-content">
										<table>
											<thead>
												<tr>
													<th>Pro_id</th>
													<th>Cate_id</th>
													<th>Pro_name</th>
													<th>Pro_image</th>
													<th>price_start</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Intro</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($result1 as $r) : ?>
													<!--dùng vòng lặp để in ra các sản phẩm  -->

													<?php if ($r['cate_id'] == 3) { ?>
														<!--hiển thị các sản phẩm có id=3 -->
														<tr>
															<td><?= $r['pro_id'] ?></td>
															<td><?= $r['cate_id'] ?></td>
															<td><?= $r['pro_name'] ?></td>
															<td> <img src="../images/<?= $r['pro_image'] ?>" width="120"></td>
															<td><?= $r['price_start'] ?></td>
															<td><?= $r['price'] ?></td>
															<td><?= $r['intro'] ?></td>
															<td><?= $r['quantity'] ?></td>
															<td>
																<button><a href="edit.php?id=<?= $r['pro_id'] ?>">Sửa</a></button>
																<br>
																<button><a onclick="return confirm('Ban có muốn xóa hay không ?')" href="del.php?id=<?= $r['pro_id'] ?>">Xóa</a></button>
															</td>
														</tr>
													<?php } ?>
													<!-- kết thúc if -->
												<?php endforeach; ?>
												<!-- kết thúc vòng lặp -->
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12" id="add">
				<div class="card">
					<div class="card-header">
						<h3>
							thêm sản phẩm
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<form action="add-list.php" method="post" enctype="multipart/form-data">
									<tr>
										<th>Cate_id</th>
										<td> <select name="cate_id" id="">
												<?php foreach ($result as $c) : ?>
													<option value="<?= $c['cate_id'] ?>"><?= $c['cate_name'] ?></option>
												<?php endforeach; ?>
											</select></td>
									</tr>
									<tr>
										<th>Pro_name</th>
										<td><input type="text" placeholder="pro_name" name="pro_name" class="product"></td><!-- nhập  ten  -->
									</tr>
									<tr>
										<th>Pro_image</th>
										<td><input type="file" name="pro_image" id="" class="product"></td><!-- chọn ảnh sp  -->
									</tr>
									<tr>
										<th>price_start</th>

										<td><input type="number" placeholder="price_start" name="price_start" class="product"></td><!-- nhập giá sp ban đầu -->
									</tr>
									<tr>
										<th>Price</th>
										<td><input type="number" placeholder="price" name="price" class="product"></td><!-- nhập bán sp -->
									</tr>
									<tr>
										<th>Quantity</th>
										<td>
											<input type="number" placeholder="quantity" name="quantity" class="product"></td><!-- nhập số lượng sp  -->
									</tr>
									<tr>
										<th>Intro</th>
										<td><textarea name="intro" placeholder="Intro" id="" cols="50" rows="4" class="product"></textarea></td><!-- nhập mã sản phẩm  -->
									</tr>
									<tr>
										<th>Detail</th>
										<td><textarea id="detail2" name="detail" placeholder="Deltai" id="" cols="50" rows="15" class="product"></textarea></td><!-- nhập mô tả sp  -->
									</tr>
									<tr>
										<button type="submit" name="btn" id="se" >Save</button><!-- nhấn save để giửi thông tin -->
									</tr>
								</form>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12" id="add_dm">
				<div class="card">
					<div class="card-header">
						<h3>
							thêm danh mục
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<form action="add-list.php" method="post" enctype="multipart/form-data">
									<tr>
										<th>cate_name</th>
										<td><input type="text" placeholder="cate_name" name="cate_name" class="validate"></td><!-- nhập  ten danh mục -->
									</tr>
									<tr>
										<th>cate_image</th>
										<td><input type="file" name="cate_image" class="validate"></td><!-- chọn ảnh  -->
									</tr>
									<tr>
										<th>description</th>
										<td><textarea type="text" placeholder="description" name="description" cols="80" rows="10" class="validate"></textarea></td><!-- nhập mô tả   -->
									</tr>

									<tr>
										<button type="submit" name="save" id="save">Save</button><!-- nhấn save để giửi thông tin -->

									</tr>
								</form>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end main content -->
	<script>
		var vld = document.getElementsByClassName("validate");
		var dem = document.getElementsByClassName("product");
		document.getElementById("save").onclick = function() {
			for (var a = 0; a < vld.length; a++) {

				if (vld[a].value == "") {
					alert("điền đủ thông tin");
					return false;
				}
			}


		}
		document.getElementById("").onclick = function() {
			for (var a = 0; a < dem.length; a++) {

				if (dem[a].value == "") {
					alert("điền đủ thông tin sản phẩm");
					return false;
				}
			}


		}
	</script>


	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
	<!-- BOOTRAP -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>