<?php
include_once ('model/messages.php');

$err = '';
$fields = ['name' => '', 'text' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields['name'] = trim($_POST['name']);
    $fields['text'] = trim($_POST['text']);

    if ($fields['name'] === '' || $fields['text'] === '') {
        $err = 'Заполните все поля!';
    } else {
        addMessage($fields);
        header('Location: index.php');
        exit();
    }
}
?>

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
