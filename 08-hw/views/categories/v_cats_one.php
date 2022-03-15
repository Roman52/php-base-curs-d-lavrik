<main>
	<div class="category">
		<h1>Category Name: <?=$cat['name']?></h1>
		<div>Category URL: <?=$cat['url']?></div>
		<hr>
		<a href="<?=BASE_URL?>cats-edit/<?=$id?>">Edit | </a>
		<a href="<?=BASE_URL?>cats-delete/<?=$id?>">Remove</a>
	</div>
</main>
