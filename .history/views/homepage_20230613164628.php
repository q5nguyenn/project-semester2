<?php
include("../database/database.php");
$selects_slider = "SELECT * FROM sliders ORDER BY id DESC LIMIT 3";
$query_slider = mysqli_query(openConnection(), $selects_slider);
$select_topsale = "SELECT courses.*, users.name as teacher_name, users.thumbnail as teacher_thumbnail FROM `courses` JOIN users  ON courses.teacher_id = users.id ORDER BY teacher_id DESC LIMIT 12";
$query_topsale = mysqli_query(openConnection(), $select_topsale);
$select_sale = "SELECT courses.*, users.name as teacher_name, users.thumbnail as teacher_thumbnail FROM `courses` JOIN users  ON courses.teacher_id = users.id AND ((courses.price - courses.discount)/courses.price)*100 > 50 ORDER BY teacher_id DESC LIMIT 8";
$query_sale = mysqli_query(openConnection(), $select_sale);
$select_starup = "SELECT courses.*,  users.name as teacher_name, users.thumbnail as teacher_thumbnail FROM `courses` JOIN users  ON courses.teacher_id = users.id JOIN departments ON courses.department_id = departments.id AND courses.department_id = 24 ORDER BY teacher_id  DESC LIMIT 5";
$query_starup = mysqli_query(openConnection(), $select_starup);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Starclasses</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="public/css/header.css" />
	<link rel="stylesheet" href="../public/css/homepage.css">
	<link rel="stylesheet" href="../public/css/reset.css">
</head>

