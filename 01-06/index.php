<?php
include_once ('functions.php');
$articles = getArticles();
?>

<?php if ($articles) : ?>
	<div class="articles">
		<?php foreach($articles as $id => $article): ?>
			<div class="article">
				<h2><?=$article['title']?></h2>
				<a href="01-06/article.php?id=<?=$id?>">Read more</a>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
