<div class="form">
	<form method="post">
		<?php if ($categories) : ?>
			<label for="category-id">Category:</label>
			<select name="categoryId" id="category-id">
				<option value="<?=$post['category_id']?>"><?=$post['name']?></option>
				<?php foreach ($categories as $category) : ?>
					<?php if ($category['id'] === $post['category_id']) continue; ?>
					<option value="<?=$category['id']?>"><?=$category['name']?></option>
				<?php endforeach; ?>
			</select>
			<br>
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
		<?php foreach ($validateErrors as $error) : ?>
			<p><?=$error?></p>
		<?php endforeach; ?>
	</form>
</div>
<hr>
<a href="index.php">Move to main page</a>
