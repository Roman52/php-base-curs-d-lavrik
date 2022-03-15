<?php
$articles = getArticles();

$pageTitle = 'All articles';
$pageContent = template('articles/v_all', [
	'articles' => $articles,
]);
