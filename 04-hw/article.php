<?php
declare(strict_types=1);
include_once('model/articles.php');
$id = (int)($_GET['id'] ?? '');
$post = getArticle($id);
?>

<div class="content">
	<?php if ($post) : ?>
		<div class="article">
			<h1><?=$post['title']?></h1>
			<div><?=$post['content']?></div>
			<hr>
			<div>Category: <?=$post['name']?></div>
			<hr>
			<br>
			<a href="edit.php?id=<?=$id?>">Edit | </a>
			<a href="delete.php?id=<?=$id?>">Remove</a>
		</div>
	<?php else: ?>
		<div class="e404">
			<h1>Страница не найдена!</h1>
		</div>
	<?php endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>