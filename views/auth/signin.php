<?php
session_start();
require_once '../../database/database.php';
// if (checkLogin()) {
// 	header("Location: ../index.php");
// }
$error = $email = $password = $remember = '';
if (isset($_SESSION['error'])) {
	$error =  $_SESSION['error'];
	$email =  $_SESSION['email'];
	unset($_SESSION['error']);
	unset($_SESSION['email']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng Nhập</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>

<body>
	<main>
		<div class="bg-image-container" style="background-image: url(../../public/images/bg-01.png); background-size: cover; background-position: center center;min-height: 100vh;">
			<div class="container-fluid">
				<div class="row justify-content-around ">
					<h2 class="text-center text-white pt-5">STAR CLASS</h2>
					<form class="col-md-3 bg-white p-3 py-3 my-3 rounded-3" action="../../database/auth/signinController.php" method="post" id="form-signin">
						<div class="form-group mt-3 ">
							<label for="fullname" class="fw-bold my-1">EMAIL / SỐ ĐIỆN THOẠI</label>
							<input placeholder="Email / Số điện thoại" type="text" name="email" id="email" class="form-control border-primary" value="<?= $email ?>">
						</div>
						<small class="input-item-error text-danger">&nbsp;
							<?= $error ?>
						</small>
						<div class="form-group">
							<label for="password" class="fw-bold my-1">MẬT KHẨU</label>
							<div class="col-sm-12">
								<input placeholder="Mật khẩu" type="password" name="password" id="password" class="form-control border-primary" value="<?= $password ?>">
							</div>
							<small class="input-item-error text-danger">&nbsp;
							</small>
						</div>
						<div class="form-check my-3">
							<input type="checkbox" class="form-check-input" id="remember" value="1" name="remember" <?= $remember ? 'checked' : '' ?> <label class="form-check-label" for="remember">Ghi nhớ tài khoản</label>
						</div>
						<div class="text-center mt-4">
							<button type="submit" class="btn btn-primary w-100" id="signin">ĐĂNG NHẬP</button>
						</div>
						<div class="d-flex justify-content-between mt-4">
							<small>Quên mật khẩu?</small>
							<small>Chưa có tài khoản? <a href="signup.php">Đăng ký</a></small>
						</div>
						<div class="d-flex justify-content-center mt-3">
							<div class="fw-bold">Hoặc đăng nhập với</div>
						</div>
						<div class="d-flex justify-content-center mt-3 mb-4">
							<button class="btn btn-danger" style="border-radius: 100px !important;"><i class="bi bi-google"></i>
								Google</button>
							<div class="mx-2"></div>
							<button class="btn btn-primary" style="border-radius: 100px !important;"><i class="bi bi-facebook"></i>
								Facebook</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../../public/js/utility.js"></script>
	<script>
		$('#signin').click(function(e) {
			e.preventDefault();
			checkName = checkEmpty($('#email'), '*Tên không được để trống.', 'pn');
			checkName = checkEmpty($('#password'), '*Mật khẩu không được để trống.', 'pn');
			if (checkName && checkEmpty) {
				$('#form-signin').submit();
			}
		});
	</script>
</body>

</html>