<?php
declare(strict_types=1);
include_once('functions.php');

$id = (int)($_GET['id'] ?? '');
$err = '';
$title= '';
$content = '';
$postEdited = false;

$hasPost = articleExists($id);
if (!$hasPost) :
    $err = 'Такой статьи не существует!';
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
endif;
?>

<div class="form">
    <? if ($postEdited): ?>
        <p>The article is edited.</p>
    <? else: ?>
        <form method="post">
            Title:<br>
            <input type="text" name="title" value="<?= $title?>"><br>
            <br>
            Content:<br>
            <textarea name="content" id="" cols="30" rows="10"><?=$content?></textarea>
            <br>
            <br>
            <button>Send</button>
            <p><?=$err?></p>
        </form>
    <? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>