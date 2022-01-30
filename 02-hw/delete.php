<?php
declare(strict_types=1);
include_once('model/articles.php');
include_once('model/logs.php');

$articles = getArticles();
$id = (int)($_GET['id'] ?? '');
$hasPost = $articles[$id] ?? null;
$postRemoved = false;

$ip = $_SERVER['REMOTE_ADDR'];
$currentUrl = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$refUrl = $_SERVER['HTTP_REFERER'] ?? null;
addLogs($ip, $currentUrl, $refUrl);

if ($hasPost) {
	$postRemoved = removeArticle($id);
	if ($postRemoved) {
		echo '<h1>The article is removed.</h1>';
	}
} else {
	echo '<h1>Error!</h1>';
}
?>
<hr>
<a href="index.php">Move to main page</a>