<?php
include_once ('model/messages.php');
$messages = getMessages();
?>

<h1>Chat</h1>
<a href="add.php">add</a>
<hr>
<br>
<div>
<?php foreach($messages as $message): ?>
	<div>
		<strong><?=$message['name']?></strong>
		<em><?=$message['dt_add']?></em>
		<div>
			<?=$message['text']?>
		</div>
		<hr>
	</div>
<?php endforeach; ?>

</div>