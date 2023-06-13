<?php
include 'database.php';
include 'utility.php';
$keyword = getGET('keyword');
echo "Tìm kiếm cho: " . $keyword;
