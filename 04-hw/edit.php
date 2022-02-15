<?php
declare(strict_types=1);
include_once('model/articles.php');
include_once('model/categories.php');

$id = (int)($_GET['id'] ?? '');
$err = '';
$fields = ['title' => '', 'content' => '', 'categoryId' => ''];

$post = getArticle($id);

if (!$post) {
	exit('Такой страницы не существует! <br><br> <a href="/index.php">На главную</a>');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fields['title'] = trim($_POST['title']);
    $fields['content'] = trim($_POST['content']);
	$fields['categoryId'] = trim($_POST['categoryId']);

	if ($fields['title'] === '' || $fields['content'] === '' || $fields['categoryId'] === '') {
        $err = 'Заполните все поля!';
    } else {
	    updateArticle($fields, $id);
	    header('Location: index.php');
	    exit();
    }
}
$categories = getCategories();
?>

<div class="form">
    <form method="post">
	    <?php if ($categories) : ?>
		    <select name="categoryId">
			    <option value="<?$post['category_id']?>"><?=$post['name']?></option>
			    <?php foreach ($categories as $category) : ?>
				    <option value="<?=$category['id']?>"><?=$category['name']?></option>
			    <?php endforeach; ?>
		    </select>
	    <?php endif; ?>
	    <br>
        Title:<br>
        <input type="text" name="title" value="<?=$post['title']?>"><br>
        <br>
        Content:<br>
        <textarea name="content" id="" cols="30" rows="10"><?=$post['content']?></textarea>
        <br>
        <br>
        <button>Send</button>
        <p><?=$err?></p>
    </form>
</div>
<hr>
<a href="index.php">Move to main page</a>