<?php
session_start();

include_once ('init.php');
$user = [];
$user = authGetUser();

$pageCanonical = HOST . BASE_URL;

$uri = $_SERVER['REQUEST_URI'];
$wrongUrl = BASE_URL . 'index.php';

if (strpos($uri, $wrongUrl) === 0) {
	$cname = 'errors/e404';
} else {
	$routes = include ('routes.php');
	$url = $_GET['querysystemurl'] ?? '';
	$routerRes = parseUrl($url, $routes);
	$cname = $routerRes['controller'] ?? 'index';
	define('URL_PARAMS', $routerRes['params']);

	$urlLen = strlen($url);
	if ($urlLen > 0 && $url[$urlLen - 1] === '/') {
		$url = substr($url, $urlLen - 1);
	}
	$pageCanonical .= $url;
}

$path = "controllers/$cname.php";
$pageTitle = $pageContent = '';

$authLink = 'auth/login';
$authText = 'Login';
if (!empty($user['name'])) {
	$authText = $user['name'] . ' LouOut';
	$authLink = 'auth/logout';
}

if (!file_exists($path)) {
	$cname = 'errors/e404';
	$path = "controllers/$cname.php";
}

include_once ($path);

$html = template('/base/v_main', [
	'title' => $pageTitle,
	'content' => $pageContent,
	'canonical' => $pageCanonical,
	'authText' => $authText,
	'authLink' => $authLink,
]);

echo $html;
