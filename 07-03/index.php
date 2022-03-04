<?php
var_dump($_GET);

include_once ('init.php');
$cname = $_GET['c'] ?? 'index';
$path = "controllers/$cname.php";
$pageTitle = 'Error 404';
$pageContent = '';

if (checkControllerName($cname) && file_exists($path)) {
	include_once ($path);
} else {
	$pageContent = template('errors/v_404');
}

$html = template('/base/v_main', [
	'title' => $pageTitle,
	'content' => $pageContent,
]);

echo $html;

