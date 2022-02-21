<div class="article">
	<h1><?=$post['title']?></h1>
	<div><?=$post['content']?></div>
	<hr>
	<div>Category: <?=$post['name']?></div>
	<hr>
	<br>
	<a href="index.php?c=edit&id=<?=$id?>">Edit | </a>
	<a href="index.php?c=delete&id=<?=$id?>">Remove</a>
</div>
<hr>
<a href="index.php">Move to main page</a>