<body>
	<!-- <header></header> -->
	<header>
		<div class="container-fluid shadow-sm">
			<div class="container d-flex py-1 align-items-center">
				<div>
					<a class="btn fw-bold fs-5" href="index.html">STAR CLASSES</a>
				</div>
				<div class="mx-3 position-relative" id="categories">
					<button class="btn">
						Categories <i class="bi bi-chevron-down"></i>
					</button>
					<div class="position-absolute bg-white p-1 department-links rounded" id="department">
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
						<div class="p-2 btn"><i class="bi bi-translate me-2"></i>Kinh doanh và khởi nghiệp</div>
					</div>
				</div>
				<div class="flex-fill">
					<form class="d-flex rounded-circle position-relative">
						<input class="form-control me-2" type="text" placeholder="Search">
						<i class="bi bi-search position-absolute btn"></i>
					</form>
				</div>
				<div class="pe-auto">
					<a href="#" class="btn btn-light"><i class="bi bi-bag"></i></a>
				</div>
				<div class="ms-2">
					<a class="btn btn-secondary"><i class="bi bi-unlock me-2"></i><span>Kích hoạt khoá học</span></a>
				</div>
				<div>
					<a href="#" class="btn btn-light ms-2">Đăng nhập</a>
					<a href="#" class="btn btn-warning text-white ms-2">Đăng ký</a>
				</div>
				<div class="rounded-circle d-flex bg-primary ms-2 btn text-white fw-bold position-relative" id="user">
					Q
					<div class="position-absolute bg-white p-1 department-links rounded" id="menu">
						<a class="p-2 btn d-block text-start"><i class="bi bi-translate me-2"></i>Vào học</a>
						<a class="p-2 btn d-block text-start"><i class="bi bi-translate me-2"></i>Kích hoạt khoá học</a>
						<a class="p-2 btn d-block text-start"><i class="bi bi-translate me-2"></i>Cập nhật hồ sơ</a>
						<a class="p-2 btn d-block text-start"><i class="bi bi-translate me-2"></i>Giỏ hàng</a>
						<a class="p-2 btn d-block text-start border-top"><i class="bi bi-translate me-2"></i>Đăng
							xuất</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main class="min-vh-100">
		<!-- home page -->
		<div class="container-fluid" style="background-color: #f5f5f5; height: 100%;">
			<div class="container">
				<!--slider -->
				<div class="row">

					<!-- slider -->
					<div class="col-lg-12" style="height: 385px;">
						<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
							<div class="carousel-indicators">
								<button
									style="width: 15px; height: 15px; border-radius: 50%; border: 1px solid #fff; background-color: #f26c4f;"
									type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
									class="active" aria-current="true" aria-label="Slide 1"></button>
								<button
									style="width: 15px; height: 15px; border-radius: 50%; border: 1px solid #fff; background-color: #f26c4f;"
									type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
									aria-label="Slide 2"></button>
								<button
									style="width: 15px; height: 15px; border-radius: 50%; border: 1px solid #fff; background-color: #f26c4f;"
									type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
									aria-label="Slide 3"></button>
							</div>
							<div class="carousel-inner">

								<?php
								while ($list_slider = mysqli_fetch_array($query_slider)) {
									?>
									<div class="carousel-item item-slide" data-bs-interval="3000"
										style="height: 385px; width: 100%;">
										<a href=""><img src="../public<?php echo $list_slider['thumbnail'] ?>"
												class="d-block" alt="..."
												style="height: 100%; width: 100%; object-fit: cover;"></a>
									</div>
									<?php
								}
								?>
							</div>

						</div>
					</div>

				</div>

				<!-- title top sale -->
				<div class="row pt-5">
					<div class="col-lg-12 d-flex justify-content-between">
						<h4 class="float-left text-uppercase fw-bold">Top bán chạy</h4>
						<a href="" class="float-right text-decoration-none text-black">Xem thêm</a>
					</div>
				</div>

				<!-- cart course top sales-->

				<div class="row pt-3">

					<?php
					$discount = 0;
					while ($list_topsale = mysqli_fetch_array($query_topsale)) {

						$discount = (($list_topsale['price'] - $list_topsale['discount']) / $list_topsale['price']) * 100;
						$round_discount = round($discount);
						?>
						<div class="col-lg-3 mb-4">
							<a class="text-decoration-none text-black position-relative" href="#">
								<div class="card shadow bg-body rounded">
									<img src="../public/<?php echo $list_topsale['thumbnail'] ?>" style="width: 100%;"
										class="card-img-top" alt="...">

									<div class="content-course">
										<h3 class="cart-course__title">
											<p>
												<?php echo $list_topsale['name'] ?>
											</p>
										</h3>
										<div class="namegv">
											<span style="float: left;">
												<?php $list_topsale['teacher_name'] ?>
											</span>
											<span class="price-principal">
												<?php echo $list_topsale['price'] ?>
											</span>
										</div>
									</div>
									<div class="price-count" style="clear: both;">
										<div class="rate-combo">
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star" style="font-size: 14px;"></i>
										</div>
										<span class="price-discount">
											<?php echo $list_topsale['discount'] ?>
										</span>
									</div>

								</div>
								<div class="position-absolute top-0 start-0 text-center sale-price rounded">
									<p>-
										<?php echo $round_discount . '%' ?>
									</p>
								</div>
							</a>

						</div>
						<?php
					}
					?>



				</div>


				<!-- title sieu uu dai hom nay -->
				<div class="row pt-5">
					<div class="col-lg-12 d-flex justify-content-between">
						<h4 class="float-left text-uppercase fw-bold">Siêu ưu đãi ngày hôm nay</h4>
						<a href="" class="float-right text-decoration-none text-black">Xem thêm</a>
					</div>
				</div>

				<!-- cart course top sales-->

				<div class="row pt-3">

					<?php
					$discount = 0;
					while ($list_sale = mysqli_fetch_array($query_sale)) {
						$discount = (($list_sale['price'] - $list_sale['discount']) / $list_sale['price']) * 100;
						$round_discount = round($discount);
						?>
						<div class="col-lg-3 mb-4">
							<a class="text-decoration-none text-black position-relative" href="#">
								<div class="card shadow bg-body rounded">
									<img src="../public/<?php echo $list_sale['thumbnail'] ?>" style="width: 100%;"
										class="card-img-top" alt="...">

									<div class="content-course">
										<h3 class="cart-course__title">
											<p>
												<?php echo $list_sale['name'] ?>
											</p>
										</h3>
										<div class="namegv">
											<span style="float: left;">
												<?php echo $list_sale['teacher_name'] ?>
											</span>
											<span class="price-principal">
												<?php echo $list_sale['price'] ?>
											</span>
										</div>
									</div>
									<div class="price-count" style="clear: both;">
										<div class="rate-combo">
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star" style="font-size: 14px;"></i>
										</div>
										<span class="price-discount">
											<?php echo $list_sale['discount'] ?>
										</span>
									</div>
								</div>
								<div class="position-absolute top-0 start-0 text-center sale-price rounded">
									<p>-
										<?php echo $round_discount . '%' ?>
									</p>
								</div>
							</a>

						</div>
						<?php
					}
					?>

				</div>


				<!-- title kinh doanh - khoi nghiep -->
				<div class="row pt-5">
					<div class="col-lg-12 d-flex justify-content-between">
						<h4 class="float-left text-uppercase fw-bold">Kinh doanh khởi nghiệp</h4>
						<a href="" class="float-right text-decoration-none text-black">Xem thêm</a>
					</div>
				</div>

				<!-- cart course kinh doanh khoi nghiep -->

				<div class="row pt-3">

					<?php
					while ($list_startup = mysqli_fetch_array($query_starup)) {

						?>
						<div class="col-lg-3 mb-4">
							<a class="text-decoration-none text-black position-relative" href="#">
								<div class="card shadow bg-body rounded">
									<img src="../public/images/khoa-hoc-dem-hat-guitar-co-ban.jpeg" style="width: 100%;"
										class="card-img-top" alt="...">

									<div class="content-course">
										<h3 class="cart-course__title">
											<p>Học đệm hát Guitar cùng Haketu</p>
										</h3>
										<div class="namegv">
											<span style="float: left;">Hà Kế Tú</span>
											<span class="price-principal">700.000đ</span>
										</div>
									</div>
									<div class="price-count" style="clear: both;">
										<div class="rate-combo">
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star-fill" style="color: #f26c4f; font-size: 14px;"></i>
											<i class="bi bi-star" style="font-size: 14px;"></i>
										</div>
										<span class="price-discount">199.000đ</span>
									</div>


								</div>
								<div class="position-absolute top-0 start-0 text-center sale-price rounded">
									<p>-72%</p>
								</div>
							</a>

						</div>
					<?php
					}
					?>


				</div>


				<!-- title chinh phục mục tiêu của bạn -->
				<div class="row pt-5">
					<div class="col-lg-12 d-flex justify-content-between">
						<h4 class="float-left text-uppercase fw-bold">Chinh phục mục tiêu của bạn</h4>
					</div>
				</div>

				<!-- card chinh phục mục tiêu -->
				<div class="row">
					<div class="col-6" style="height: 290px; overflow: hidden;">
						<a href="" class="position-relative">
							<div class="overlay-box position-absolute"></div>
							<img class="rounded" style="height: 100%;width: 100%; object-fit: cover;"
								src="../public/images/thi-truong.jpeg"
								alt="Đầu tư chứng khoán chuyên nghiệp Đặng Trọng Khang">
							<div class="position-absolute box-txt-new">
								<div class="cl-ct-1 hidden-xs">
									<img src="../public/images/icon-ct-1.png" alt="">
								</div>
								<div class="new-inner-box-ct">
									<p>Đầu tư chứng khoán chuyên nghiệp Đặng Trọng Khang</p>
									<span>5 khóa</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6">
						<a href="" class="position-relative">
							<div class="overlay-box position-absolute"></div>
							<img class="rounded" style="height: 290px; width: 100%;"
								src="../public/images/trien-vong-Digital-Marketing.jpeg" alt="Combo Marketing Online">
							<div class="position-absolute box-txt-new">
								<div class="cl-ct-2 hidden-xs">
									<img src="../public/images/icon-ct-2.png" alt="">
								</div>
								<div class="new-inner-box-ct">
									<p>Đầu tư chứng khoán chuyên nghiệp Đặng Trọng Khang</p>
									<span>5 khóa</span>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- card chinh phục mục tiêu 2 -->
				<div class="row mt-4">
					<div class="col-4 pd-3" style="height: 180px; overflow: hidden;">
						<a href="" class="position-relative">
							<div class="overlay-box position-absolute"></div>
							<img class="rounded" style="height: 100%;width: 100%; object-fit: cover;"
								src="../public/images/015121_combo-ke-toan-misa-excel_thumb.jpeg"
								alt="Đầu tư chứng khoán chuyên nghiệp Đặng Trọng Khang">
							<div class="position-absolute box-txt-new">
								<div class="cl-ct-3 hidden-xs">
									<img src="../public/images/icon-ct-3.png" alt="">
								</div>
								<div class="new-inner-box-ct">
									<p>Combo kế toán misa Excel</p>
									<span>5 khóa</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-4 pd-3">
						<a href="" class="position-relative">
							<div class="overlay-box position-absolute"></div>
							<img class="rounded" style="height: 180px; width: 100%; object-fit: cover;"
								src="../public/images/063856_combotienganhgiaotiep_thumb.jpeg"
								alt="Combo Marketing Online">
							<div class="position-absolute box-txt-new">
								<div class="cl-ct-4 hidden-xs">
									<img src="../public/images/icon-ct-4.png" alt="">
								</div>
								<div class="new-inner-box-ct">
									<p>Tự tin giao tiếp tiếng Anh</p>
									<span>5 khóa</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-4 pd-3">
						<a href="" class="position-relative">
							<div class="overlay-box position-absolute"></div>
							<img class="rounded" style="height: 180px; width: 100%; object-fit: cover;"
								src="../public/images/020626_combo-hoc-tieng-han_thumb.jpeg"
								alt="Combo Marketing Online">
							<div class="position-absolute box-txt-new">
								<div class="cl-ct-5 hidden-xs">
									<img src="../public/images/icon-ct-5.png" alt="">
								</div>
								<div class="new-inner-box-ct">
									<p>Combo học tiếng Hàn</p>
									<span>5 khóa</span>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- button xem tiep -->
				<div class="row mt-4">
					<div class="col-1 m-auto">
						<a href="" class="text-capitalize text-center p-1 text-decoration-none"
							style="background-color: #428bca;border: 3px solid#357ebd;color: #fff; border-radius: 5px;">Xem
							tiếp</a>
					</div>
				</div>

				<!-- title khám phá khoá học -->
				<div class="row mt-5">
					<div class="col-7 m-auto">
						<h4 class="text-uppercase fw-bold text-center" style="font-size: 30px;">Bạn chưa tìm thấy khóa
							học mình quan tâm ? Unica có hơn 2.000 khóa học đang chờ bạn khám phá</h4>
					</div>
				</div>


				<!-- select more course -->
				<div class="row mt-3">
					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-translate mb-2" style="font-size: 28px;"></i>
							<span>Ngoại ngữ</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-graph-up-arrow me-3 mb-2" style="font-size: 28px;"></i>
							<span>Marketing</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-pc-display me-3 mb-2" style="font-size: 28px;"></i>
							<span>Tin học văn phòng</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-brush-fill me-3 mb-2" style="font-size: 28px;"></i>
							<span>Thiết kế</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-tags-fill me-3 mb-2" style="font-size: 28px;"></i>
							<span>Kinh doanh khởi nghiệp</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-lightbulb me-3 mb-2" style="font-size: 28px;"></i>
							<span>Kỹ năng mềm</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-cart4 me-3 mb-2" style="font-size: 28px;"></i>
							<span>Sale bán hàng</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-code-slash me-3 mb-2" style="font-size: 28px;"></i>
							<span>Công nghệ thông tin</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-heart-pulse me-3 mb-2" style="font-size: 28px;"></i>
							<span>Sức khoẻ giới tính</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-emoji-heart-eyes-fill me-3 mb-2" style="font-size: 28px;"></i>
							<span>Phong cách sống</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-emoji-heart-eyes-fill me-3 mb-2" style="font-size: 28px;"></i>
							<span>Nuôi dạy con</span>
						</a>
					</div>

					<div class="col-2 mb-3">
						<a href="#"
							class="bg-danger d-flex flex-column justify-content-center align-items-center pt-3 pb-3 bg-light shadow-sm bg-body rounded text-decoration-none text-black">
							<i class="bi bi-people-fill me-3 mb-2" style="font-size: 28px;"></i>
							<span>Nuôi dạy con</span>
						</a>
					</div>



				</div>

				<!-- title lý do nên học online-->
				<div class="row mt-5 mb-3">
					<div class="col-7 m-auto">
						<h4 class="text-uppercase fw-bold text-center" style="font-size: 30px;">3 LÝ DO BẠN NÊN HỌC
							ONLINE TẠI UNICA</h4>
					</div>
				</div>

				<!-- lý do học online images -->

				<div class="row">

					<div class="col-4">
						<div class="d-flex flex-column align-items-center justify-content-between">
							<img src="../public/images/icon-ts-1.png" alt="">
							<span class="mt-3 fw-bold" style="font-size: 20px;">Giảng viên uy tín</span>
							<span class="mt-2" style="font-size: 16px;">Bài giảng chất lượng</span>
						</div>
					</div>

					<div class="col-4">
						<div class="d-flex flex-column align-items-center justify-content-between">
							<img src="../public/images/icon-ts-2.png" alt="">
							<span class="mt-3 fw-bold" style="font-size: 20px;">Thanh toán 1 lần</span>
							<span class="mt-2" style="font-size: 16px;">Học mãi mãi</span>
						</div>
					</div>

					<div class="col-4">
						<div class="d-flex flex-column align-items-center justify-content-between">
							<img src="../public/images/icon-ts-3.png" alt="">
							<span class="mt-3 fw-bold" style="font-size: 20px;">Học trực tuyến</span>
							<span class="mt-2" style="font-size: 16px;">Hỗ trợ trực tiếp</span>
						</div>
					</div>

				</div>

				<!-- title giảng viên tiêu biểu-->
				<div class="row mt-5 mb-3">
					<div class="col-7 m-auto">
						<h4 class="text-uppercase fw-bold text-center" style="font-size: 30px;">GIẢNG VIÊN TIÊU BIỂU
						</h4>
					</div>
				</div>

				<!-- slider cards -->
				<swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
					slides-per-view="4" navigation="true" centered-slides="true" autoplay-delay="2500"
					autoplay-disable-on-interaction="false">
					<swiper-slide>
						<div class="card shadow mb-5 bg-body rounded">
							<div class="mt-4 border-secondary mx-auto"
								style="width: 150px; height: 150px; object-fit: cover; overflow: hidden;">
								<img src="../public/images/nguyen-phung-phong_thumb.jpeg"
									class="card-img-top rounded-circle p-1 border" alt="nguyen-phung-phong_thumb.jpeg"
									style="width: 100%; height: 100%;">
							</div>
							<div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
								<a href="" class="text-decoration-none text-black fw-bold mb-3"
									style="color: #273167;font-size: 20px;">Nguyễn Phùng Phong</a>
								<p class="card-text text-center mt-2 mb-5">Kỷ lục gia Siêu trí nhớ Thế giới - Chủ tịch
									Tổ chức Trí nhớ Việt Nam</p>
							</div>
						</div>
					</swiper-slide>

					<swiper-slide>
						<div class="card shadow mb-5 bg-body rounded">
							<div class="mt-4 border-secondary mx-auto"
								style="width: 150px; height: 150px; object-fit: cover;">
								<img src="../public/images/thai-van-linh-linh-thai_thumb.jpeg"
									class="card-img-top rounded-circle p-1 border" alt="nguyen-phung-phong_thumb.jpeg"
									style="width: 100%; height: 100%;">
							</div>
							<div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
								<a href="" class="text-decoration-none text-black fw-bold mb-3"
									style="color: #273167;font-size: 20px;">Thái Vân Linh (Linh Thai)</a>
								<p class="card-text text-center mt-2 mb-5">Nhà sáng lập Skills Bridge và TVL Group</p>
							</div>
						</div>
					</swiper-slide>

					<swiper-slide>
						<div class="card shadow mb-5 bg-body rounded">
							<div class="mt-4 border-secondary mx-auto"
								style="width: 150px; height: 150px; object-fit: cover; overflow: hidden;">
								<img src="../public/images/nguyen-hieu_thumb.jpeg"
									class="card-img-top rounded-circle p-1 border" alt="nguyen-phung-phong_thumb.jpeg"
									style="width: 100%; height: 100%;">
							</div>
							<div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
								<a href="" class="text-decoration-none text-black fw-bold mb-3"
									style="color: #273167;font-size: 20px;">Nguyễn Hiếu</a>
								<p class="card-text text-center mt-2 mb-5">Đại sứ Yoga Việt Nam - CEO Zenlife Yoga</p>
							</div>
						</div>
					</swiper-slide>

					<swiper-slide>
						<div class="card shadow mb-5 bg-body rounded">
							<div class="mt-4 border-secondary mx-auto"
								style="width: 150px; height: 150px; object-fit: cover; overflow: hidden;">
								<img src="../public/images/pham-thanh-long_thumb.jpeg"
									class="card-img-top rounded-circle p-1 border" alt="nguyen-phung-phong_thumb.jpeg"
									style="width: 100%; height: 100%;">
							</div>
							<div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
								<a href="" class="text-decoration-none text-black fw-bold mb-3"
									style="color: #273167;font-size: 20px;">Phạm Thành Long</a>
								<p class="card-text text-center mt-2 mb-5">Luật sư - Diễn giả</p>
							</div>
						</div>
					</swiper-slide>

					<swiper-slide>
						<div class="card shadow mb-5 bg-body rounded">
							<div class="mt-4 border-secondary mx-auto"
								style="width: 150px; height: 150px; object-fit: cover; overflow: hidden;">
								<img src="../public/images/ts-le-tham-duong_thumb.jpeg"
									class="card-img-top rounded-circle p-1 border" alt="nguyen-phung-phong_thumb.jpeg"
									style="width: 100%; height: 100%;">
							</div>
							<div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
								<a href="" class="text-decoration-none text-black fw-bold mb-3"
									style="color: #273167;font-size: 20px;">Ts. Lê Thẩm Dương</a>
								<p class="card-text text-center mt-2 mb-5">Tiến sĩ - Diễn giả chuyên nghiệp - Chuyên gia
									Tài chính, Lãnh đạo, Nhân sự.....</p>
							</div>
						</div>
					</swiper-slide>

					<swiper-slide>
						<div class="card shadow mb-5 bg-body rounded">
							<div class="mt-4 border-secondary mx-auto"
								style="width: 150px; height: 150px; object-fit: cover; overflow: hidden;">
								<img src="../public/images/dang-trong-khang_thumb.png"
									class="card-img-top rounded-circle p-1 border" alt="nguyen-phung-phong_thumb.jpeg"
									style="width: 100%; height: 100%;">
							</div>
							<div class="card-body d-flex flex-column align-items-center mt-3" style="height: 200px;">
								<a href="" class="text-decoration-none text-black fw-bold mb-3"
									style="color: #273167;font-size: 20px;">Đặng Trọng Khang</a>
								<p class="card-text text-center mt-2 mb-5">Causality Investing Speaker</p>
							</div>
						</div>
					</swiper-slide>


				</swiper-container>

				<!-- title các giải pháp từ unica -->
				<div class="row mt-5 mb-3">
					<div class="col-7 m-auto">
						<h4 class="text-uppercase fw-bold text-center" style="font-size: 30px;">CÁC GIẢI PHÁP KHÁC TỪ
							UNICA</h4>
					</div>
				</div>

				<!--  các giải pháp từ unica -->
				<div class="row mb-5">
					<div class="col-6">
						<a href="#" class="text-decoration-none text-black">
							<div class="card rounded">
								<img src="../public/images/hb-edu.jpeg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title mb-2" style="font-size: 20px;">Edubit.vn - Ai cũng có thể dạy
										học online</h4>
									<p class="card-text" style="font-size: 18px;">Giải pháp elearning giúp tạo bài
										giảng, bài trắc nghiệm online chỉ với 1 click chuột </p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6">
						<a href="" class="text-decoration-none text-black">
							<div class="card rounded">
								<img src="../public/images/hb-aca.jpeg" class="card-img-top" alt="...">
								<div class="card-body">
									<h4 class="card-title mb-2" style="font-size: 20px;">Acabiz - Giải pháp đào tạo nội
										bộ cho doanh nghiệp</h4>
									<p class="card-text" style="font-size: 18px;">Nâng cao năng lực đội ngũ với nền tảng
										Acabiz và hơn 500 khoá học chọn lọc từ Unica </p>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Đăng ký để trở thành gv unica -->

				<div class="row">
					<div class="col-12">
						<div class="position-relative"
							style="width: 100%; height: 320px; object-fit: cover; overflow: hidden;">
							<img src="../public/images/dkgv.jpeg" alt="dang ky thanh giang vien unica"
								style="width: 100%; height: 100%;">
							<div
								class="position-absolute top-50 start-50 translate-middle d-flex align-items-center flex-column text-light">
								<p class="fw-bold pt-3 pb-3" style="font-size: 32px;">Trở thành Giảng viên Unica</p>
								<p class="pt-1 pb-3">Hơn 1000 giảng viên đã có khóa học trên Unica</p>
								<a class="text-decoration-none text-light fw-bold pt-3 pb-3 px-5 rounded" href="#"
									style="border: 1px solid #fff">Đăng ký ngay</a>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</main>
	<!-- <footer></footer> -->
	<footer>
		<div class="container-fluid bg-secondary text-white">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="py-2">
							<a class="btn text-white fw-bold fs-5" href="index.html">STAR CLASSES</a>
						</div>
						<div class="my-1">
							<i class="bi bi-geo-alt text-warning"></i> <span>Số 8, Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà
								Nội</span>
						</div>
						<div class="my-1">
							<i class="bi bi-telephone text-warning"></i> <span>+ 84 986295956</span>
						</div>
						<div class="my-1">
							<a href="mailto:q5nguyenn@gmail.com" class="text-decoration-none text-white"><i
									class="bi bi-envelope-paper text-warning"></i>
								<span>q5nguyenn@gmail.com</span></a>
						</div>
						<div class="my-1">
							<i class="bi bi-clock text-warning"></i> <span> 8:00 - 22:00</span>
						</div>
					</div>
					<div class="col">
						<div class="fw-bold fs-5 p-2">Về Starclasses</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Giới thiệu về Starclasses</a>
						</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Câu hỏi thường gặp</a>
						</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Điều khoản dịch vụ</a>
						</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Hướng dẫn thanh toán</a>
						</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Chính sách bảo mật</a>
						</div>
					</div>
					<div class="col">
						<div class="fw-bold fs-5 py-2">Hợp tác liên kết</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Đăng kí giảng viên</a>
						</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Giải pháp e-learning</a>
						</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Đào tạo doanh nghiệp</a>
						</div>
						<div class="my-1">
							<a href="#" class="text-decoration-none text-white">Quay dựng video</a>
						</div>
						<div class="my-1">
							<a href="#" class="link-success text-decoration-none text-white">Đào tạo Inhouse</a>
						</div>
					</div>
					<div class="col">
						<div class="fw-bold fs-5 py-2">Kết nối với Starclass</div>
						<div class="my-1">
							<a class="btn bg-primary" href="https://vi-vn.facebook.com/">
								<i class="bi bi-facebook text-white fs-2"></i>
							</a>
							<a class="btn bg-danger ms-2" href="https://www.youtube.com/">
								<i class="bi bi-youtube text-white fs-2"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-dark text-white">
			<div class="container py-3 d-flex align-items-center">
				<div class="me-5">© Công ty cổ phần đào tạo trực tuyến Starclasses - ĐKKD: 0107695756 - Khóa học trực
					tuyến dành
					cho người đi
					làm
				</div>
				<div>
					<img src="https://unica.vn/media/images_v2017/bct.png" alt="">
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../public/js/header.js"></script>
	<script>
		$('#department').hide();
		$('#menu').hide();
		$('#categories').click(function (e) {
			e.preventDefault();
			$('#department').toggle(300);
		});

		$('#user').click(function (e) {
			e.preventDefault();
			$('#menu').toggle(300);
		});
	</script>
</body>

</html>