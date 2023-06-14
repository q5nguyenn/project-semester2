<?php
session_start();
require_once('../database/database.php');
$selects_slider = "SELECT * FROM sliders ORDER BY id DESC LIMIT 3";
$query_slider = mysqli_query(openConnection(), $selects_slider);
$select_topsale = "SELECT courses.*, users.name as teacher_name, users.thumbnail as teacher_thumbnail FROM `courses` JOIN users  ON courses.teacher_id = users.id ORDER BY teacher_id DESC LIMIT 12";
$query_topsale = mysqli_query(openConnection(), $select_topsale);
$select_sale = "SELECT courses.*, users.name as teacher_name, users.thumbnail as teacher_thumbnail FROM `courses` JOIN users  ON courses.teacher_id = users.id AND ((courses.price - courses.discount)/courses.price)*100 > 50 ORDER BY teacher_id DESC LIMIT 8";
$query_sale = mysqli_query(openConnection(), $select_sale);
$select_starup = "SELECT courses.*,  users.name as teacher_name, users.thumbnail as teacher_thumbnail FROM `courses` JOIN users  ON courses.teacher_id = users.id JOIN departments ON courses.department_id = departments.id AND courses.department_id = 24 ORDER BY teacher_id  DESC LIMIT 5";
$query_starup = mysqli_query(openConnection(), $select_starup);
$select_faculties = "SELECT * FROM faculties ORDER BY id ASC LIMIT 12";
$query_faculties = mysqli_query(openConnection(),$select_faculties);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Starclasses</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="../public/css/header.css" />
	<link rel="stylesheet" href="../public/css/homepage.css">
	<!-- <link rel="stylesheet" href="../public/css/reset.css"> -->
</head>

<body>
	<!-- Header Start -->
	<?php
	require_once 'layouts/header.php';
	?>
	<!-- Header End -->

	<!-- Footer Start -->
	<?php
	require_once 'layouts/footer.php'
	?>
	<!-- Footer End -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../public/js/header.js"></script>
</body>

</html>