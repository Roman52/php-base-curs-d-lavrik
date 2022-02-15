<?php
declare(strict_types=1);
include_once('model/articles.php');
$articles = getArticles();
?>

<a href="add.php">Add article</a>

<hr>
<div class="articles">
	<?php foreach($articles as $article): ?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<a href="article.php?id=<?=$article['article_id']?>">Read more</a>
		</div>
	<?php endforeach; ?>
</div>
	