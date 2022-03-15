<?php
if ($user === null){
	header('Location: ' . BASE_URL . 'auth/login');
	exit();
}

$id = (int) URL_PARAMS['id'];
$post = getArticle($id);
$pageTitle = 'Delete article';

if ($user['id_user'] !== $post['user_id']) {
	$pageContent = template('auth/v_wrong_user');
} else {
	$postRemoved = removeArticle($id);

	if ($postRemoved) {
		$pageContent = template('articles/v_delete');
	} else {
		header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
		$pageContent = template('errors/v_error');
	}
}




