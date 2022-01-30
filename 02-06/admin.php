<?php
declare(strict_types=1);

$isSend = false;
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $file = $_FILES['file'];

    if ($file['name'] === '') {
        $err = 'Файл не выбран';
    }
    elseif ($file['size'] === 0) {
        $err = 'Файл слишком большой'; // сработало ограничение сервера и файл не загрузился
    }
    elseif (!preg_match('/.*\.jpg$/', $file['name'])) {
        $err = 'Только jpg';
    }
    else {
        copy($file['tmp_name'], 'images/' . mt_rand(1000, 100000) . '.jpg');
        $isSend = true;
    }
}

?>
<div class="form">
    <?php if($isSend): ?>
        <p>Your image is done!</p>
    <?php else: ?>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button>Send</button>
            <p><?=$err?></p>
        </form>
    <?php endif; ?>
</div>