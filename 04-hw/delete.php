<?php
declare(strict_types=1);
include_once('model/articles.php');

$id = (int)($_GET['id'] ?? '');

$postRemoved = removeArticle($id);

if ($postRemoved) {
	echo '<h1>The article is removed.</h1>';
} else {
	echo '<h1>Error!</h1>';
} ?>

<hr>
<a href="index.php">Move to main page</a>