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
            <hr>
        </div>
    <?php endforeach; ?>
</div>
