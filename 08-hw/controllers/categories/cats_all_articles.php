<?php
$catId = (int) URL_PARAMS['id'];
$categoryInfo = getCategory($catId);
$categoryArticles = getCategoryArticles($catId);

$pageTitle = 'Category: ' . $categoryInfo['name'];
$pageContent = template('categories/v_cats', [
	'categoryTitle' => $categoryInfo['name'],
	'categoryArticles' => $categoryArticles,
	'categoryId' => $catId,
]);