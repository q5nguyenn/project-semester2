<?php
include '../database.php';
include '../utility.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['btn'])){
    $search = getPOST('search');
    $sql ="SELECT * FROM `courses` WHERE name LIKE '%$search%'";
    $result = excuteResult($sql,true);

    if (!empty($result)) {
        foreach ($result as $course) {
            echo "<div>" . $course['name'] . "</div>";
            echo "<div>" . $course['price'] . "</div>";
        }
    } else {
        echo "Không tìm thấy kết quả phù hợp.";
    }

}