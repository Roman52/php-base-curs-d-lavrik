<?php
include_once ('model/articles.php');
include_once ('model/categories.php');

$err = '';
$fields = ['title' => '', 'content' => '', 'categoryId' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields['title'] = trim($_POST['title']);
	$fields['content'] = trim($_POST['content']);
	$fields['categoryId'] = trim($_POST['categoryId']);

	if ($fields['title'] === '' || $fields['content'] === '' || $fields['categoryId'] === '') {
		$err = 'Заполните все поля!';
	} else {
		$lastPostId = addArticle($fields);
		header("Location: article.php?id=$lastPostId");
		exit();
	}
}

$categories = getCategories();
?>

<div class="form">
	<form method="post">
		<?php if ($categories) : ?>
			<select name="categoryId">
				<option value="">Category</option>
				<?php foreach ($categories as $category) : ?>
					<option value="<?=$category['id']?>"><?=$category['name']?></option>
				<?php endforeach; ?>
			</select>
		<?php endif; ?>
		<br>
		<br>
		Name:<br>
		<input type="text" name="title" value="<?=$fields['title']?>"><br>
		<br>
		Text:<br>
		<textarea name="content"><?=$fields['content']?></textarea>
		<br>
		<br>
		<button>Send</button>
		<p><?=$err?></p>
	</form>
</div>

<hr>
<a href="index.php">Main Page</a>
