<?php 
	$searchProduct = "SELECT courses.*, departments.name as departments_name, users.name as users_name, users.thumbnail as users_thumbnail 
	FROM `courses` JOIN departments ON courses.department_id = departments.id  JOIN users ON courses.teacher_id = users.id WHERE  courses.name LIKE '%".$keyword."%' ORDER BY teacher_id DESC ";
	$query_searchProduct = mysqli_query(openConnection(), $searchProduct);
	if ($query_searchProduct) {
		$array_searchProduct = mysqli_fetch_array($query_searchProduct);
		if($array_searchProduct) {
			$countArraySearchProduct = count(array_filter($array_searchProduct));
			$footer = '<div class="container-fluid bg-secondary text-white">
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
		</div>';
		if (isset($_GET['keyword']) && $_GET['acset'] == "studymore") {
			$searchProduct =  "SELECT courses.*,  AVG(rate) as star, COUNT(bill_course.course_id) as bill_course, users.name as users_name, users.thumbnail as users_thumbnail
			FROM `courses`
			JOIN users ON courses.teacher_id = users.id 
			LEFT JOIN reviews ON courses.id = reviews.course_id
			JOIN bill_course ON courses.id = bill_course.course_id
			GROUP BY id
			WHERE  courses.name LIKE '%".$keyword."%'
			HAVING COUNT(bill_course.course_id) >=1
			ORDER BY id DESC";
			$query_searchProduct = mysqli_query(openConnection(), $searchProduct);
		}elseif (isset($_POST['votehigh'])) {
			$searchProduct = "SELECT courses.*, departments.name as departments_name, users.name as users_name, users.thumbnail as users_thumbnail 
			FROM `courses` JOIN departments ON courses.department_id = departments.id  JOIN users ON courses.teacher_id = users.id WHERE  courses.name LIKE '%".$keyword."%' ORDER BY teacher_id DESC ";
			$query_searchProduct = mysqli_query(openConnection(), $searchProduct);
		}elseif (isset($_POST['coursenew'])) {
			$searchProduct = "SELECT courses.*, departments.name as departments_name, users.name as users_name, users.thumbnail as users_thumbnail 
			FROM `courses` JOIN departments ON courses.department_id = departments.id  JOIN users ON courses.teacher_id = users.id WHERE  courses.name LIKE '%".$keyword."%' ORDER BY created_at DESC ";
			$query_searchProduct = mysqli_query(openConnection(), $searchProduct);
		}elseif (isset($_POST['pricelowertohigh'])) {
			$searchProduct = "SELECT courses.*, departments.name as departments_name, users.name as users_name, users.thumbnail as users_thumbnail 
			FROM `courses` JOIN departments ON courses.department_id = departments.id  JOIN users ON courses.teacher_id = users.id WHERE  courses.name LIKE '%".$keyword."%' ORDER BY discount ASC ";
			$query_searchProduct = mysqli_query(openConnection(), $searchProduct);
		}elseif (isset($_POST['pricehightolower'])) {
			$searchProduct = "SELECT courses.*, departments.name as departments_name, users.name as users_name, users.thumbnail as users_thumbnail 
			FROM `courses` JOIN departments ON courses.department_id = departments.id  JOIN users ON courses.teacher_id = users.id WHERE  courses.name LIKE '%".$keyword."%' ORDER BY discount DESC ";
			$query_searchProduct = mysqli_query(openConnection(), $searchProduct);
		}
		} else {
			$noti = "<p>KHÔNG TÌM THẤY KẾT QUẢ NÀO</p>";
			$footer = '<div class="container-fluid bg-secondary text-white">
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
		</div>';
		}
	} else {
		$noti = "Lỗi truy vấn: " . mysqli_error(openConnection());
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
	<link rel="stylesheet" href="../public/css/pagesearch.css">
	<link rel="stylesheet" href="../public/css/reset.css">
	<link rel="stylesheet" href="../public/css/homepage.css">

</head>

<body>
	<!-- <header></header> -->
	<?php
	require_once 'layouts/header.php';
	?>
	<main class="min-vh-100">
		<div class="container-fluid" style="background-color: #f5f5f5;">
			<!-- main search -->
			<div class="container pt-3">

				<!-- Kết quả tìm kiếm -->
				<div class="row">
					<div class="col-12">
						<div class="d-flex justify-content-between mt-5 mb-4 align-items-center">
							<span class="fw-bold" style="font-size: 20px; ">Kết quả tìm kiếm: <?php echo $keyword ?></span>
							<span style="font-size: 18px;">Tìm thấy <span style="font-size: 18px;" class="fw-bold"><?php echo $countArraySearchProduct  ?></span> khóa học online</span>
						</div>
					</div>
				</div>

				
				<!-- select filter source -->
				<section>
					<div class="row">
						<div class="col-12">
							<div class="d-flex align-items-center u-hot-cate shadow-sm p-3 mb-5 bg-body rounded" style="background-color: #fff;">
								<i class="bi bi-arrow-down-up"></i><span class="fw-bold" style="font-size: 15px; margin: 4px 6px;">Sắp xếp</span>
								<form action="" method="post">
									<ul class="d-flex list-unstyled m-0">
										<button name="studymore" class="p-0 btn background-none"><li><a href="views/layouts/search.php?keyword=<?php echo $keyword ?>&acset=studymore" class="text-decoration-none">Học nhiều nhất</a></li></button>
										<button name="votehigh" class="p-0 btn background-none"><li><a href="search.php?keyword=<?php echo $keyword ?>&acset=votehight" class="text-decoration-none">Đánh giá cao</a></li></button>
										<button name="coursenew" class="p-0 btn background-none"><li><a href="search.php?keyword=<?php echo $keyword ?>&acset=newstudy" class="text-decoration-none">Mới nhất</a></li></button>
										<button name="pricelowertohigh" class="p-0 btn background-none"><li><a href="search.php?keyword=<?php echo $keyword ?>&acset=pricelowtohight" class="text-decoration-none">Giá thấp đến giá cao</a></li></button>
										<button name="pricehightolower" class="p-0 btn background-none"><li><a href="search.php?keyword=<?php echo $keyword ?>&acset=pricehightolow" class="text-decoration-none">Giá cao đến giá thấp</a></li></button>
									</ul>
								</form>
							</div>
						</div>
					</div>
				</section>

				<!-- cart course search-->

				<div>
					<?php echo $noti ?>
				</div>

				<div class="row pt-3 pb-5">

				<?php 
					$discount = 0;
					while ($listSearchProduct = mysqli_fetch_array($query_searchProduct)) {
						$discount = (($listSearchProduct ['price'] - $listSearchProduct ['discount']) / $listSearchProduct ['price']) * 100;
						$round_discount = round($discount);
				?>
						<div class="col-lg-3 mb-4">
						<a class="text-decoration-none text-black position-relative" href="#">
							<div class="card shadow bg-body rounded">
								<img src="../public<?php echo $listSearchProduct['thumbnail'] ?>" style="width: 100%;" class="card-img-top" alt="...">

								<div class="content-course">
									<h3 class="cart-course__title">
										<p><?php echo $listSearchProduct['name'] ?></p>
									</h3>
									<div class="namegv">
										<span style="float: left;"><?php echo $listSearchProduct['users_name']?></span>
										<span class="price-principal"><?php echo $listSearchProduct['price'] ?></span>
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
									<span class="price-discount"><?php echo $listSearchProduct['discount'] ?></span>
								</div>


							</div>
							<div class="position-absolute top-0 start-0 text-center sale-price rounded">
								<p>-<?php echo $round_discount .'%' ?></p>
							</div>
						</a>

					</div>
				<?php 
					}
				?>
				
				</div>

			</div>
		</div>
	</main>
	<!-- <footer></footer> -->
	<footer>
		<?php echo $footer ?>
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