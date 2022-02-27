<?php
include_once ('init.php');
$cname = $_GET['c'] ?? 'index';
$path = "controllers/$cname.php";
$pageTitle = 'Error 404';
$pageH1 = 'Error 404';
$pageLeft = 'Error 404';
$pageContent = '';
$pageTemplate = 'v_main';

if (checkControllerName($cname) && file_exists($path)) {
	include_once ($path);
} else {
	$pageContent = template('errors/v_404');
}

$html = template("base/$pageTemplate", [
	'title' => $pageTitle,
	'content' => $pageContent,
	'h1' => $pageH1,
	'left' => $pageLeft,
]);

echo $html;

