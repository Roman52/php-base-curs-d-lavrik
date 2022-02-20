<?php
include_once ('model/messages.php');

$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = [];
    $fields['name'] = trim($_POST['name']);
    $fields['text'] = trim($_POST['text']);

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