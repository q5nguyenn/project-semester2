<?php
$base_url = '';
require_once 'database.php';
require_once 'utility.php';
require_once 'config.php';

$keyword = getGET('keyword');

require_once '../views/search.php';
