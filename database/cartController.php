<?php
session_start();
require_once 'database.php';
require_once 'utility.php';
$id = getGET('id');
$user = checkLogin();
if (!empty($user)) {
    $sql = "INSERT INTO `carts`(`course_id`, `user_id`) VALUES ('.$id.','" . $user['id'] . "')";
    // echo $sql;
    // die();
    excute($sql);
    header("Location: ../views/coursedesc.php?id=" . $id);
} else {
    header("Location: ../views/auth/signin.php");
}
