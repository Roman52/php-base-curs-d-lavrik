<main>
	<h1>Chat in table</h1>
	<hr>
	<a href="<?=BASE_URL?>">View as list</a>
	<hr>
	<table class="table table-bordered">
		<tbody>
		<?php foreach($messages as $message): ?>
			<tr>
				<td><?=$message['name']?></td>
				<td><?=$message['dt_add']?></td>
				<td><?=$message['status']?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</main>