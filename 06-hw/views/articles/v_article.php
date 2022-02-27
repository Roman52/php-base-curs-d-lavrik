<main>
	<div class="article">
		<h1><?=$post['title']?></h1>
		<div><?=$post['content']?></div>
		<hr>
		<div>Category:
			<a href="index.php?c=categories&id=<?=$post['category_id']?>"><?=$post['name']?></a>
		</div>
		<hr>
		<a href="index.php?c=edit&id=<?=$id?>">Edit | </a>
		<a href="index.php?c=delete&id=<?=$id?>">Remove</a>
	</div>
</main>
