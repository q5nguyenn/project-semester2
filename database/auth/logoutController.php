<?php
session_start();
session_destroy();
setcookie('id', $user['id'], time() - 120, '/');
setcookie('email', $email, time() - 120, '/');
setcookie('password', $password, time() - 120, '/');
setcookie('remember', 1, time() - 120, '/');
header('Location: ' . $_SERVER['HTTP_REFERER']);
