<?php
$articles = getArticles();

$pageTitle = 'All articles';
$pageContent = template('articles/v_index', [
	'articles' => $articles,
]);
