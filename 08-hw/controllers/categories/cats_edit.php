<?php
$id = (int) URL_PARAMS['id'];
$category = getCategory($id);
$pageTitle = 'Edit category';
$pageContent = '';

if (!$category) {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_404');
} else {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$fields = extractFields($_POST, ['cat_title', 'cat_url']);
		$validateErrors = validateCategoryFields($fields);

		if (empty($validateErrors)) {
			updateCategory($fields, $id);
			header("Location: " . BASE_URL . "cat/$id");
			exit();
		}
	} else {
		$fields = ['cat_title' => '', 'cat_url' => ''];
		$validateErrors = [];
	}

	$pageContent = template('categories/v_cats_edit', [
		'category' => $category,
		'validateErrors' => $validateErrors,
	]);
}