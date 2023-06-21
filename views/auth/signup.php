<?php
session_start();
require_once '../../database/database.php';

// die();
$error = $email = $password = $remember = '';
if (isset($_SESSION['error'])) {
	$error =  $_SESSION['error'];
	$email =  $_SESSION['email'];
	unset($_SESSION['error']);
	unset($_SESSION['email']);
    echo $error;
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="public/css/header.css" />
</head>

<body>
<!-- <header></header> -->
<header></header>
<main>
    <div class="bg-image-container" style="background-image: url(../../public/images/bg-01.png); background-size: cover; background-position: center center;min-height: 100vh;">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <h2 class="text-center text-white pt-5">STAR CLASS</h2>
                    <div class="col-md-4 bg-white p-3 py-3 my-3 rounded-3" >
                        <!--form -->
                        <form action="../../database/auth/signupController.php" method="post" novalidate>
                        <div class="form-group mb-3 ">
                            <label for="fullname" class="fw-bold" style="font-size: 12px">Họ Tên</label>
                            <input placeholder="Họ Tên" type="text" name="fullname" id="fullname" class="form-control border-primary"  required >
                        </div>
                        <div class="form-group my-3">
                            <label for="email" class="fw-bold" style="font-size: 12px">EMAIL</label>
                            <div class="col-sm-12">
                                <input placeholder="Email" type="email" name="email" id="email" class="form-control border-primary" required >
                            </div>
                            <small class="input-item-error text-danger">&nbsp;
							<?= $error ?>
						</small>
                        </div>
                        <!-- Example split danger button DROPDOWN-->
                        <label  class="fw-bold" style="font-size: 12px">SỐ ĐIỆN THOẠI</label>
                        <div class="input-group">
                            <div class="dropdown bg-white">
                                <select name="cars" class="form-select">
                                    <option value="vietnam">🇻🇳<span class="opacity-25">84+</span></option>
                                    <option value="japan">🇯🇵<p class="opacity-50 ">+81</p></option>
                                    <option value="korea">🇰🇷<p class="opacity-50 ">+82</p></option>
                                    <option value="audi">🇫🇷<p class="opacity-50 ">+262</p></option>
                                </select>
                            </div>
                            <input placeholder="012 345 6789" type="text" name="phone" id="" class="form-control border-primary"   required >
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-sm-6">
                                <label for="password" class="fw-bold" style="font-size: 12px">MẬT KHẨU</label>
                                <input placeholder="Mật khẩu" type="password" name="password" id="password" class="form-control border-primary" required >
                            </div>
                            <div class="col-sm-6">
                                <label for="confirm-password" class="fw-bold" style="font-size: 12px">NHẬP LẠI MẬT KHẨU</label>
                                <input placeholder="Nhập lại mật khẩu" type="password" name="confirm_password" id="confirm-password" class="form-control border-primary" required>
                            </div>
                        </div>


                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary w-100">ĐĂNG KÝ</button>
                        </div>
                        <div class="d-flex justify-content-between mt-4 " style="font-size: 12px">
                            <span >Quên mật khẩu?</span>
                            <span >Chưa có tài khoản? <a href="signin.php">Đăng nhập</a></span>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <div class="fw-bold">Hoặc đăng nhập với</div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <button type="submit" class="btn btn-danger" style="border-radius: 100px !important;"><i class="bi bi-google"></i> Google</button>
                            <div class="mx-2"></div>
                            <button type="submit" class="btn btn-primary" style="border-radius: 100px !important;"><i class="bi bi-facebook"></i> Facebook</button>
                        </div>
                        </form>
                        <!-- -->
                    </div>
            </div>
        </div>
    </div>

</main>
<footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="public/js/header.js"></script>
</body>
</html>