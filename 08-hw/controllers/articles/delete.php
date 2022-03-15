<?php
if ($user === null){
	header('Location: ' . BASE_URL . 'auth/login');
	exit();
}

$id = (int) URL_PARAMS['id'];
$postRemoved = removeArticle($id);
$pageTitle = 'Delete article';

if ($postRemoved) {
	$pageContent = template('articles/v_delete');
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_error');
}

