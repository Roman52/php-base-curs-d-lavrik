<?php
include_once ('init.php');
define('URL_PARAMS', parseUrl($_GET['querysystemurl'] ?? ''));
$cname = URL_PARAMS[0] ?? 'index';
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