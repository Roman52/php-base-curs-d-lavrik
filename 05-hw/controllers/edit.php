<?php
include_once('model/articles.php');
include_once('model/categories.php');
include_once('core/arr.php');
$id = (int)($_GET['id'] ?? '');

$post = getArticle($id);

if (!$post) {
	header('HTTP/1.1 404 Not Found');
	include ('views/errors/v_404.php');
	exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['title', 'content', 'categoryId']);
	$validateErrors = validateFields($fields);

	if (empty($validateErrors)) {
		updateArticle($fields, $id);
		header("Location: index.php?c=article&id=$id");
		exit();
    }
} else {
	$fields = ['title' => '', 'content' => '', 'categoryId' => ''];
	$validateErrors = [];
}
$categories = getCategories();

include ('views/v_edit.php');

