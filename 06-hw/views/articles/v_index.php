<main>
	<h1>All articles</h1>
	<div class="articles">
		<?php foreach($articles as $article): ?>
			<div class="article">
				<h2><?=$article['title']?></h2>
				<a href="index.php?c=article&id=<?=$article['article_id']?>">Read more</a>
			</div>
			<hr>
		<?php endforeach; ?>
	</div>
</main>
