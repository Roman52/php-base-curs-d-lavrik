<?php
$cats = getCategories();
$hasCategories = $cats !== null;
$pageTitle = 'All Categories:';

if ($hasCategories) {
	$pageContent = template('categories/v_cats_list', [
		'cats' => $cats,
	]);
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_404');
}
