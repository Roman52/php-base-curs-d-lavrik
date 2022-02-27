<?php
include_once('model/articles.php');
$id = (int)($_GET['id'] ?? '');
$post = getArticle($id);
$hasPost = $post !== null;

if ($hasPost) {
	include ('views/v_article.php');
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	include ('views/errors/v_404.php');
}