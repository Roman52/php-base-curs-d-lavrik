<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['cat_title', 'cat_url']);
	$validateErrors = validateCategoryFields($fields);

	if (empty($validateErrors)) {
		$lastCatId = addCategory($fields);
		header("Location: " . BASE_URL . "cats-list");
		exit();
	}
} else {
	$fields = ['cat_title' => '', 'cat_url' => ''];
	$validateErrors = [];
}

$pageTitle = 'Add category';
$pageContent = template('categories/v_cats_add', [
	'fields' => $fields,
	'validateErrors' => $validateErrors,
]);

