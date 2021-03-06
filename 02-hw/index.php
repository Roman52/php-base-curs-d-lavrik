<?php
declare(strict_types=1);
include_once('model/articles.php');
include_once('model/logs.php');
$articles = getArticles();

addLogs();
?>

<a href="add.php">Add article</a>
<a href="/logs.php"> | Logs</a>

<hr>
<div class="articles">
	<?php foreach($articles as $id => $article): ?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<a href="article.php?id=<?=$id?>">Read more</a>
		</div>
	<?php endforeach; ?>
</div>
	