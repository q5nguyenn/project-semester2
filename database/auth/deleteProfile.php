<?php
session_start();
include '../../database/database.php';
include '../../database/utility.php';

$user_id = ""; // ID người dùng
if(!empty(checkLogin())) {
    $user_id = checkLogin()['id'];
}
$sql ="DELETE FROM users WHERE id = '".$user_id."'";
$result = excuteResult($sql, true);
// Kiểm tra kết quả xoá thông tin
if ($result){
    echo "Đã xảy ra lỗi khi xoá thông tin";
    exit();
}else{
    header('Location: ../../views/auth/signup.php');
    exit();

}

