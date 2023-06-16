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
	<link rel="stylesheet" href="../public/css/pagesearch.css">
	<link rel="stylesheet" href="../public/css/reset.css">
	<link rel="stylesheet" href="../public/css/homepage.css">

</head>

<body>
	<!-- <header></header> -->
	<h1><?php
			echo $keyword;
			?></h1>
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
		<div class="container-fluid" style="background-color: #f5f5f5;">
			<!-- main search -->
			<div class="container pt-3">

				<!-- Kết quả tìm kiếm -->
				<div class="row">
					<div class="col-12">
						<div class="d-flex justify-content-between mt-5 mb-4 align-items-center">
							<span class="fw-bold" style="font-size: 20px; ">Kết quả tìm kiếm: powerpoint</span>
							<span style="font-size: 18px;">Tìm thấy <span style="font-size: 18px;" class="fw-bold">11</span> khóa học online</span>
						</div>
					</div>
				</div>

				<!-- select filter source -->
				<section>
					<div class="row">
						<div class="col-12">
							<div class="d-flex align-items-center u-hot-cate shadow-sm p-3 mb-5 bg-body rounded" style="background-color: #fff;">
								<i class="bi bi-arrow-down-up"></i><span class="fw-bold" style="font-size: 15px; margin: 4px 6px;">Sắp xếp</span>
								<ul class="d-flex list-unstyled m-0">
									<li>
										<a class="text-decoration-none" href="#">Học nhiều nhất</a>
									</li>

									<li>
										<a class="text-decoration-none" href="#">Đánh giá cao</a>
									</li>

									<li>
										<a class="text-decoration-none" href="#">Mới nhất</a>
									</li>

									<li>
										<a class="text-decoration-none" href="#">Giá thấp đến cao</a>
									</li>

									<li>
										<a class="text-decoration-none" href="#">Giá cao đến thấp</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<!-- cart course search-->

				<div class="row pt-3 pb-5">

					<div class="col-lg-3 mb-4">
						<a class="text-decoration-none text-black position-relative" href="#">
							<div class="card shadow bg-body rounded">
								<img src="../public/images/khoa-hoc-dem-hat-guitar-co-ban.jpeg" style="width: 100%;" class="card-img-top" alt="...">

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

					<div class="col-lg-3 mb-4">
						<a class="text-decoration-none text-black position-relative" href="#">
							<div class="card shadow bg-body rounded">
								<img src="../public/images/khoa-hoc-dem-hat-guitar-co-ban.jpeg" style="width: 100%;" class="card-img-top" alt="...">

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

					<div class="col-lg-3 mb-4">
						<a class="text-decoration-none text-black position-relative" href="#">
							<div class="card shadow bg-body rounded">
								<img src="../public/images/khoa-hoc-dem-hat-guitar-co-ban.jpeg" style="width: 100%;" class="card-img-top" alt="...">

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

					<div class="col-lg-3 mb-4">
						<a class="text-decoration-none text-black position-relative" href="#">
							<div class="card shadow bg-body rounded">
								<img src="../public/images/khoa-hoc-dem-hat-guitar-co-ban.jpeg" style="width: 100%;" class="card-img-top" alt="...">

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

					<div class="col-lg-3 mb-4">
						<a class="text-decoration-none text-black position-relative" href="#">
							<div class="card shadow bg-body rounded">
								<img src="../public/images/khoa-hoc-dem-hat-guitar-co-ban.jpeg" style="width: 100%;" class="card-img-top" alt="...">

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
							<a href="mailto:q5nguyenn@gmail.com" class="text-decoration-none text-white"><i class="bi bi-envelope-paper text-warning"></i>
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
	<script>
		$('#department').hide();
		$('#menu').hide();
		$('#categories').click(function(e) {
			e.preventDefault();
			$('#department').toggle(300);
		});

		$('#user').click(function(e) {
			e.preventDefault();
			$('#menu').toggle(300);
		});
	</script>
</body>

</html>