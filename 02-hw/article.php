<?php
declare(strict_types=1);
include_once('model/articles.php');
include_once('model/logs.php');
$articles = getArticles();

$id = (int)($_GET['id'] ?? '');
$post = $articles[$id] ?? null;
$hasPost = articleExists($id);
?>

<div class="content">
	<?php if ($hasPost): ?>
		<div class="article">
			<h1><?= $post['title'] ?></h1>
			<div><?= $post['content'] ?></div>
			<hr>
			<a href="edit.php?id=<?= $id ?>">Edit | </a>
			<a href="delete.php?id=<?= $id ?>">Remove</a>
		</div>
	<?php else: ?>
		<div class="e404">
			<h1>Страница не найдена!</h1>
		</div>
	<?php endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>