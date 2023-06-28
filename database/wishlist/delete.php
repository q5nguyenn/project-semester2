<?php
session_start();
require_once '../database.php';
require_once '../utility.php';
$id = getGET('id');
$user = checkLogin();

if (!empty($user)) {
    $sql = "DELETE FROM wishlists WHERE course_id = '" . $id . "' AND user_id ='" . $user['id'] . "'";

    excute($sql);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
