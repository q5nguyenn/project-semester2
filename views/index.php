<?php
session_start();
require_once('../database/database.php');
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
</head>

<body>
	<!-- Header Start -->
	<?php
	require_once 'layouts/header.php';
	?>
	<!-- Header End -->
	<!-- <main class="min-vh-100">
		Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad numquam architecto repudiandae vero minima perspiciatis
		eius iste nulla inventore. Fugiat ex ducimus sunt minima, culpa nihil eos tenetur nulla similique.
	</main> -->
	<!-- Footer Start -->
	<?php
	require_once 'layouts/footer.php'
	?>
	<!-- Footer End -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../public/js/header.js"></script>
</body>

</html>