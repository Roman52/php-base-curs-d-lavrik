<?php
include_once ('functions.php');

$article_id = (int)($_GET['id'] ?? '');
?>

<?php if ($article_id) : ?>
	<?php
	$articles = getArticles();
	$post = $articles[$article_id] ?? null;
	?>
	<?php if (isset($post)) : ?>
		<div class="article">
			<h1><?=$post['title']?></h1>
			<div><?=$post['content']?></div>
		</div>
	<?php else : ?>
		<h1>404</h1>
	<?php endif; ?>
<?php endif; ?>

