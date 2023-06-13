<?php
require_once 'database.php';
require_once 'utility.php';
$keyword = getGET('keyword');
echo "Tìm kiếm cho: " . $keyword;
