<main>
	<div class="article">
		<h1><?=$post['title']?></h1>
		<div><?=$post['content']?></div>
		<hr>
		<div>Category:
			<a href="<?=BASE_URL?>cats/<?=$post['category_id']?>"><?=$post['name']?></a>
		</div>
		<?php if ($showLinks) : ?>
			<hr>
			<a href="<?=BASE_URL?>edit/<?=$id?>">Edit | </a>
			<a href="<?=BASE_URL?>delete/<?=$id?>">Remove</a>
		<?php endif; ?>
	</div>
</main>
