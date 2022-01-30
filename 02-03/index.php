<?php
declare(strict_types=1);
include_once('model/apps.php');

$isSend = false;
$err = '';
$name= '';
$phone= '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    if ($name === '' || $phone === '') {
        $err = 'Заполните все поля!';
    } elseif (mb_strlen($phone, 'UTF8') < 5) {
        $err = 'Текст не короче 5 символов!';
    } else {
        addApp($name, $phone);
        $isSend = true;
    }
}
?>

<div class="form">
    <?php if ($isSend): ?>
        <p>The application is added.</p>
    <?php else: ?>
        <form method="post">
            Name:<br>
            <input type="text" name="name" value="<?=$name?>"><br>
            <br>
            Phone:<br>
            <input type="text" name="phone" value="<?=$phone?>">
            <br>
            <br>
            <button>Send</button>
            <p><?=$err?></p>
        </form>
    <?php endif; ?>
</div>
