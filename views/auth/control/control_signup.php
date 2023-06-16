<?php
session_start();
include '../../../database/database.php';
include '../../../database/utility.php';
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

$fullname = getPOST('fullname');
$email = getPOST('email');
$phone = getPOST('phone');
$password = getPOST('password');
$confirm_password = getPOST('confirm_password');
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
// Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp nhau hay không
if ($password !== $confirm_password) {
    echo "Mật khẩu và nhập lại mật khẩu không khớp";
    die();
}

// Kiểm tra xem người dùng đã tồn tại trong cơ sở dữ liệu hay chưa
$check_sql = "SELECT * FROM users WHERE email = '".$email."'";
$user = excuteResult($check_sql, true);
if(is_array($user) && count($user) > 0) {
    echo "Email đã tồn tại";
    header('location: '.$_SERVER['HTTP_REFERER']);
    die();
}else {
    $sql =" INSERT INTO users ( name, email,  password,   phone_number)
    VALUES ('".$fullname."','".$email."','".$hashedPassword."','".$phone."')";
    excute($sql);
    header('Location: ../signin.php');
    $connection = getConnection(); // Tạo kết nối đến cơ sở dữ liệu
    closeConnection($connection);
    die();
}



