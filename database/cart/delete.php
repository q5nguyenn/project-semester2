<?php
session_start();
require_once '../database.php';
require_once '../utility.php';

$id = getGET('id');
$user = checkLogin();


if (!empty($user)) {
    $sql = " DELETE FROM `carts` WHERE id='".$id."' ";
    excute($sql);
    header("Location: ../../views/cart.php");
} else {
    header('location: ../../views/auth/signin.php');
}
