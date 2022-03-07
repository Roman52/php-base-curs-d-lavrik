<?php
function isValidController(string $url): bool {
	return (bool) preg_match('/^[aA-zZ0-9_\-]*$/', $url);
}

function validateFields(array &$fields):array {
	$errors = [];
	$titleLen = mb_strlen($fields['title'], 'UTF-8');
	$contentLen = mb_strlen($fields['content'], 'UTF-8');

	if ($titleLen < 2) {
		$errors[] = 'Имя не короче 2 символов';
	}

	if ($contentLen < 10 || $contentLen > 140) {
		$errors[] = 'Текст от 10 до 140 символов';
	}

	$fields['title'] = htmlspecialchars($fields['title']);
	$fields['content'] = htmlspecialchars($fields['content']);
	$fields['categoryId'] = (int) $fields['categoryId'];

	return $errors;
}

function validateCategoryFields(array &$fields):array {
	$errors = [];
	$titleLen = mb_strlen($fields['cat_title'], 'UTF-8');

	if ($titleLen < 2) {
		$errors[] = 'Имя категории не короче 2 символов';
	}

	if (!preg_match('/^[aA-zZ0-9_\-?=\/&\.\:]*$/', $fields['cat_url'])) {
		$errors[] = 'Не корректрый url';
	}

	$fields['cat_title'] = htmlspecialchars($fields['cat_title']);
	$fields['cat_url'] = htmlspecialchars($fields['cat_url']);

	return $errors;
}
