<main>
	<div class="article">
		<h1><?=$post['title']?></h1>
		<div><?=$post['content']?></div>
		<hr>
		<div>Category:
			<a href="<?=BASE_URL?>categories/<?=$post['category_id']?>"><?=$post['name']?></a>
		</div>
		<hr>
		<a href="<?=BASE_URL?>edit/<?=$id?>">Edit | </a>
		<a href="<?=BASE_URL?>delete/<?=$id?>">Remove</a>
	</div>
</main>
