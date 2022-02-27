<?php
include_once ('core/validate.php');
$cname = $_GET['c'] ?? 'index';

if (isValidController($cname) && file_exists("controllers/$cname.php")) {
	$path = "controllers/$cname.php";
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$path = "views/errors/v_404.php";
}

include_once ($path);
