<?php
include_once ('init.php');

$routes = include ('routes.php');
$url = $_GET['querysystemurl'] ?? '';
$routerRes = parseUrl($url, $routes);
$cname = $routerRes['controller'] ?? 'index';
define('URL_PARAMS', $routerRes['params']);

$path = "controllers/$cname.php";
$pageTitle = 'Error 404';
$pageContent = '';

if (file_exists($path)) {
	include_once ($path);
} else {
	exit('Fatal Error');
}

$html = template('/base/v_main', [
	'title' => $pageTitle,
	'content' => $pageContent,
]);

echo $html;