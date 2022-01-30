<?php
declare(strict_types=1);
include_once('model/articles.php');

$id = (int)($_GET['id'] ?? '');
$err = '';
$title= '';
$content = '';
$postEdited = false;

$hasPost = articleExists($id);
if (!$hasPost) :
	exit('Такой страницы не существует! <br> <a href="/index.php">На главную</a>');
endif;

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title === '' || $content === '') :
        $err = 'Заполните все поля!';
    elseif (mb_strlen($content, 'UTF8') < 5) :
        $err = 'Текст не короче 5 символов!';
    else :
        $postEdited = editArticle($id, $title, $content);
    endif;
else :
	$articles = getArticles();
	$title = $articles[$id]['title'];
	$content = $articles[$id]['content'];
endif;
?>

<div class="form">
    <?php if ($postEdited): ?>
        <p>The article is edited.</p>
    <?php else: ?>
        <form method="post">
            Title:<br>
            <input type="text" name="title" value="<?=$title?>"><br>
            <br>
            Content:<br>
            <textarea name="content" id="" cols="30" rows="10"><?=$content?></textarea>
            <br>
            <br>
            <button>Send</button>
            <p><?=$err?></p>
        </form>
    <?php endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>