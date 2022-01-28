<?php
declare(strict_types=1);
include_once('functions.php');

$isSend = false;
$err = '';
$title= '';
$content = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
	$title = trim($_POST['title']);
	$content = trim($_POST['content']);

	if ($title === '' || $content === '') :
		$err = 'Заполните все поля!';
	elseif (mb_strlen($content, 'UTF8') < 5) :
		$err = 'Текст не короче 5 символов!';
	else :
		addArticle($title, $content);
		$isSend = true;
	endif;
endif;
?>

<div class="form">
	<?php if ($isSend): ?>
		<p>The article is added.</p>
	<?php else: ?>
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
	<?php endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>