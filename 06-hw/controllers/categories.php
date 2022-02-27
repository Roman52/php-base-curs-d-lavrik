<?php
$catId = (int)($_GET['id'] ?? '');
$categoryInfo = getCategory($catId);
$categoryArticles = getCategoryArticles($catId);

$pageTitle = 'Category: ' . $categoryInfo['name'];
$pageContent = template('categories/v_categories', [
	'categoryTitle' => $categoryInfo['name'],
	'categoryArticles' => $categoryArticles,
]);