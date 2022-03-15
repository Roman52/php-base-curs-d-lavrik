<?php
$id = (int) URL_PARAMS['id'];
$post = getArticle($id);
$hasPost = $post !== null;
$pageTitle = $post['title'] ?? 'Error';

if ($hasPost) {
	$pageContent = template('articles/v_one', [
		'id' => $id,
		'post' => $post,
	]);
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_404');
}