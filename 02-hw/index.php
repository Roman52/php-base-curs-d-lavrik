<?php
declare(strict_types=1);
include_once('model/articles.php');
include_once('model/logs.php');
$articles = getArticles();

$ip = $_SERVER['REMOTE_ADDR'];
$currentUrl = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$refUrl = $_SERVER['HTTP_REFERER'] ?? null;
addLogs($ip, $currentUrl, $refUrl);
?>

<a href="add.php">Add article</a>

<hr>
<div class="articles">
	<?php foreach($articles as $id => $article): ?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<a href="article.php?id=<?=$id?>">Read more</a>
		</div>
	<?php endforeach; ?>
</div>
	