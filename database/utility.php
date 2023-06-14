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
