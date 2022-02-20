<?php
include_once ('model/messages.php');
include_once ('core/arr.php');

$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['name', 'text']);

    if ($fields['name'] === '' || $fields['text'] === '') {
        $err = 'Заполните все поля!';
    } else {
        addMessage($fields);
        header('Location: index.php');
        exit();
    }
} else {
    $fields = ['name' => '', 'text' => ''];
}

include ('views/v_add.php');