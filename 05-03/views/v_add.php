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
        <p><?=$err?></p>
    </form>
</div>
