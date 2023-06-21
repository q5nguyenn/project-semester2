<?php
session_start();
include '../../database/database.php';
include '../../database/utility.php';
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

$user_id = 2; // ID người dùng
if(!empty(checkLogin())) {
    $user_id = checkLogin()['id'];
}

// Lấy thông tin của người dùng từ cơ sở dữ liệu
$sql_check = "SELECT * FROM users WHERE id = '" . $user_id . "'";
$user = excuteResult($sql_check, true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $thumbnail = getPOST('thumbnial');
    $name = getPOST('name');
    $email = getPOST('email');
    $phone_number = getPOST('phone');
    $address = getPOST('address');
    $birth_day = getPOST('birthday');
   

    $sql = "UPDATE users SET name='$name', email='$email', phone_number='$phone_number', address='$address', birth_day='$birth_day', thumbnail= '$thumbnail'
            WHERE id = $user_id";
    excuteResult($sql,true);

    // Chuyển hướng về trang xem thông tin người dùng sau khi cập nhật thành công
    header('Location: ../../views/auth/profile.php');
    exit();
}