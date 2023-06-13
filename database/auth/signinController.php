<?php
require_once '../database.php';
require_once '../utility.php';

$email = getPOST('email');
$password = getPOST('password');
$remember = getPOST('remember');
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
$error = '';
session_start();
$_SESSION['email'] = $email;

$sql = "SELECT * FROM `users` WHERE email = '$email'";
$user = excuteResult($sql, true);
if (!$user) {
	header("Location: ../../views/auth/signin.php");
	$_SESSION['error'] = '*Tài khoản không tồn tại.';
} else {
	if (password_verify($password, $user['password'])) {
		$_SESSION['user'] = $user;
		if ($remember == 1) {
			setcookie('id', $user['id'], time() + 120, '/');
			setcookie('email', $email, time() + 120, '/');
			setcookie('password', $password, time() + 120, '/');
			setcookie('remember', 1, time() + 120, '/');
		} else {
			setcookie('id', $user['id'], time(), '/');
			setcookie('email', $email, time(), '/');
			setcookie('password', $password, time(), '/');
			setcookie('remember', 1, time(), '/');
		}
		header("Location: ../../views/index.php");
	} else {
		$_SESSION['error'] = '*Mật khẩu không hợp lệ.';

		// Điều hướng trở về trang đăng nhập
		header("Location: ../../views/auth/signin.php");
		exit();
	}
}
