<?php
session_start();
$base_url = '../';
require_once($base_url . '../database/database.php');
if (checkLogin()) {
	$user = $_SESSION['user'];
} else {
	header("Location: " . asset('views/auth/sigin.php'));
}
$courses = excuteResult('SELECT courses.* FROM courses
JOIN carts ON courses.id = carts.course_id
WHERE carts.user_id = 2');

$totalCheckout = 0;
foreach ($courses as $course) {
	$totalCheckout +=  $course['discount'];
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
	<link rel="stylesheet" href="../../public/css/header.css" />
</head>

<body>
	<!-- Header Start -->
	<?php
	require_once '../../views/layouts/header.php';
	?>
	<!-- Header End -->
	<main class="min-vh-100 bg-light">
		<div class="contaier-fluid bg-primary pt-4 pb-5">
			<div class="container">
				<div class="w-75 d-flex mx-auto justify-content-between position-relative">
					<div class="progress position-absolute top-50 start-0 w-100 translate-middle-y" style="height: 8px; z-index: 1;">
						<div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex flex-column align-items-center position-relative" style="z-index: 1;">
						<div class="rounded-circle bg-white d-flex justify-content-center align-items-center border border-5 border-info" style="width: 40px; height: 40px">
							1
						</div>
						<div class="text-white position-absolute start-50 top-100 translate-middle-x text-center" style="width: 150px;">
							Thông tin
						</div>
					</div>
					<div class="d-flex flex-column align-items-center position-relative" style="z-index: 1;">
						<div class="rounded-circle bg-white d-flex justify-content-center align-items-center border border-5 border-info" style="width: 40px; height: 40px">
							2
						</div>
						<div class="text-white position-absolute start-50 top-100 translate-middle-x text-center" style="width: 150px;">
							Thanh toán
						</div>
					</div>
					<div class="d-flex flex-column align-items-center position-relative" style="z-index: 1;">
						<div class="rounded-circle bg-white d-flex justify-content-center align-items-center border border-5 border-info" style="width: 40px; height: 40px">
							3
						</div>
						<div class="text-white position-absolute start-50 top-100 translate-middle-x text-center" style="width: 150px;">
							Vào học
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container my-3">
			<div class=" row">
				<div class="fs-5 my-3">NHẬP THÔNG TIN NGƯỜI MUA
				</div>
				<div class="col-8">
					<div class="bg-white shadow-sm p-3 rounded">
						<form>
							<div class="form-group">
								<label for="name" class="my-2">Họ và tên</label>
								<input type="email" class="form-control" id="name" aria-describedby="emailHelp" value="<?= $user['name'] ?>" name="name">
							</div>
							<div class="form-group">
								<label for="email" class="my-2">Email</label>
								<input type="email" class="form-control" id="email" value="<?= $user['email'] ?>" name="email">
							</div>
							<div class="form-group">
								<label for="phone-number" class="my-2">Điện thoại</label>
								<input type="text" class="form-control" id="phone-number" placeholder="Password" value="<?= $user['phone_number'] ?>" name="phone_number">
							</div>
							<div class="form-check my-2">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Gửi tặng người thân</label>
							</div>
							<a type="submit" class="btn btn-primary w-100 mt-2" href="step2.php">Tiếp theo</a>
						</form>
					</div>
				</div>
				<div class="col-4">
					<div class="bg-white shadow-sm p-3 rounded">
						<div class="d-flex justify-content-between border-bottom">
							<div>Đơn hàng</div>
							<a class="btn" href="<?= asset('views/cart.php') ?>"><i class="bi bi-pencil-square"></i> Sửa</a>
						</div>
						<?php
						foreach ($courses as $course) {
							echo '<div class="row py-3 border-bottom">
											<div class="col-8">' . $course['name'] . '</div>
											<div class="col-4 text-end">
												<div>' . $course['discount'] . '$</div>
												<div><del>' . $course['price'] . '$</del></div>
											</div>
										</div>';
						}
						?>

						<div class="row pt-3 fw-bold">
							<div class="col-8">Thành tiền</div>
							<div class="col-4 text-end text-danger">
								<div><?= $totalCheckout ?>$</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Footer Start -->
	<?php
	require_once '../../views/layouts/footer.php.php';
	?>
	<!-- Footer End -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?= $base_url ?>../public/js/header.js"></script>
</body>

</html>