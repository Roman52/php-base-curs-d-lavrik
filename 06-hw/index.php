<?php
include_once ('init.php');
$cname = $_GET['c'] ?? 'index';
$path = "controllers/$cname.php";
$pageTitle = 'Error 404';
$pageContent = '';


if (isValidController($cname) && file_exists("controllers/$cname.php")) {
	include_once ($path);
} else {
	header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
	$pageContent = template('errors/v_404');
}

$html = template('base/v_main', [
	'title' => $pageTitle,
	'content' => $pageContent,
]);

echo $html;
