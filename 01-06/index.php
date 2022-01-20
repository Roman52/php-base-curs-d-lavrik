<?php
include_once ('functions.php');
$articles = getArticles();
?>

<div class="articles">
	<? foreach($articles as $id => $article): ?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<a href="01-06/article.php">Read more</a>
		</div>
	<? endforeach; ?>
</div>
