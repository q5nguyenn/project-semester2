<?php
require_once 'config.php';
function openConnection()
{
	$conn = new mysqli(SERVERNAME, USER_NAME, PASSWORD, DBNAME);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

function closeConnection($conn)
{
	$conn->close();
}

// 
function excute($sql)
{
	$conn = openConnection();
	$conn->query($sql);
	closeConnection($conn);
}

// 
function excuteResult($sql, $first = false)
{
	$data = [];
	$conn = openConnection();
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
	} else {
		return false;
	}
	if ($first == true) {
		$data = reset($data);
	}
	closeConnection($conn);
	return $data;
}

function checkLogin()
{
	if (isset($_COOKIE['id']) || isset($_SESSION['user'])) {
		return  true;
	}
	return false;
}
