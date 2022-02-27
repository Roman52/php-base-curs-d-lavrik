<?php
$id = (int)($_GET['id'] ?? '');
$post = getArticle($id);
$hasPost = $post !== null;
$pageTitle = $post['title'] ?? 'Error';

if ($hasPost) {
	$pageContent = template('articles/v_article', [
		'id' => $id,
		'post' => $post,
	]);
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_404');
}