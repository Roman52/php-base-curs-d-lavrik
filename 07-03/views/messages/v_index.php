<main>
	<h1>All messages</h1>
	<hr>
	<a href="index.php?view=table">View as table</a>
	<hr>
	<div>
		<?php foreach($messages as $message): ?>
			<div>
				<strong><?=$message['name']?></strong>
				<em><?=$message['dt_add']?></em>
				<div>
					<?=$message['text']?>
				</div>
				<a href="index.php?c=message&id=<?=$message['id_message']?>">
					Read more
				</a>
				<hr>
			</div>
		<?php endforeach; ?>
	</div>
</main>