<div class="form">
    <form method="post">
        Name:<br>
        <input type="text" name="name" value="<?=$fields['name']?>"><br>
        <br>
        Text:<br>
        <textarea name="text"><?=$fields['text']?></textarea>
        <br>
        <br>
        <button>Send</button>
	    <div class="error-list">
		    <?php foreach ($validateErrors as $error) : ?>
			    <p><?=$error?></p>
		    <?php endforeach; ?>
	    </div>
    </form>
</div>
