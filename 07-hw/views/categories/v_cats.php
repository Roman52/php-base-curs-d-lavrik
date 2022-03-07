<main>
	<h1>Category: <?=$categoryTitle?></h1>
	<hr>
	<div class="categories">
		<?php foreach($categoryArticles as $article): ?>
			<div class="article">
				<a href="<?=BASE_URL?>article/<?=$article['article_id']?>"><?=$article['title']?></a>
			</div>
			<hr>
		<?php endforeach; ?>
	</div>
	<a href="<?=BASE_URL?>cats-edit/<?=$categoryId?>">Edit Category | </a>
	<a href="<?=BASE_URL?>cats-delete/<?=$categoryId?>">Remove Category</a>
</main>
