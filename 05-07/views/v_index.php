<h1>Chat</h1>
<a href="add.php">Add</a>
<a href="index.php?view=table"> | View as Table</a>
<hr>
<br>
<div>
    <?php foreach($messages as $message): ?>
        <div>
            <strong><?=$message['name']?></strong>
            <em><?=$message['dt_add']?></em>
            <div><?=$message['text']?></div>
	        <a href="message.php?id=<?=$message['id_message'];?>">Read More</a>
            <hr>
        </div>
    <?php endforeach; ?>
</div>
