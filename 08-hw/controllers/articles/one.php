<?php
$id = (int) URL_PARAMS['id'];
$post = getArticle($id);
$hasPost = $post !== null;
$pageTitle = $post['title'] ?? 'Error';

if ($hasPost) {
	$showLinks = false;
	if ($user['id_user'] === $post['user_id'] ) {
		$showLinks = true;
	}
	
	$pageContent = template('articles/v_one', [
		'id' => $id,
		'post' => $post,
		'showLinks' => $showLinks,
	]);
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_404');
}