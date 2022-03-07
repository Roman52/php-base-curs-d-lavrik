<?php
$categories = getCategories();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['title', 'content', 'categoryId']);
	$validateErrors = validateFields($fields);

	if (empty($validateErrors)) {
		$lastPostId = addArticle($fields);
		header("Location: " . BASE_URL . "article/$lastPostId");
		exit();
	}
} else {
	$fields = ['title' => '', 'content' => '', 'categoryId' => ''];
	$validateErrors = [];
}

$pageTitle = 'Add article';
$pageContent = template('articles/v_add', [
	'fields' => $fields,
	'validateErrors' => $validateErrors,
	'categories' => $categories,
]);

