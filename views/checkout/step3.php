<?php
session_start();
$base_url = '../';
require_once($base_url . '../database/database.php');
require_once($base_url . '../database/utility.php');
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
						<div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
			<div class="bg-white shadow-sm rounded p-3">
				<div class="text-center">
					<i class="bi bi-check2-circle fs-1 text-success fw-bold"></i>
				</div>
				<div class="fs-4 fw-bold text-center my-3">ĐẶT HÀNG THÀNH CÔNG</div>
				<div class="text-center">Vui lòng chuyển khoản trong 15 phút để giữ ưu đãi</div>
				<div class="countdown text-center fw-bold fs-5">&nbsp</div>
				<div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Tên tài khoản</th>
								<th scope="col">NGUYEN VAN QUY
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">Nội dung</th>
								<td>Thanh toán đơn hàng 1302404
								</td>
							</tr>
							<tr>
								<th scope="row">Số tiền</th>
								<td><?= $totalCheckout ?>$</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div>
					<table class="table table-hover">
						<thead>
							<tr class="bg-secondary">
								<th scope="col">Số tài khoản</th>
								<th scope="col">Ngân hàng</th>
								<th scope="col">Mã QR</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">0560118908002</th>
								<td>Mbbank - chi nhánh Hoàng Quốc Việt, Hà Nội</td>
								<td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-qr-code"></i> Xem</button></td>
							</tr>
							<tr>
								<th scope="row">8930199388888</th>
								<td>Mbbank - chi nhánh Hoàng Quốc Việt, Hà Nội</td>
								<td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-qr-code"></i> Xem</button></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="text-center my-2">
					Sau khi chuyển khoản, bạn chờ 30s để hệ thống xử lý
				</div>
				<div class="text-center my-2">Sau đó bấn vào nút bên dưới để vào học ngay
				</div>
				<div class="text-center">
					<a class="btn btn-primary" href="<?= asset('database/checkoutController.php') ?>">TÔI ĐÃ CHUYỂN KHOẢN</a>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">QR Code</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body text-center">
						<img src="../../public/images/QR.png" alt="">
						<div class="fw-bold fs-5 my-2">Chủ tài khoản: NGUYEN VAN QUY</div>
						<div>Số tiền: <span class="text-danger fw-bold"><?= $totalCheckout ?>$</span></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Footer Start -->
	<?php
	require_once '../../views/layouts/footer.php';
	?>
	<!-- Footer End -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../../public/js/header.js"></script>
	<script>
		$(document).ready(function() {
			var timer2 = "15:00";
			var interval = setInterval(function() {
				var timer = timer2.split(':');
				//by parsing integer, I avoid all extra string processing
				var minutes = parseInt(timer[0], 10);
				var seconds = parseInt(timer[1], 10);
				--seconds;
				minutes = (seconds < 0) ? --minutes : minutes;
				if (minutes < 0) clearInterval(interval);
				seconds = (seconds < 0) ? 59 : seconds;
				seconds = (seconds < 10) ? '0' + seconds : seconds;
				//minutes = (minutes < 10) ?  minutes : minutes;
				$('.countdown').html(minutes + ':' + seconds);
				timer2 = minutes + ':' + seconds;
			}, 1000);
		});
	</script>
</body>

</html>