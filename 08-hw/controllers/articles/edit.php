<?php
if ($user === null){
	header('Location: ' . BASE_URL . 'auth/login');
	exit();
}

$id = (int) URL_PARAMS['id'];
$post = getArticle($id);

$pageTitle = 'Edit article';
$pageContent = '';

if (!$post) {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_404');
} else {
	if ($user['id_user'] !== $post['user_id']) {
		$pageContent = template('auth/v_wrong_user');
	} else {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$fields = extractFields($_POST, ['title', 'content', 'categoryId']);
			$validateErrors = validateFields($fields);

			if (empty($validateErrors)) {
				updateArticle($fields, $id);
				header("Location: " . BASE_URL . "article/$id");
				exit();
			}
		} else {
			$fields = ['title' => '', 'content' => '', 'categoryId' => ''];
			$validateErrors = [];
		}
		$categories = getCategories();

		$pageContent = template('articles/v_edit', [
			'categories' => $categories,
			'post' => $post,
			'validateErrors' => $validateErrors,
		]);
	}
}
