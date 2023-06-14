<?php
session_start();
require_once '../database/database.php';
require_once '../database/utility.php';
$id = getGET('id');
$teacher = excuteResult("SELECT users.*, role_id FROM users
JOIN role_user ON role_user.user_id = users.id
WHERE users.id = '$id'", true);
if ($teacher['role_id'] != 3) {
	header("Location: errors/404.php");
}
$courses = excuteResult("SELECT * FROM users
JOIN courses ON users.id = courses.teacher_id
where courses.teacher_id = '$id'");
$bills = excuteResult("SELECT bill_course.* FROM users
JOIN courses ON users.id = courses.teacher_id
JOIN bill_course on bill_course.course_id = courses.id
WHERE teacher_id = '$id'");
$rate = excuteResult("SELECT AVG(rate) as rate FROM users
JOIN courses ON users.id = courses.teacher_id
JOIN reviews on courses.id = reviews.course_id
WHERE teacher_id = '$id'", true)
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Starclasses - Giảng viên</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="../public/css/header.css" />
</head>

<body>
	<!-- Header Start -->
	<?php
	require_once 'layouts/header.php';
	?>
	<!-- Header End -->
	<main class="min-vh-100 bg-light">
		<div class="container-fluid bg-secondary py-3 text-white">
			<div class="container d-flex justify-content-between">
				<div class="ratio ratio-1x1 " style="width: 160px;">
					<img class="rounded-circle img-fluid" src="../public<?= $teacher['thumbnail'] ?>" alt="">
				</div>
				<div class="d-flex text-white">
					<div class="text-center">
						<div class="fw-bold fs-1"><?= count($courses) ?></div>
						<div cl>Khoá học</div>
					</div>
					<div class="text-center ms-3">
						<div class="fw-bold fs-1"><?= count($bills) ?></div>
						<div cl>Học viên</div>
					</div>
					<div class="text-center ms-3">
						<div class="fw-bold fs-1"><?= round($rate['rate'], 1) ?><i class="bi bi-star-fill text-warning"></i></div>
						<div>Đánh giá trung bình</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="fs-2 fw-bold"><?= $teacher['name'] ?></div>
				<div class="fs-5">Giảng viên</div>
				<div class="mt-2">
					<a class="btn btn-outline-light"><i class="bi bi-facebook"></i> Follow mình</a>
					<a class="btn btn-outline-light"><i class="bi bi-chat-dots"></i> Nhắn tin cho minh</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row py-3">
				<div class="col">
					<div class="fw-bold fs-5 pb-2">Giới thiệu</div>
					<p>
						<?= $teacher['description'] ?>
					</p>
				</div>
				<div class="col">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/hoYOmt_Rq2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="fw-bold fs-5 pb-2">Khoá học của giảng viên <?= $teacher['name'] ?></div>
			<?php
			foreach ($courses as $course) {
				echo '<div class="p-2 bg-white d-flex shadow-sm my-3">
								<div class="me-3" style="height: 200px;">
									<img class="img-fluid" src="../public' . $course['thumbnail'] . '" alt="">
								</div>
								<div class="flex-fill">
									<div class="fw-bold">' . $course['name'] . '</div>
									<div class="my-1">
										<span><i class="bi bi-file-earmark-word"></i> 22 Bài giảng</span>
										<span><i class="bi bi-clock"></i> 02 giờ 02 phút</span>
									</div>
									<div class="my-1">
										<i class="bi bi-chevron-right text-primary fw-bold"></i> <span>Nắm được 1000 từ vựng và cụm từ tiếng Anh sử
											dụng
											trong đàm
											phán</span>
									</div>
									<div class="my-1">
										<i class="bi bi-chevron-right text-primary fw-bold"></i> <span>Nắm được 1000 từ vựng và cụm từ tiếng Anh sử
											dụng
											trong đàm
											phán</span>
									</div>
									<div class="my-1">
										<i class="bi bi-chevron-right text-primary fw-bold"></i> <span>Nắm được 1000 từ vựng và cụm từ tiếng Anh sử
											dụng
											trong đàm
											phán</span>
									</div>
									<div class="my-1">
										<i class="bi bi-chevron-right text-primary fw-bold"></i> <span>Nắm được 1000 từ vựng và cụm từ tiếng Anh sử
											dụng
											trong đàm
											phán</span>
									</div>
									<div class="my-1">
										<i class="bi bi-chevron-right text-primary fw-bold"></i> <span>Nắm được 1000 từ vựng và cụm từ tiếng Anh sử
											dụng
											trong đàm
											phán</span>
									</div>
								</div>
								<div>
									<div class="fw-bold fs-2">' . $course['discount'] . '<span class="fs-6">$</span></div>
									<div class="fs-2"><del>' . $course['price'] . '</del><span class="fs-6">$</span></div>
									<div class="fs-6 fw-bold text-end">OFF ' . percent($course['discount'], $course['price']) . '%</div>
									<div class="text-end"><a href="coursedesc.php?id=' . $course['id'] . '" class="btn btn-danger px-5">CHI TIẾT</a></div>
								</div>
							</div>';
			}
			?>
		</div>
	</main>
	<!-- Footer Start -->
	<?php
	require_once 'layouts/footer.php'
	?>
	<!-- Footer End -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../public/js/header.js"></script>
</body>

</html>