<?php
include('../database/database.php');
if (isset($_GET['breadcrumb'])) {
	$getIdBreadcrumb = $_GET['breadcrumb'];
	$selector_Breadcrumb = "SELECT * FROM faculties WHERE faculties.id = '$getIdBreadcrumb' ";
	$query_Breadcrumb = mysqli_query(openConnection(), $selector_Breadcrumb);
	$array_Breadcrumbt = mysqli_fetch_array($query_Breadcrumb);
}

if (isset($_GET['breadcrumb']) && isset($_GET['breadcrumbChild'])) {
	$getIdBreadcrumb = $_GET['breadcrumb'];
	$getidbreadcrumbChild = $_GET['breadcrumbChild'];

	$selectorBreadcrumbAndChild = "SELECT departments.*, faculties.name as faculties_name FROM `departments` 
	JOIN faculties ON faculties.id = departments.faculty_id 
	AND faculties.id = '$getIdBreadcrumb' AND  departments.id =  $getidbreadcrumbChild 
	ORDER BY faculty_id ";

	$queryBreadcrumbAndChild = mysqli_query(openConnection(), $selectorBreadcrumbAndChild);
	$arrayBreadcrumbAndChild = mysqli_fetch_array($queryBreadcrumbAndChild);
}

if (isset($_POST['buttonCourseHot']) || !isset($_POST['buttonCourseHot'])) {
	$getIdBreadcrumb = $_GET['breadcrumb'];
	$mergeCourse = "SELECT courses.*, departments.name as departments_name, users.name as users_name 
	FROM `courses`JOIN departments ON departments.id = courses.department_id AND departments.faculty_id = $getIdBreadcrumb
	JOIN users ON courses.teacher_id = users.id ORDER BY teacher_id ASC LIMIT 8";
	$query_mergeCourse = mysqli_query(openConnection(), $mergeCourse);
}
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
		<div class="container-fluid" style="background-color: #e4e4e4;">
			<div class="container">

				<div class="row">
					<ul class="list-unstyled d-flex pt-3 pb-3 mb-0">
						<li><a href="homepage.php" class="text-decoration-none text-black fw-bold"
								style="font-size: 16px;">Unica</a></li>
						<?php
						if (isset($_GET['breadcrumb']) && isset($_GET['breadcrumbChild'])) {
							?>
							<li><a href="#" class="text-decoration-none text-black fw-bold" style="font-size: 16px;"><i
										class="bi bi-caret-right-fill" style="font-size: 12px;"></i>
									<?php echo $arrayBreadcrumbAndChild['faculties_name'] ?>
								</a></li>
							<li><a href="#" class="text-decoration-none text-black fw-bold" style="font-size: 16px;"><i
										class="bi bi-caret-right-fill" style="font-size: 12px;"></i>
									<?php echo $arrayBreadcrumbAndChild['name'] ?>
								</a></li>
							<?php
						} elseif (isset($_GET['breadcrumb'])) {

							?>
							<li><a href="#" class="text-decoration-none text-black fw-bold" style="font-size: 16px;"><i
										class="bi bi-caret-right-fill" style="font-size: 12px;"></i>
									<?php echo $array_Breadcrumbt['name'] ?>
								</a></li>
							<?php
						}
						?>
					</ul>
				</div>

			</div>

		</div>

		<div class="container-fluid" style="background-color: #f5f5f5;">


			<div class="container">

				<div class="row">
					<div class="col-12">
						<div class="mt-3 mb-2">
							<?php
							if (isset($_GET['breadcrumb']) && isset($_GET['breadcrumbChild'])) {
								?>
								<p class="fw-bold" style="font-size: 22px;">Course
									<?php echo $arrayBreadcrumbAndChild['name'] ?>
								</p>
								<?php
							} else if (isset($_GET['breadcrumb'])) {
								?>
									<p class="fw-bold" style="font-size: 22px;">Course
									<?php echo $array_Breadcrumbt['name'] ?>
									</p>
								<?php
							} /*else{
																			  header("location: homepage.php");
																		  }
																		  */
							?>
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<form action="" method="post">
						<ul class="d-flex list-unstyled nav-tab">
							<button name="buttonCourseHot" class="button active"
								style=" border: none; padding: 10px 15px; background: #fff; border-radius: 4px; margin-right: 2px;">
								<li>
									<a href="#" class="text-decoration-none border-0" style="color: #555555">Khoá học
										phổ biến</a>
								</li>
							</button>

							<button name="buttonCourseNew"
								style=" border: none; padding: 10px 15px; background: #fff; border-radius: 4px; margin-right: 2px;">
								<li>
									<a href="#" class="text-decoration-none border-0" style="color: #555555">Khoá học
										mới</a>
								</li>
							</button>
						</ul>
					</form>
					<div class="">
						<swiper-container class="mySwiper" navigation="true" keyboard="true" pagination="true"
							pagination-clickable="true" space-between="30" slides-per-view="4">

							<?php
							if (isset($_POST['buttonCourseHot']) || !isset($_POST['buttonCourseHot'])) {
								?>
								<?php
								while ($array_mergeCourse = mysqli_fetch_array($query_mergeCourse)) {

									?>
									<swiper-slide>
										<a class="text-decoration-none text-black position-relative" href="#">
											<div class="card shadow bg-body rounded">
												<img src="../public<?php echo $array_mergeCourse['thumbnail'] ?>"
													style="width: 100%;" class="card-img-top" alt="...">

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
									</swiper-slide>
									<?php
								}
							}
							?>
						</swiper-container>
					</div>
				</div>

				<div class="row pt-5">
					<div class="col-lg-12">
						<h4 class="float-left text-uppercase fw-bold">Chủ đề phổ biến</h4>
					</div>
				</div>

				<div class="row">
					<ul class="list-unstyled d-flex flex-wrap">
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Tiếng Anh giao
								tiếp</a></li>
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Tiếng Anh</a>
						</li>
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Tiếng Trung</a>
						</li>
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Tiếng Nhật</a>
						</li>
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Ngữ pháp Tiếng
								Anh</a></li>
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Tiếng Hàn</a>
						</li>
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Phát âm Tiếng
								Anh</a></li>
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Toeic</a></li>
						<li class="title-tag"><a href="" class="text-decoration-none text-black fw-bold">Ielts</a></li>
					</ul>
				</div>

				<div class="row mb-5">
					<div class="col-4">
						<div class="">
							<p class="fw-bold" style="font-size: 20px;">Tất cả khóa học Ngoại ngữ</p>
						</div>
					</div>
					<div class="col-8">
						<div class="d-flex align-items-center u-hot-cate justify-content-between">
							<span><i class="bi bi-arrow-down-up"></i> Sắp xếp</span>
							<ul class="list-unstyled m-0">
								<li><a href="" class="text-decoration-none">Học nhiều nhất</a></li>
								<li><a href="" class="text-decoration-none">Đánh gía cao</a></li>
								<li><a href="" class="text-decoration-none">Mới nhất</a></li>
								<li><a href="" class="text-decoration-none">Giá thấp đến cao</a></li>
								<li><a href="" class="text-decoration-none">Giá cao đến thấp</a></li>
							</ul>
							<div class="option-view">
								<button class="" style="display: none;"><i class="bi bi-funnel-fill"></i></button>
								<button class="btn view-option"><i class="bi bi-grid-3x3-gap-fill"></i></button>
								<button class="btn view-option active"><i class="bi bi-list-ul"></i></button>

							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>

				<div class="row list-filter-course">
					<div class="col-4">
						<div class="filter-detail border-top">
							<h4 class="pt-2 pb-2">Đánh giá khoá học</h4>
							<!-- star -->
							<div>
								<form action="">
									<label class="mb-3">
										<input type="radio" class="star-rate mt-1" value="5">
										<span class="star">
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
										</span>
										<span>5</span>
									</label>
								</form>
							</div>

							<div>
								<form action="">
									<label class="mb-3">
										<input type="radio" class="star-rate mt-1" value="5">
										<span class="star">
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
										</span>
										<span>4</span>
									</label>
								</form>
							</div>

							<div>
								<form action="">
									<label class="mb-3">
										<input type="radio" class="star-rate mt-1" value="5">
										<span class="star">
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star-fill"></i>
											<i class="bi bi-star"></i>
											<i class="bi bi-star"></i>
										</span>
										<span>3</span>
									</label>
								</form>
							</div>
						</div>
						<div class="filter-detail border-top">
							<h4 class="pt-2 pb-2">Thời lượng video</h4>
							<!-- thời lượng video -->
							<div>
								<form action="">
									<label class="mb-1 checkbox-inline">
										<input type="checkbox" class="time-filter mt-1" value="5">
										<span>0 đến 1 giờ</span>
									</label>
								</form>
							</div>

							<div>
								<form action="">
									<label class="mb-1 checkbox-inline">
										<input type="checkbox" class="time-filter mt-1" value="5">
										<span>1 đến 3 giờ</span>
									</label>
								</form>
							</div>

							<div>
								<form action="">
									<label class="mb-1 checkbox-inline">
										<input type="checkbox" class="time-filter mt-1" value="5">
										<span>3 đến 6 giờ</span>
									</label>
								</form>
							</div>

							<div>
								<form action="">
									<label class="mb-1 checkbox-inline">
										<input type="checkbox" class="time-filter mt-1" value="5">
										<span>6 đến 17 giờ</span>
									</label>
								</form>
							</div>

							<div>
								<form action="">
									<label class="mb-1 checkbox-inline">
										<input type="checkbox" class="time-filter mt-1" value="5">
										<span>trên 17 giờ</span>
									</label>
								</form>
							</div>

						</div>
					</div>
					<div class="col-8">
						<div class="col-12 list-product">
							<!-- list cousre -->
							<a href="" class="d-flex text-decoration-none text-black">
								<div class="detail-course d-flex">
									<img class="img-responsive"
										src="../public/images/hoc-gioi-tieng-anh-toan-dien_m_1555572380.jpeg" alt="">

									<div class="detain-course__content d-flex">
										<div>
											<p class="name-course fw-bold m-0">Học giỏi Tiếng Anh toàn diện: Nghe, Nói,
												Đọc, Viết</p>
											<div class="description-course" style="padding: 10px 0px;">
												<p class="m-0">Học giỏi Tiếng Anh toàn diện giúp bạn thành thạo 4 kỹ
													năng quan trọng nhất: Nghe, Nói, Đọc, Viết.</p>
											</div>
											<div class="namegv"><span>Bùi Đức Tiến</span></div>
											<span class="star-rate">
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												(51,718)
											</span>
											<p class="total-times m-0">Thời gian: 26.3 giờ, <span> Giáo trình: 51 bài
													giảng </span></p>
										</div>
										<div class="price-count-course-filter" style="text-align: right;">
											<div class="price_sale fw-bold">399.000đ</div>
											<div class="price_sale text-decoration-line-through"
												style="color: #888; font-size: 14px;">600.000đ</div>
										</div>
									</div>
								</div>

							</a>

							<!-- list cousre -->
							<a href="" class="d-flex text-decoration-none text-black">
								<div class="detail-course d-flex">
									<img class="img-responsive"
										src="../public/images/hoc-gioi-tieng-anh-toan-dien_m_1555572380.jpeg" alt="">

									<div class="detain-course__content d-flex">
										<div>
											<p class="name-course fw-bold m-0">Học giỏi Tiếng Anh toàn diện: Nghe, Nói,
												Đọc, Viết</p>
											<div class="description-course" style="padding: 10px 0px;">
												<p class="m-0">Học giỏi Tiếng Anh toàn diện giúp bạn thành thạo 4 kỹ
													năng quan trọng nhất: Nghe, Nói, Đọc, Viết.</p>
											</div>
											<div class="namegv"><span>Bùi Đức Tiến</span></div>
											<span class="star-rate">
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												(51,718)
											</span>
											<p class="total-times m-0">Thời gian: 26.3 giờ, <span> Giáo trình: 51 bài
													giảng </span></p>
										</div>
										<div class="price-count-course-filter" style="text-align: right;">
											<div class="price_sale fw-bold">399.000đ</div>
											<div class="price_sale text-decoration-line-through"
												style="color: #888; font-size: 14px;">600.000đ</div>
										</div>
									</div>
								</div>

							</a>

							<!-- list cousre -->
							<a href="" class="d-flex text-decoration-none text-black">
								<div class="detail-course d-flex">
									<img class="img-responsive"
										src="../public/images/hoc-gioi-tieng-anh-toan-dien_m_1555572380.jpeg" alt="">

									<div class="detain-course__content d-flex">
										<div>
											<p class="name-course fw-bold m-0">Học giỏi Tiếng Anh toàn diện: Nghe, Nói,
												Đọc, Viết</p>
											<div class="description-course" style="padding: 10px 0px;">
												<p class="m-0">Học giỏi Tiếng Anh toàn diện giúp bạn thành thạo 4 kỹ
													năng quan trọng nhất: Nghe, Nói, Đọc, Viết.</p>
											</div>
											<div class="namegv"><span>Bùi Đức Tiến</span></div>
											<span class="star-rate">
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												(51,718)
											</span>
											<p class="total-times m-0">Thời gian: 26.3 giờ, <span> Giáo trình: 51 bài
													giảng </span></p>
										</div>
										<div class="price-count-course-filter" style="text-align: right;">
											<div class="price_sale fw-bold">399.000đ</div>
											<div class="price_sale text-decoration-line-through"
												style="color: #888; font-size: 14px;">600.000đ</div>
										</div>
									</div>
								</div>

							</a>

							<!-- list cousre -->
							<a href="" class="d-flex text-decoration-none text-black">
								<div class="detail-course d-flex">
									<img class="img-responsive"
										src="../public/images/hoc-gioi-tieng-anh-toan-dien_m_1555572380.jpeg" alt="">

									<div class="detain-course__content d-flex">
										<div>
											<p class="name-course fw-bold m-0">Học giỏi Tiếng Anh toàn diện: Nghe, Nói,
												Đọc, Viết</p>
											<div class="description-course" style="padding: 10px 0px;">
												<p class="m-0">Học giỏi Tiếng Anh toàn diện giúp bạn thành thạo 4 kỹ
													năng quan trọng nhất: Nghe, Nói, Đọc, Viết.</p>
											</div>
											<div class="namegv"><span>Bùi Đức Tiến</span></div>
											<span class="star-rate">
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												(51,718)
											</span>
											<p class="total-times m-0">Thời gian: 26.3 giờ, <span> Giáo trình: 51 bài
													giảng </span></p>
										</div>
										<div class="price-count-course-filter" style="text-align: right;">
											<div class="price_sale fw-bold">399.000đ</div>
											<div class="price_sale text-decoration-line-through"
												style="color: #888; font-size: 14px;">600.000đ</div>
										</div>
									</div>
								</div>

							</a>

							<!-- list cousre -->
							<a href="" class="d-flex text-decoration-none text-black">
								<div class="detail-course d-flex">
									<img class="img-responsive"
										src="../public/images/hoc-gioi-tieng-anh-toan-dien_m_1555572380.jpeg" alt="">

									<div class="detain-course__content d-flex">
										<div>
											<p class="name-course fw-bold m-0">Học giỏi Tiếng Anh toàn diện: Nghe, Nói,
												Đọc, Viết</p>
											<div class="description-course" style="padding: 10px 0px;">
												<p class="m-0">Học giỏi Tiếng Anh toàn diện giúp bạn thành thạo 4 kỹ
													năng quan trọng nhất: Nghe, Nói, Đọc, Viết.</p>
											</div>
											<div class="namegv"><span>Bùi Đức Tiến</span></div>
											<span class="star-rate">
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												(51,718)
											</span>
											<p class="total-times m-0">Thời gian: 26.3 giờ, <span> Giáo trình: 51 bài
													giảng </span></p>
										</div>
										<div class="price-count-course-filter" style="text-align: right;">
											<div class="price_sale fw-bold">399.000đ</div>
											<div class="price_sale text-decoration-line-through"
												style="color: #888; font-size: 14px;">600.000đ</div>
										</div>
									</div>
								</div>

							</a>

							<!-- list cousre -->
							<a href="" class="d-flex text-decoration-none text-black">
								<div class="detail-course d-flex">
									<img class="img-responsive"
										src="../public/images/hoc-gioi-tieng-anh-toan-dien_m_1555572380.jpeg" alt="">

									<div class="detain-course__content d-flex">
										<div>
											<p class="name-course fw-bold m-0">Học giỏi Tiếng Anh toàn diện: Nghe, Nói,
												Đọc, Viết</p>
											<div class="description-course" style="padding: 10px 0px;">
												<p class="m-0">Học giỏi Tiếng Anh toàn diện giúp bạn thành thạo 4 kỹ
													năng quan trọng nhất: Nghe, Nói, Đọc, Viết.</p>
											</div>
											<div class="namegv"><span>Bùi Đức Tiến</span></div>
											<span class="star-rate">
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill"></i>
												(51,718)
											</span>
											<p class="total-times m-0">Thời gian: 26.3 giờ, <span> Giáo trình: 51 bài
													giảng </span></p>
										</div>
										<div class="price-count-course-filter" style="text-align: right;">
											<div class="price_sale fw-bold">399.000đ</div>
											<div class="price_sale text-decoration-line-through"
												style="color: #888; font-size: 14px;">600.000đ</div>
										</div>
									</div>
								</div>

							</a>
						</div>
						<div class="col-12 pagination-course">
							<ul class="pagination">
								<li class="prev disabled"> <span><i class="bi bi-caret-left-fill"></i></span></li>
								<li class="active"><a href="#" data-page="">0</a></li>
								<li class=""><a href="#" data-page="">1</a></li>
								<li class=""><a href="#" data-page="">2</a></li>
								<li class="disabled"><span>...</span></li>
								<li class=""><a href="#" data-page="">15</a></li>
								<li class="prev disabled"> <span><i class="bi bi-caret-right-fill"></i></span></li>
							</ul>
						</div>

					</div>
				</div>

				<div class="row blog-content">
					<div class="col-12">
						<p>Trong cuộc sống hiện nay, không thể phủ nhận tầm quan trọng của việc học ngoại ngữ.
							Việc thông thạo ngoại ngữ sẽ giúp cho bạn mở ra nhiều cơ hội lớn trong học tập cũng như công
							việc. </p>
						<p>Xuất phát từ điều này, UNICA đã kết hợp với các giảng viên giàu chuyên môn xây dựng nên những
							khóa học ngoại ngữ online cực kỳ hữu ích,
							đáp ứng tối đa mọi nhu cầu học tập của học viên. </p>
						<h2>
							<strong>Sở hữu 145 khóa học ngoại ngữ ưu việt </strong>
						</h2>
						<p>
							Khi nhắc đến khóa học ngoại ngữ, nhiều học viên sẽ nghĩ rằng chỉ để cập đến bộ môn tiếng Anh
							là chủ yếu.
							Tuy nhiên, đến với UNICA, bạn còn được nhiều hơn thế, bởi UNICA không chỉ cung cấp các khóa
							học tiếng Anh
							mà còn có 3 ngoại ngữ đang rất “thịnh hành” nhất hiện nay là tiếng Hàn, tiếng Nhật và tiếng
							Trung.
							Điều này sẽ giúp “đánh bay” nỗi lo trong việc chọn khóa học phù hợp với ngôn ngữ mà mình yêu
							thích.
						</p>
						<p>
							Với 4 ngoại ngữ chính sẽ được chia thành từng nhóm kiến thức và trình độ khác nhau. Ví dụ
							như: cơ bản và nâng cao,
							giao tiếp, ngữ pháp, luyện thi… Như vậy, các học viên có thể lựa chọn được khóa học phù hợp
							với năng lực và mục tiêu
							mà mình đang mong muốn đạt được.
						</p>
						<h2>
							<strong>Học mọi lúc mọi nơi</strong>
						</h2>

						<p>
							Ưu điểm lớn nhất mà các khóa học ngoại ngữ online trên UNICA mang lại đó chính là bạn có thể
							học mọi lúc mọi nơi.
							Do tính chất học online nên học viên có thể chủ động trong việc học mà không bị gò bó về
							thời gian.
						</p>

						<p>
							Chính điều này sẽ giúp cho bạn tiết kiệm thời gian học và mang lại hiệu quả cao nhất trong
							quá trình tiếp nhận kiến thức.
							Đặc biệt, chi phí mà bạn cần bỏ ra cho một khóa học rẻ hơn gấp nhiều lần so với các trung
							tâm ngoại ngữ. Như vậy,
							UNICA đã giúp bạn giải quyết “trọn gói” 2 vấn đề cùng lúc đó là tài chính và thời gian.
						</p>

						<h2>
							<strong>Giảng viên có chuyên môn cao </strong>
						</h2>
						<p>
							Đến với khóa học ngoại ngữ trên UNICA, bạn sẽ được “cầm cân chỉ mực” bởi những giảng viên
							giàu chuyên môn như:
							Th.s Ruby Thảo Trần, Victoria Dương, Hannah Phạm, Thanh Trúc, Vũ Thùy Linh, EZ Language, Ngô
							Trần Minh Thảo…
						</p>
						<p>Các giảng viên tham gia giảng dạy ngoại ngữ trên UNICA đều đạt các chứng chỉ xuất sắc của các
							cuộc thi trong nước
							và quốc tế. Đặc biệt, cách thức giảng dạy, trình bày và chia sẻ kiến thức của các giảng viên
							đều rất khoa học, dễ hiểu và
							cực kỳ thú vị. Do đó, bạn sẽ không phải quá lo lắng về việc sẽ-ngủ-gật-trong-giờ-học.
						</p>

						<p>
							Nếu việc tự học tại nhà qua sách vở, học qua trung tâm, trường lớp sẽ khiến bạn phải mất quá
							nhiều thời gian mới có thể tiếp nhận kiến thức,
							thì UNICA sẽ giúp bạn khắc phục hoàn toàn vấn đề này.
						</p>

						<p>
							Với 3 lợi ích siêu ưu việt mà các khóa học ngoại ngữ trên UNICA cung cấp cho bạn, chắc chắn
							sẽ giúp việc chạm đến ước mơ, mục tiêu của bạn
							trở nên dễ dàng hơn bao giờ hết.
						</p>
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
	<script src="public/js/header.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
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