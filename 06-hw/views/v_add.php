<div class="form">
	<form method="post">
		<?php if ($categories) : ?>
			<label for="category-id">Category:</label>
			<select name="categoryId" id="category-id">
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
		<?php foreach ($validateErrors as $error) : ?>
			<p><?=$error?></p>
		<?php endforeach; ?>
	</form>
</div>

<hr>
<a href="index.php">Main Page</a>
