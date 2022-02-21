<?php
include_once ('model/articles.php');
include_once ('model/categories.php');
include_once ('core/arr.php');

$categories = getCategories();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['title', 'content', 'categoryId']);
	$validateErrors = validateFields($fields);

	if (empty($validateErrors)) {
		$lastPostId = addArticle($fields);
		header("Location: index.php?c=article&id=$lastPostId");
		exit();
	}
} else {
	$fields = ['title' => '', 'content' => '', 'categoryId' => ''];
	$validateErrors = [];
}

include ('views/v_add.php');

