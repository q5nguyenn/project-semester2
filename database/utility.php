<?php

// POST
function getPOST($field)
{
	$resul = '';
	if (isset($_POST[$field])) {
		$resul = $_POST[$field];
	}
	return $resul;
}

// GEST
function getGET($field)
{
	$resul = '';
	if (isset($_GET[$field])) {
		$resul = $_GET[$field];
	}
	return $resul;
}

//get Percent 
function percent($a, $b)
{
	return round(($b - $a) / $b, 2) * 100;
}



function asset($path)
{
	return BASE_URL . $path;
}

function showStarRate($rate)
{
	$rate = floatval($rate);
	$num =  round($rate * 2) / 2.0;
	$phannguyen = floor($num);
	$phandu = $num - $phannguyen;
	$htmlString = "";
	if ($phandu == 0) {
		for ($i = 1; $i <= $phannguyen; $i++) {
			$htmlString .= '<i class="bi bi-star-fill"></i>';
		}
		for ($i = $phannguyen + 1; $i <= 5; $i++) {
			$htmlString .= '<i class="bi bi-star"></i>';
		}
	} else {
		for ($i = 1; $i <= $phannguyen; $i++) {
			$htmlString .= '<i class="bi bi-star-fill"></i>';
		}
		$htmlString .= '<i class="bi bi-star-half"></i>';
		for ($i = $phannguyen + 2; $i <= 5; $i++) {
			$htmlString .= '<i class="bi bi-star"></i>';
		}
	}
	return $htmlString;
}

function setInterval($f, $seconds)
{
	while (true) {
		$f();
		sleep($seconds);
	}
}

function upload()
{
	$target_dir = "../public/storage";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if (isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if ($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}

	// Allow certain file formats
	if (
		$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif"
	) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
