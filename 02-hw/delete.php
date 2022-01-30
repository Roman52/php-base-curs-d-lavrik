<?php
declare(strict_types=1);
include_once('model/articles.php');

$articles = getArticles();
$id = (int)($_GET['id'] ?? '');
$hasPost = $articles[$id] ?? null;
$postRemoved = false;

if ($hasPost) :
    $postRemoved = removeArticle($id);
    if ($postRemoved) :
        echo '<h1>The article is removed.</h1>';
    endif;
else :
    echo '<h1>Error!</h1>';
endif;
?>
<hr>
<a href="index.php">Move to main page</a>