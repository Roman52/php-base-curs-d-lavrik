<main>
	<h1>Edit category</h1>
	<div class="form">
		<form method="post">
			<div class="form-group">
				<label for="cat-title">Title</label>
				<input type="text" id="cat-title" class="form-control" name="cat_title" value="<?=$category['name']?>">
			</div>
			<div class="form-group">
				<label for="cat-url">Url</label>
				<input type="text" id="cat-url" class="form-control" name="cat_url" value="<?=$category['url']?>">
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