<main>
	<h1>Create new article</h1>
	<div class="form">
		<form method="post">
			<?php if ($categories) : ?>
				<div class="form-group">
					<label for="category-id">Category:</label>
					<select name="categoryId" id="category-id" class="form-control">
						<?php foreach ($categories as $category) : ?>
							<option value="<?=$category['id']?>"><?=$category['name']?></option>
						<?php endforeach; ?>
					</select>
				</div>
			<?php endif; ?>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" id="title" class="form-control" name="title" value="<?=$fields['title']?>">
			</div>
			<div class="form-group">
				<label for="text">Text</label>
				<textarea name="content" id="text" class="form-control"><?=$fields['content']?></textarea>
			</div>
			<button class="btn btn-success">Send</button>
			<div class="alert error-list">
				<?php foreach ($validateErrors as $error) : ?>
					<p class="text-danger"><?=$error?></p>
				<?php endforeach; ?>
			</div>
		</form>
	</div>
</main>